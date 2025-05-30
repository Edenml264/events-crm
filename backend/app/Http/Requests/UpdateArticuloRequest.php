<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateArticuloRequest extends FormRequest
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
            'nombre' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|nullable|string',
            'tipo' => 'sometimes|required|string|max:100',
            'precio' => 'sometimes|required|numeric|min:0',
            'unidad_medida' => 'sometimes|required|string|max:50',
            'stock_disponible' => 'sometimes|required|integer|min:0',
            'activo' => 'sometimes|boolean',
        ];
    }
}
