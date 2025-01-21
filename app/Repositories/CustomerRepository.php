<?php

namespace App\Repositories;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class CustomerRepository extends DM_BaseRepository implements CustomerRepositoryInterface
{
    protected $model;
    protected $product_repository;
    public function __construct(User $model, $product_repository){
        $this->product_repository = $product_repository;
        $this->model = $model;
    }

    public function getAll()
    {
        return Customer::all();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function create(UserRequest $request)
    {
        return $this->model::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function update($id, UserRequest $request)
    {
        $model = $this->getById($id);
        $model->update($data);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->getById($id);
        return $model->delete();
    }
    
    public function addToCart(Request $request, $user_id, $product_id)
    {
        try {
            // Fetch the user
            $user = $this->getById($user_id);

            // Check if the product already exists in the cart
            $existingCartItem = $user->cartItems()->where('product_id', $product_id)->first();

            if ($existingCartItem) {
                return response()->json([
                    'status' => false,
                    'message' => 'This product is already in your cart. You can only have one instance of this product.'
                ]);
            }

            // Create a new cart item
            $cart = $user->cartItems()->create([
                'product_id' => $product_id,
                'quantity'   => $request->quantity,
                'unique_id'  => parent::generateUniqueRandomNumber('cart_items', 'unique_id'),
            ]);

            return response()->json(['status' => true, 'message' => 'Added to cart successfully']);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred !!',
                'error' => $th->getMessage() // Return the exception message for debugging
            ]);
        }
    }

    public function orderSingle(Request $request, $user_id){
        try {
            $user = $this->getById($user_id);
            $product = $this->product_repository->getById($request->product_id);
            if (!$product && $product->status == 0) {
                return response()->json(['message' => 'Product not found.'], 404);
            }
            // Stock Check - This is the key addition
            if ($product->stock < 1) { // Check if stock is sufficient (adjust as needed)
                return response()->json(['message' => 'Product is out of stock.'], 400); // Return error if out of stock
            }

            DB::beginTransaction();
            $order = $user->orders()->create([
                    'order_number' => parent::generateUniqueRandomNumber('orders', 'order_number'),
                    'total_amount' => $product->price * $request->quantity,
                    'status' => 'pending', // Order status: pending, processing, delivered, canceled, etc.
                    'payment_status' => 'pending', // Payment status: pending, completed, failed, etc.

                ]);
            
            $orderItem = $order->orderItems()->create([
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $product->price,
            ]);
            
            $product->decrement('stock', $request->quantity);
            

            DB::commit();
            return response()->json([
                'status' => true,
                'message' => 'Order placed successfully!',
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred while placing the order.',
                'error' => $e->getMessage(),
            ], 500);
        }
        

    }

}
            