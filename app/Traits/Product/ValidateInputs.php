<?php
    namespace App\Traits\Product;
    
    trait ValidateInputs{
        private static function validateInputs(string|array $input, string $errorMessage ,callable $validate) :array
        {
            $missedInput = $validate($input);
            return is_array($missedInput)
                ? ["validated" => false,
                    "message" => $errorMessage,
                    "invalidInputs" => $missedInput]
                : ["validated" => true];
        }
    }