<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'nombre_razon_social' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'rfc' => 'nullable|string|max:20|unique:clientes,rfc',
            'direccion_fiscal' => 'nullable|string|max:255',
            'notas' => 'nullable|string|max:500',
        ];
    }
}
