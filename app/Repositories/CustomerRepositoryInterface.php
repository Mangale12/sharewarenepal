<?php

            namespace App\Repositories;
            use App\Http\Requests\UserRequest;
            use Illuminate\Http\Request;

            interface CustomerRepositoryInterface
            {
                public function getAll();
                public function getById($id);
                public function create(UserRequest $request);
                public function update($id, UserRequest $request);
                public function delete($id);
                public function addToCart(Request $request,$user_id, $product_id);
                public function orderSingle(Request $request, $user_id);
            }
            