<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMovieRequest extends FormRequest
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
            "title" => "required|min:1|max:100|string",
            "director" => "required|min:3|max:100|string",
            "genre" => "required|min:3|max:100|string",
            "year" => "required|digits:4|integer|min:1900|max:" . (date('Y')),
            "storyline" => "required|min:3|max:1000|string"
        ];
    }
}
