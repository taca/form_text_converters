<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Copyright (C) 2011
 * Takahiro Kambe.  All rights reserved.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe
 * @package    FormTextConverters
 * @license    lgpl3 or later
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
