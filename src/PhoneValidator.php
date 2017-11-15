<?php

namespace Fixik\Validator;

class PhoneValidator
{
    /**
     * Phone validate.
     *
     * @param $attribute
     * @param $value
     * @param $parameters
     * @param $validator
     *
     * @return bool
     */
    public function validate($attribute, $value, $parameters, $validator)
    {
        $just_nam_pattern = "/[+|\-|\s|\.|\(|\)]?/";
        $num_pattern = "/^[\d]{5,14}$/";
        $us_pattern = "/^[+]?([\d]{0,3})?[\s]?[\(\.\-\s]?([\d]{2,3})[\)\.\-\s]*([\d]{2,3})[\.\-\s]?([\d]{2,3})[\.\-\s]?([\d]{2,4})$/";
        $is_num = false;

        $justNum = preg_replace($just_nam_pattern, '', $value);

        if (preg_match($num_pattern, $justNum)) {
            $is_num = true;
        }

        if ($is_num) {
            if (!preg_match($us_pattern, $value)) {
                $is_num = false;
            }
        }

        return $is_num;
    }
}