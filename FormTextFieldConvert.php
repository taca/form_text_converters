<?php

/**
 * Copyright (c) 2011-2017 Takahiro Kambe
 *
 * @license    two-clause-bsd
 *
 */

/**
 * Class LFormTextFieldFormTextFieldConvert
 *
 */

class FormTextFieldConvert extends FormTextField
{
    /**
     * validate values
     * @param mixed
     * @return mixed
     */
    protected function validator($varInput)
    {
        if (is_array($varInput))
        {
            foreach ($varInput as $k=>$v)
            {
                $varInput[$k] = $this->validator($v);
            }
            return $varInput;
        }

        $s = trim($varInput);
        if ($this->conversion) {
            $s = MiscTextConverters::normalize($s, $this);
        }
        return parent::validator($s);
    }
}
