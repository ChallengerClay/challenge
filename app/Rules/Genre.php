<?php

namespace App\Rules;

use App\Models\Constant;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Genre implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $const = Constant::where('id',1)->first();
        if(!in_array($value,explode(",",$const->value))){
            $fail(__('invalid genre'));
        }
    }
}
