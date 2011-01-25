<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Copyright (C) 2011
 * Takahiro Kambe.  All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE AUTHOR AND CONTRIBUTORS ``AS IS'' AND
 * ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED.  IN NO EVENT SHALL THE AUTHOR OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS
 * OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION)
 * HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 * PHP version 5
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe
 * @package    FormTextConverters
 * @license    two-clause-bsd
 * @filesource
 *
 */

/**
 * Class FormTextAreaConvert
 *
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe 
 * @package    FormTextConverters
 */

class FormTextAreaConvert extends FormTextArea
{
    /**
     * validate values with text conversion
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

?>
