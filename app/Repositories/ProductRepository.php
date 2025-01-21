<?php

            namespace App\Repositories;
            use App\Http\Requests\ProductRequest;
            use App\Models\Product;

            class ProductRepository extends DM_BaseRepository implements ProductRepositoryInterface
            {
                protected $model;
                public function __construct(Product $model){
                    $this->model = $model;
                }
                public function getAll()
                {
                    return $this->model::all();
                }
                public function getActiveData(){
                    return $this->model::where('status', 1)
                                        ->with('multi_images')
                                        ->get();
                }

                public function getById($id)
                {
                    return $this->model::findOrFail($id);
                }

                public function productDetails($slug){
                    return $this->model::where('product_slug_en', $slug)
                                        ->with('multi_images')
                                        ->firstOrFail();
                }

                public function create(ProductRequest $request)
                {
                    return Product::create($request);
                }

                public function update($id, ProductRequest $request)
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
            }
            