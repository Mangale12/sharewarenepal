<?php

            namespace App\Repositories;
            use App\Http\Requests\UserRequest;
            use App\Models\User;
            use Illuminate\Support\Facades\Hash;

            class CustomerRepository extends DM_BaseRepository implements CustomerRepositoryInterface
            {
                protected $model;

                public function __construct(User $model){
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

                public function update($id, CustomerRequest $request)
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
            