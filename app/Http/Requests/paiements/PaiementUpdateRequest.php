<?php

namespace App\Http\Requests\paiements;

use Illuminate\Foundation\Http\FormRequest;

class PaiementUpdateRequest extends FormRequest
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
            'montant' => 'numeric|required',
            'date_paiement' => 'date|required',
            'moyen_paiement' => 'string|required|in:carte,virement,espece'
        ];
    }
}
