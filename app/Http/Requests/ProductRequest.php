<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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

    public function rules()
    {
        $pro_id = $this->request->get("pro_id");

        return [
            "Product_name" => "required|unique:products,Product_name," . $pro_id,
            "description" => "required|min:20",
        ];
    }

    public function messages()
    {
        return [
            "Product_name.required" => "يرجي ادخال اسم المنتج",
            "Product_name.unique" => "اسم المنتج مسجل من قبل",
            "description.required" => "يرجي ادخال الوصف",
            "description.min" => "يرجي ان يكون الوصف اكبر من 20 حرف",
        ];
    }
}
