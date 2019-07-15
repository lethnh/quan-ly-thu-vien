<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckISBN implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($value == '') {
            return true;
        }
        $pattern = '/[^\dX]/i';
        $value = preg_replace($pattern, '', $value);
        $chars = preg_split('//', $value, -1, PREG_SPLIT_NO_EMPTY);
        $sum = 0;
        $checksum = '';

        // See http://en.wikipedia.org/wiki/International_Standard_Book _Number
        switch (count($chars)) {
            case 10:
                for ($i = 0; $i < 9; $i++) {
                    $sum += ((10 - $i) * (int) $chars[$i]);
                };
                $checksum = 11 - ($sum % 11);
                if ($checksum === 11) {
                    $checksum = 0;
                } elseif ($checksum === 10) {
                    $checksum = 'X';
                }
                return ($checksum == $chars[9]);
            case 13:
                $sum = 0;
                for ($i = 0; $i < 12; $i++) {
                    $sum += (($i % 2 === 0) ? (int) $chars[$i] : ((int) $chars[$i] * 3));
                }
                $checksum = 10 - ($sum % 10);
                if ($checksum === 10) {
                    $checksum = '0';
                }
                return ($checksum === $chars[12]);

            default:
                return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
