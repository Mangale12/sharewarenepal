<?php

            namespace App\Repositories;
            use App\Http\Requests\ProductRequest;
            interface ProductRepositoryInterface
            {
                public function getAll();
                public function getActiveData();
                public function getById($id);
                public function productDetails($slug);
                public function create(ProductRequest $request);
                public function update($id, ProductRequest $request);
                public function delete($id);
            }
            