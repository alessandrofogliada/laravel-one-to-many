<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        return [
            'title'=>'required|min:3|max:255',
            'text'=>'required|min:5|max:255',
            'reading_time'=>'required|min:1|max:100',
            'category_id'=>'exists|categories,id',
        ];
    }

    public function messages(){
        return [
            'title.required'=>'il campo deve avere almeno 3 caratteri',
            'text.required'=>'il campo deve avere almeno 5 caratteri',
            'reading_time.required'=>'il campo deve avere almeno 1 carattere',
            'categories_id'=>'il campo è obblicatorio'
    ];
    }
}
