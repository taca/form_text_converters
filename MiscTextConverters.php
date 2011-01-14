<?php

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
 * @package    lFormText
 * @license    2-clause-bsd
 * @filesource
 *
 */

/**
 * Class LTextConverters
 *
 * @copyright  Takahiro Kambe 2011
 * @author     Takahiro Kambe 
 * @package    lFormText
 */

class LTextConverters
{
    /**
     * Current object instance (Singleton)
     * @var object
     */
    protected static $objInstance;

    /**
     * convert map for mb_string_kana() half/full-width
     * @var array
     */
    private $fwmap = array(
        'alpha' => 'r', 'digit' => 'n', 'space' => 's', 'alnum' => 'a');

    /**
     * convert map from half-width Katakana for mb_string_kana()
     * @var array
     */
    private $hKatakana = array('toFKatakana' => 'K', 'toFHiragana' => 'H');

    /**
     * option string for merge Dakuten/Handakuten for mb_string_kana()
     * @var string
     */
    private $hDakuten = 'V';

    /**
     * convert map from full-width Katakana for mb_string_kana()
     * @var array
     */
    private $fKatakana = array('toFHiragana' => 'c', 'toHKatakana' => 'k');

    /**
     * convert map from full-width Hiragana for mb_string_kana()
     * @var array
     */
    private $fHiragana = array('toFKatakana' => 'C', 'toHKatakana' => 'h');

    /**
     * Prevent direct instantiation (Singleton)
     */
    protected function __construct() {}

    /**
     * Prevent cloning of the object (Singleton)
     */
    final private function __clone() {}

    /**
     * Instantiate a files driver object and return it (Factory)
     * @return object
     */
    public static function getInstance()
    {
        if (!is_object(self::$objInstance))
        {
            self::$objInstance = new LTextConverters();
        }

        return self::$objInstance;
    }

    public function utf8_normalize($utf8_string, $type = 'NFKC')
    {
        if (empty($type)) {
            return $utf8_string;
        }

        $type = strtoupper($type);
        $normalizer = NULL;
        if (is_null($this->normalizer)) {
            include_once 'I18N/UnicodeNormalizer.php';
            if (class_exists('I18N_UnicodeNormalizer', false)) {
                $this->import('I18N_UnicodeNormalizer');
                $normalizer = $this->I18N_UnicodeNormalizer;
            }
        }
        if ($normalizer) {
            $utf8_string = $normalizer->normalize($utf8_string, $type);
        }
        return $utf8_string;
    }

    public function ja_normalize($utf8_string, $conv = 'KVas')
    {
        if (empty($conv)) {
            return $utf8_string;
        }
        $utf8_string = mb_convert_kana($utf8_string, $conv);
        return $utf8_string;
    }

    public function normalize($utf8_string, $widgetObject)
    {
        $s = $utf8_string;
        if (!empty($widgetObject->normalize)) {
            $s = $this->utf8_normalize($s, $widgetObject->normalize);
        }
        if (USE_MBSTRING) {
            $conv = '';
            foreach ($this->fwmap as $k => $v) {
                switch ($widgetObject->$k) {
                case 'toHalfwidth':
                    $conv .= $this->fwmap[$k];
                    break;
                case 'toFullwidth':
                    $conv .= strtoupper($this->fwmap[$k]);
                    break;
                }
            }
            $value = $this->hKatakana[$widgetObject->hKatakana];
            if (!empty($value) && $widgetObject->hDakuten) {
                $value .= $this->hDakuten;
            }
            $conv .= $value;
            $conv .= $this->fKatakana[$widgetObject->fKatakana];
            $conv .= $this->fHiragana[$widgetObject->fHiragana];
            $s = $this->ja_normalize($s, $conv);
        }
        return $s;
    }
}

?>
