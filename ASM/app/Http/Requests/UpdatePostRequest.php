<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePostRequest extends FormRequest
{
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
        $id = $this->route('post');
        return [
            'title'=> 'required',
            'content'=> 'required|string',
            'image' => [
                'nullable',
                'image',
            ],
            'category_id'=> 'required',
            'tags'=> 'required|array',
            'tags.*'=> 'required|integer',
        ];
    }
}
