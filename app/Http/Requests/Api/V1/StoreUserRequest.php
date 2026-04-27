<?php

namespace App\Http\Requests\Api\V1;

use App\Enums\Sex;
use App\Rules\CpfValido;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'cpf' => ['required', 'string', 'max:14', new CpfValido],
            'name' => ['required', 'string', 'min:5', 'max:255', 'regex:/^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/'],
            'birthday' => ['required', 'date'],
            'sex' => ['required', Rule::enum(Sex::class)],
            'phone' => ['required', 'string', 'regex:/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/'],
            'email' => ['required', 'email:rfc', 'max:255'],
            'is_counselor' => ['required', 'boolean'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
            ],
            'marital_status_id' => ['required', 'integer', 'exists:marital_statuses,id'],
        ];
    }
}
