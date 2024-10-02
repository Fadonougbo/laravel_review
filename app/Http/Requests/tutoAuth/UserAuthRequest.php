<?php

namespace App\Http\Requests\tutoAuth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserAuthRequest extends FormRequest
{


    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $data=[
            'email'=>['email','exists:users,email','required'],
            'password'=>['min:2','required']
        ];

        if($this->route()->getName()==='user.auth.doCreate') {
            $data['name']=['string','min:2','required'];
            $data['email']=['email','unique:users,email','required'];
        }

        return $data;
    }
}
