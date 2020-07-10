<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
             'name'=>'required|unique:products,name',
             'category_id'=>'required|integer',
             'image'=>'required|image',
             'price'=>'required|numeric',
             'description'=>'required'
        ];
    }

    public function attributes()
    {
        return [
         'name' => 'nombre',
         'category_id' =>'categoria',
         'image' =>'imagen',
         'price'=>'precio',
         'description'=>'descripcion'
        ];
    }
}
