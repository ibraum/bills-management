<?php

namespace App\Http\Requests\bills;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest
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
            'reference' => 'string|required|max:255',
            'user_id' => 'integer|required|exists:users,user_id',
            'date_emission' => 'date|required',
            'date_echeance' => 'date|required',
            'status' => 'string|required|in:en attente,partiellement payé,payé,annulé',
            'total_ht' => 'numeric|required',
            'taux_tva' => 'numeric|required',
            'total_tva' => 'numeric|required',
            'total_ttc' => 'numeric|required',
            'description' => 'string|nullable',
        ];
    }
}
