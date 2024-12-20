<?php

            namespace App\Repositories;
            use App\Http\Requests\CustomerRequest;
            interface CustomerRepositoryInterface
            {
                public function getAll();
                public function getById($id);
                public function create(CustomerRequest $request);
                public function update($id, CustomerRequest $request);
                public function delete($id);
            }
            