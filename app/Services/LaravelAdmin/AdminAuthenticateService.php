<?php

namespace App\Services\LaravelAdmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class AdminAuthenticateService
{
    /**
     * check admin register is valid
     *
     * @param $request
     * @return Validator $validator
     */
    public function validateAdminRegister($request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'name' => 'required|min:2',
                'email' => ['required', 'email', Rule::unique('users')->whereNull('deleted_at')],
                'password' => 'required|min:4',
                'acceptTerms' => 'required',
            ],
            [
                'acceptTerms.required' => 'You must agree before submitting.',
            ],
        );

        return $validator;
    }

    /**
     * check admin login is valid
     *
     * @param $request
     * @return Validator $validator
     */
    public function validateAdminLogin($request)
    {
        $data = $request->all();

        $validator = Validator::make(
            $data,
            [
                'email' => 'required|email',
                'password' => 'required|min:4',
            ],
        );

        return $validator;
    }
}
