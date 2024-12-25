<?php

namespace App\Http\Controllers\frontend;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepository = $productRepository;
    }
    public function index()
    {

        $data['products'] = $this->productRepository->getActiveData();
        return view('frontend.index', compact('data'));
    }

    public function productDetails($slug){
        $data['product'] = $this->productRepository->productDetails($slug);
        return view('frontend.product-details', compact('data'));
    }

    public function wishlist(){
        return view('frontend.wishlist');
    }

    public function login(){
        if (Auth::check()) {
            return redirect()->route('user.account');
        }
        return view('frontend.login');
    }

    public function account(){
        return view('frontend.account');
    }
    public function cart(){
        return view('frontend.cart');
    } 
    public function register(){
        return view('frontend.register');
    }
    public function chekoutProduct($slug){
        return view('frontend.checkout');
    }
    public function detailsbn($category, $slug)
    {
        $product                    = Product::where('product_slug_bn', $slug)->firstOrFail();
        $id                         = $product->id;
        $category                   =Category::where('id',$product->category_id)->firstOrFail();
        $data['product']            = $product;

        $data['previous_product']   = Product::where('id', '<', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $data['next_product']       = Product::where('id', '>', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $color                      = $product->product_color;
        $data['product_color']      = explode(',', $color);
        $size                       = $product->size;
        $data["size"]               = explode(',', $size);
        return view('frontend.shop.details', $data);
    }
    public function detailsen($category, $slug)
    {
        $product                    = Product::where('product_slug_en', $slug)->firstOrFail();
        $id                         = $product->id;
        $data['product']            = $product;

        $data['previous_product']   = Product::where('id', '<', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $data['next_product']       = Product::where('id', '>', $id)->where('status', 1)->orderBy('id', 'desc')->first();
        $color                      = $product->product_color;
        $data['product_color']      = explode(',', $color);
        $size                       = $product->size;
        $data["size"]               = explode(',', $size);
        return view('frontend.shop.details', $data);
    }

    public function category()
    {
        $category = Category::where('status', 1)->inRandomOrder()->first();
        return view('frontend.shop.category',compact('category'));
    }
    function viewProduct($id)
    {
        $product                = Product::findOrFail($id);
        $category               = $product->category;
        $color                  = $product->product_color;
        $product_color          = explode(',', $color);

        $size = $product->size;
        $size = explode(',', $size);

        return response()->json(array(
            'product'           => $product,
            'color'             => $product_color,
            'size'              => $size,
            'category'          => $category,
        ));
    }

    public function categoryproductsen($category, Request $request)
    {
        $colors             = Product::productFilter()['colors'];
        $sizes              = Product::productFilter()['sizes'];
        if ($request->ajax()) {
            $data           = $request->all();
            $url            = $data['url'];
            if (session()->get('language') === 'bangla') {
                $category   = Category::where('category_slug_bn', $url)->firstOrFail();
            } else {
                $category   = Category::where('category_slug_en', $url)->firstOrFail();
            }

            $id             = $category->id;
            $products       = Product::where('category_id', $id);
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            if (isset($data['color']) && !empty($data['color'])) {
                $color      = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }

            if (isset($data['size']) && !empty($data['size'])) {
                $size       = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            if (isset($data['min_price']) && !empty($data['min_price'])) {
                $min_price  = $data['min_price'];
                $products->where('price', '>=', $min_price);
            }
            if (isset($data['max_price']) && !empty($data['max_price'])) {
                $max_price  = $data['max_price'];
                $products->where('price', '<=', $max_price);
            }

            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(30);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $category = Category::where('category_slug_en', $category)->with('products')->firstOrFail();
            return view('frontend.shop.category', compact('category', 'colors', 'sizes'));
        }
    }

    public function categoryproductsbn($category, Request $request)
    {
        $colors             = Product::productFilter()['colors'];
        $sizes              = Product::productFilter()['sizes'];
        if ($request->ajax()) {
            $data       = $request->all();
            $url            = $data['url'];
            if (session()->get('language') === 'bangla') {
                $category   = Category::where('category_slug_bn', $url)->firstOrFail();
            } else {
                $category   = Category::where('category_slug_en', $url)->firstOrFail();
            }

            $id             = $category->id;
            $products       = Product::where('category_id', $id);
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            if (isset($data['color']) && !empty($data['color'])) {
                $color      = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }

            if (isset($data['size']) && !empty($data['size'])) {
                $size       = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            if (isset($data['min_price']) && !empty($data['min_price'])) {
                $min_price = $data['min_price'];
                $products->where('price', '>=', $min_price);
            }
            if (isset($data['max_price']) && !empty($data['max_price'])) {
                $max_price = $data['max_price'];
                $products->where('price', '<=', $max_price);
            }
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(30);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $category = Category::where('category_slug_bn', $category)->with('products')->firstOrFail();
            return view('frontend.shop.category', compact('category', 'colors', 'sizes'));
        }
    }


    public function subcategoryproductsen($category, $subcategory, Request $request)
    {
        $colors                 = Product::productFilter()['colors'];
        $sizes                  = Product::productFilter()['sizes'];
        $brands                 = Brand::where('status', 1)->get();
        if ($request->ajax()) {
            $data               = $request->all();
            $url                = $data['url'];
            if (session()->get('language') === 'bangla') {
                $subcategory    = SubCategory::where('subcategory_slug_bn', $url)->firstOrFail();
            } else {
                $subcategory    = SubCategory::where('subcategory_slug_en', $url)->firstOrFail();
            }
            $id                 = $subcategory->id;
            $products           = Product::where('subcategory_id', $id);
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            if (isset($data['color']) && !empty($data['color'])) {
                $color          = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }
            if (isset($data['size']) && !empty($data['size'])) {
                $size           = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }

            if (isset($data['min_price']) && !empty($data['min_price'])) {
                $min_price      = $data['min_price'];
                $products->where('price', '>=', $min_price);
            }
            if (isset($data['max_price']) && !empty($data['max_price'])) {
                $max_price      = $data['max_price'];
                $products->where('price', '<=', $max_price);
            }
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products   = $products->paginate(10);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $subcategory = SubCategory::where('subcategory_slug_en', $subcategory)->with('products')->firstOrFail();
            return view('frontend.shop.subcategory', compact('subcategory', 'colors', 'sizes', 'brands'));
        }
    }
    public function subcategoryproductsbn($category, $subcategory, Request $request)
    {
        $colors             = Product::productFilter()['colors'];
        $sizes              = Product::productFilter()['sizes'];
        $brands             = Brand::where('status', 1)->get();
        if ($request->ajax()) {
            $data           = $request->all();
            $url            = $data['url'];
            if (session()->get('language') === 'bangla') {
                $subcategory= SubCategory::where('subcategory_slug_bn', $url)->firstOrFail();
            } else {
                $subcategory= SubCategory::where('subcategory_slug_en', $url)->firstOrFail();
            }
            $id             = $subcategory->id;
            $products       = Product::where('subcategory_id', $id);
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            if (isset($data['color']) && !empty($data['color'])) {
                $color      = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }

            if (isset($data['size']) && !empty($data['size'])) {
                $size       = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            if (isset($data['min_price']) && !empty($data['min_price'])) {
                $min_price  = $data['min_price'];
                $products->where('price', '>=', $min_price);
            }
            if (isset($data['max_price']) && !empty($data['max_price'])) {
                $max_price = $data['max_price'];
                $products->where('price', '<=', $max_price);
            }
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(10);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $subcategory = SubCategory::where('subcategory_slug_bn', $subcategory)->with('products')->firstOrFail();
            return view('frontend.shop.subcategory', compact('subcategory', 'colors', 'sizes', 'brands'));
        }
    }

    public function subsubcategoryproductsen($category, $subcategory, $subsubcategory, Request $request)
    {
        $colors         = Product::productFilter()['colors'];
        $sizes          = Product::productFilter()['sizes'];
        $brands         = Brand::where('status', 1)->get();
        if ($request->ajax()) {
            $data       = $request->all();
            $url        = $data['url'];
            if (session()->get('language') === 'bangla') {
                $subsubcategory = SubSubCategory::where('subsubcategory_slug_bn', $url)->firstOrFail();
            } else {
                $subsubcategory = SubSubCategory::where('subsubcategory_slug_en', $url)->firstOrFail();
            }
            $id         = $subsubcategory->id;
            $products   = Product::where('subsubcategory_id', $id);
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            if (isset($data['color']) && !empty($data['color'])) {
                $color  = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }
            if (isset($data['size']) && !empty($data['size'])) {
                $size = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            if (isset($data['min_price']) && !empty($data['min_price'])) {
                $min_price = $data['min_price'];
                $products->where('price', '>=', $min_price);
            }
            if (isset($data['max_price']) && !empty($data['max_price'])) {
                $max_price = $data['max_price'];
                $products->where('price', '<=', $max_price);
            }
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(10);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $subsubcategory = SubSubCategory::where('subsubcategory_slug_en', $subsubcategory)->with('products')->firstOrFail();
            return view('frontend.shop.subsubcategory', compact('subsubcategory', 'brands', 'colors', 'sizes'));
        }
    }
    public function subsubcategoryproductsbn($category, $subcategory, $subsubcategory, Request $request)
    {
        $colors         = Product::productFilter()['colors'];
        $sizes          = Product::productFilter()['sizes'];
        $brands         = Brand::where('status', 1)->get();
        if ($request->ajax()) {
            $data       = $request->all();
            $url        = $data['url'];
            if (session()->get('language') === 'bangla') {
                $subsubcategory = SubSubCategory::where('subsubcategory_slug_bn', $url)->firstOrFail();
            } else {
                $subsubcategory = SubSubCategory::where('subsubcategory_slug_en', $url)->firstOrFail();
            }
            $id         = $subsubcategory->id;
            $products   = Product::where('subsubcategory_id', $id);
            if (isset($data['brand']) && !empty($data['brand'])) {
                $products->where('brand_id', $data['brand']);
            }
            if (isset($data['color']) && !empty($data['color'])) {
                $color  = $data['color'];
                $products->where('product_color', 'LIKE', '%' . $color . "%");
            }
            if (isset($data['size']) && !empty($data['size'])) {
                $size   = $data['size'];
                $products->where('size', 'LIKE', '%' . $size . "%");
            }
            if (isset($data['min_price']) && !empty($data['min_price'])) {
                $min_price = $data['min_price'];
                $products->where('price', '>=', $min_price);
            }
            if (isset($data['max_price']) && !empty($data['max_price'])) {
                $max_price = $data['max_price'];
                $products->where('price', '<=', $max_price);
            }
            // Sort product
            if (isset($data['sort']) && !empty($data['sort'])) {
                if ($data['sort'] == "product_latest") {
                    $products->orderBy('id', 'desc');
                } else if ($data['sort'] == "product_name_a_to_z") {
                    $products->orderBy('product_name_en', 'Asc');
                } else if ($data['sort'] == "product_name_z_to_a") {
                    $products->orderBy('product_name_en', 'desc');
                } else if ($data['sort'] == "price_low") {
                    $products->orderBy('price', 'Asc');
                } else if ($data['sort'] == "price_high") {
                    $products->orderBy('price', 'desc');
                } else {
                    $products->orderBy('id', 'desc');
                }
            }

            $products = $products->paginate(10);
            return view('frontend.shop.listing')->with(compact('products'));
        } else {
            $subsubcategory = SubSubCategory::where('subsubcategory_slug_bn', $subsubcategory)->with('products')->firstOrFail();
            return view('frontend.shop.subsubcategory', compact('subsubcategory', 'brands', 'colors', 'sizes'));
        }
    }


    public function commingsoon(){
        return view('frontend.partials.commingsoon');
    }

    public function productList(){
        $data['rows'] = Product::where('status', 1)
                                ->orderBy('id', 'desc')
                                ->get();
        $data['categories']         = Category::with('products')->where('status', true)->oldest('id')->where('status', 1)->get();
        return view('frontend.product_list', compact('data'));
    }
}
