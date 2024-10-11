<?php

namespace App\Http\Requests\articles;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'bill_id' => 'integer|required|exists:bills,bill_id',
            'nom_article' => 'string|required|max:255',
            'quantite' => 'integer|required',
            'prix_unitaire' => 'numeric|required',
            'total_article' => 'numeric|required'
        ];
    }
}
