<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            "category_id"=>["required","integer"],
            "name"=>["required","string","max:200"],
            "slug"=>["required","string","max:200","unique:posts,slug"],
            "description"=>["required","string"],
            "yt_iframe"=>["sometimes","string"],
            "meta_title"=>["required","string","max:200"],
            "meta_description"=>["required","string","max:200"],
            "meta_keywords"=>["required","string","max:200"],
            "status"=>["sometimes","accepted"]
        ];
    }
}
