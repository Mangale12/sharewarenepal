<?php

            namespace App\Repositories;
            use App\Http\Requests\UserRequest;
            interface UserRepositoryInterface
            {
                public function getAll();
                public function getById($id);
                public function create(UserRequest $request);
                public function update($id, UserRequest $request);
                public function delete($id);
            }
            