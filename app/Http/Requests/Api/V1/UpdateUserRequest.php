<?php

namespace App\Http\Requests\Api\V1;

use App\Enums\Sex;
use App\Rules\CpfValido;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'cpf' => ['sometimes', 'required', 'string', 'max:14', new CpfValido],
            'name' => ['sometimes', 'required', 'string', 'min:5', 'max:255', 'regex:/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/'],
            'birthday' => ['sometimes', 'required', 'date'],
            'sex' => ['sometimes', 'required', Rule::enum(Sex::class)],
            'phone' => ['sometimes', 'required', 'string', 'regex:/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/'],
            'email' => ['sometimes', 'required', 'email:rfc', 'max:255'],
            'is_counselor' => ['sometimes', 'required', 'boolean'],
            'password' => [
                'sometimes',
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],
            'marital_status_id' => ['sometimes', 'required', 'integer', 'exists:marital_statuses,id'],
        ];
    }
}
