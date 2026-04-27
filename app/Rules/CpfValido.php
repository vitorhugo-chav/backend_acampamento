<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CpfValido implements Rule
{
    public function passes($attribute, $value): bool
    {
        $cpf = preg_replace('/[^0-9]/', '', $value);

        if (strlen($cpf) !== 11) {
            return false;
        }

        if (str_repeat($cpf[0], 11) === $cpf) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            $d = 0;
            for ($c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }

    public function message(): string
    {
        return 'O CPF informado não é válido.';
    }
}
