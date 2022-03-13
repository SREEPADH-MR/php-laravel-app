<?php

namespace App\Services\LaravelAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserService
{
    /**
     * check admin user is valid
     *
     * @param $request
     * @return Validator $validator
     */
    public function validateAdminUser($request, $userId)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'name' => 'required|min:2',
                'email' => ['required', 'email', Rule::unique('users')->whereNull('deleted_at')->ignore($userId)],
            ],
        );

        return $validator;
    }
}
