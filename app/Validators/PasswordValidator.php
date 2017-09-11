<?php

namespace App\Validators;

use Illuminate\Validation\Validator;

class PasswordValidator implements ValidatorContract
{
    /**
     * @param string $attribute
     * @param string $value
     * @param array $parameters
     * @param Validator $validator
     * @return bool
     */
    public function validate($attribute, $value, $parameters, $validator): bool
    {
        return !$value OR !!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*/', $value);
    }
}