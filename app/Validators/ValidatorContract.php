<?php

namespace App\Validators;

use Illuminate\Validation\Validator;

interface ValidatorContract
{
    /**
     * @param string $attribute
     * @param string $value
     * @param array $parameters
     * @param Validator $validator
     * @return bool
     */
    public function validate($attribute, $value, $parameters, $validator): bool;
}