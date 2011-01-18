<?php

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
 * @package    lFormText
 * @license    lgpl3 or later
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
    protected static $normalizer;

    /**
     * convert map for mb_string_kana() half/full-width
     * @var array
     */
    private static $fwmap = array(
        'alpha' => 'r', 'digit' => 'n', 'space' => 's', 'alnum' => 'a');

    /**
     * convert map from half-width Katakana for mb_string_kana()
     * @var array
     */
    private static $hKatakana = array(
        'toFKatakana' => 'K', 'toFHiragana' => 'H');

    /**
     * option string for merge Dakuten/Handakuten for mb_string_kana()
     * @var string
     */
    private static $hDakuten = 'V';

    /**
     * convert map from full-width Katakana for mb_string_kana()
     * @var array
     */
    private static $fKatakana = array(
        'toFHiragana' => 'c', 'toHKatakana' => 'k');

    /**
     * convert map from full-width Hiragana for mb_string_kana()
     * @var array
     */
    private static $fHiragana = array(
        'toFKatakana' => 'C', 'toHKatakana' => 'h');

    public static function utf8_normalize($utf8_string, $type = 'NFKC')
    {
        if (empty($type)) {
            return $utf8_string;
        }

        $type = strtoupper($type);
        $normalizer = NULL;
        if (is_null(self::$normalizer)) {
            include_once 'I18N/UnicodeNormalizer.php';
            if (class_exists('I18N_UnicodeNormalizer', false)) {
                self::$normalizer = $normalizer = new I18N_UnicodeNormalizer();
            }
        }
        if ($normalizer) {
            $utf8_string = $normalizer->normalize($utf8_string, $type);
        }
        return $utf8_string;
    }

    public static function ja_normalize($utf8_string, $conv = 'KVas')
    {
        if (empty($conv)) {
            return $utf8_string;
        }
        $utf8_string = mb_convert_kana($utf8_string, $conv);
        return $utf8_string;
    }

    public static function normalize($utf8_string, $widgetObject)
    {
        $s = $utf8_string;
        if (!empty($widgetObject->normalize)) {
            $s = self::utf8_normalize($s, $widgetObject->normalize);
        }
        if (USE_MBSTRING) {
            $conv = '';
            foreach (self::$fwmap as $k => $v) {
                switch ($widgetObject->$k) {
                case 'toHalfwidth':
                    $conv .= self::$fwmap[$k];
                    break;
                case 'toFullwidth':
                    $conv .= strtoupper(self::$fwmap[$k]);
                    break;
                }
            }
            $value = self::$hKatakana[$widgetObject->hKatakana];
            if (!empty($value) && $widgetObject->hDakuten) {
                $value .= self::$hDakuten;
            }
            $conv .= $value;
            $conv .= self::$fKatakana[$widgetObject->fKatakana];
            $conv .= self::$fHiragana[$widgetObject->fHiragana];
            $s = self::ja_normalize($s, $conv);
        }
        return $s;
    }
}

?>
