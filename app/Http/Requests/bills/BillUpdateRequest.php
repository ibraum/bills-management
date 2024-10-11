<?php

namespace App\Http\Requests\bills;

use Illuminate\Foundation\Http\FormRequest;

class BillUpdateRequest extends FormRequest
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
            'reference' => 'string|nullable|max:255',
            'date_emission' => 'date|nullable',
            'date_echeance' => 'date|nullable',
            'status' => 'string|nullable|in:en attente,partiellement payé,payé,annulé',
            'total_ht' => 'numeric|nullable',
            'taux_tva' => 'numeric|nullable',
            'total_tva' => 'numeric|nullable',
            'total_ttc' => 'numeric|nullable',
            'description' => 'string|nullable',
        ];
    }
}
