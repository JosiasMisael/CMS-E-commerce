<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'last_name'=>'required',
            'email' =>'required|email|unique:users,email|max:255',
            'password'=>'required|confirmed'
        ];
    }
   public function attributes()
   {
       return [
           'name'=>'nombre',
           'last_name'=>'apellido',
           'email'=>'correo electronico',
           'password'=>'contraseña'
       ];
   }
}
