<?php

namespace App\Http\Requests\Api\V1;

use App\Enums\Sex;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'cpf' => ['required', 'string', 'max:14', 'unique:users,cpf'],
            'name' => ['required', 'string', 'max:255'],
            'birthday' => ['required', 'date'],
            'sex' => ['required', Rule::enum(Sex::class)],
            'phone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'marital_status_id' => ['required', 'integer', 'exists:marital_statuses,id'],
        ];
    }
}
