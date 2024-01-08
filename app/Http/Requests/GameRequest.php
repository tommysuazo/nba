<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class GameRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fromDate' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    // Validar que "toDate" no sea mayor que el día de hoy
                    if (strtotime($value) > strtotime(now())) {
                        $fail('La fecha final no puede ser mayor que el día de hoy.');
                    }
                },
            ],
            'toDate' => [
                'required',
                'date',
                Rule::requiredIf(function () {
                    return $this->input('fromDate');
                }), // "fromDate" es requerido si "fromDate" está presente
                function ($attribute, $value, $fail) {
                    // Validar que "fromDate" no sea menor que "fromDate"
                    $fromDate = $this->input('fromDate');
                    if (strtotime($value) < strtotime($fromDate)) {
                        $fail('La fecha inicial no puede ser menor que la fecha final.');
                    }
                },
            ],
        ];
    }
}
