<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCotizacionRequest extends FormRequest
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
            'cliente_id' => 'sometimes|required|exists:clientes,id',
            'fecha' => 'sometimes|required|date',
            'estado' => 'sometimes|in:pendiente,aceptada,rechazada,convertida',
            'total' => 'sometimes|required|numeric|min:0',
            'notas' => 'sometimes|nullable|string',
        ];
    }
}
