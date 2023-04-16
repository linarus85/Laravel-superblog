<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'prev_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'nullable|array',
            'tag_id.*' => 'nullable|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'field not be empty',
            'title.string' => 'not string',
            'content.required' => 'field not be empty',
            'content.string' => 'not string',
            'content' => 'required|string',
            'prev_image.required' => 'required',
            'main_image.required' => 'required'
        ];
    }
}
