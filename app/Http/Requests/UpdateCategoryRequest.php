<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=>["required","string","max:200", "unique:categories,name,".$this->category->id],
            "slug"=>["required","string","max:200","unique:categories,slug,".$this->category->id],
            "description"=>["required","string"],
            "image"=>["sometimes","image","mimes:jpeg,png,jpg,gif"],
            "meta_title"=>["required","string","max:200"],
            "meta_description"=>["required","string","max:200"],
            "meta_keywords"=>["required","string","max:200"],
            "status"=>["sometimes","accepted"]
        ];
    }
}
