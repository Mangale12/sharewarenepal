<?php

            namespace App\Repositories;
            use App\Http\Requests\UserRequest;
            use App\Models\User;

            class UserRepository extends DM_BaseRepository implements UserRepositoryInterface
            {
                public function getAll()
                {
                    return User::all();
                }

                public function getById($id)
                {
                    return User::findOrFail($id);
                }

                public function create(UserRequest $request)
                {
                    return User::create($request);
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
            }
            