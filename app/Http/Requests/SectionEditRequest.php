<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionEditRequest extends FormRequest
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
        $id = $this->request->get("id");
        return [
            "section_name" => "required|max:255|unique:sections,section_name," . $id,
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
