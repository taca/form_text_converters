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
 * @package    
 * @license    2-clause-bsd
 * @filesource
 *
 */

/**
 * Class FormValidater
 *
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe 
 * @package    t-form-validations
 */

class TFormValidater extends Frontend
{
	function validateForm($rgxp, $varInput, $widget)
	{
		$status = true;

		switch ($rgxp)
		{
		case 'email-noidn':
			if (!$widget->isValidEmailAddress($s))
			{
				$widget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['email-noidn'], $widget->strLabel));
			}
			$varInput = $s;
			break;
		case 'url-noidn':
			if (!preg_match('/^[a-zA-Z0-9\.\+\/\?#%:,;\{\}\(\)\[\]@&=~_-]*$/', $varInput))
			{
				$widget->addError(sprintf($GLOBALS['TL_LANG']['ERR']['url-noidn'], $widget->strLabel));
			}
			break;
		default:
			$status = false;
		}
		return $status;
	}
}

?>