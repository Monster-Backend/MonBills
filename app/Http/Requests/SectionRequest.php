<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
        return [
            "section_name" => "required|unique:sections|max:255",
            "description" => "required|min:20",
        ];
    }

    public function messages()
    {
        return [
                "section_name.required" => "يرجي ادخال اسم القسم",
                "section_name.unique" => "اسم القسم مسجل من قبل",
                "description.required" => "يرجي ادخال الوصف",
                "description.min" => "يرجي ان يكون الوصف اكبر من 20 حرف",
        ];
    }
}
