<?php

namespace App\Http\Requests\paiements;

use Illuminate\Foundation\Http\FormRequest;

class PaiementRequest extends FormRequest
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
            'montant' => 'numeric|required',
            'date_paiement' => 'date|required',
            'moyen_paiement' => 'string|required|in:carte,virement,espece'
        ];
    }
}
