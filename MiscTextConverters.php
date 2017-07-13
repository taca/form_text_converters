<?php

/**
 * Copyright (c) 2011-2017 Takahiro Kambe
 *
 * @license    two-clause-bsd
 *
 */

/**
 * Class MiscTextConverters
 *
 */

class MiscTextConverters
{
    protected static $normalizer;

    /**
     * convert map for mb_string_kana() half/full-width
     * @var array
     */
    private static $fwmap = array(
        'convert_alpha' => 'r', 'convert_digit' => 'n',
        'convert_space' => 's', 'convert_alnum' => 'a');

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

    public static function normalize_utf8($utf8_string, $type = 'NFKC')
    {
        if (empty($type) || $type == 'none') {
            return $utf8_string;
        }

        $type = strtoupper($type);
        $normalizer = self::$normalizer;
        if (is_null($normalizer)) {
            include_once dirname(__FILE__) . '/I18N/UnicodeNormalizer.php';
            if (class_exists('I18N_UnicodeNormalizer', true)) {
                self::$normalizer = $normalizer = new I18N_UnicodeNormalizer();
            }
        }
        if ($normalizer) {
            $utf8_string = $normalizer->normalize($utf8_string, $type);
        }
        return $utf8_string;
    }

    public static function normalize_ja($utf8_string, $conv = 'KVas')
    {
        if (empty($conv)) {
            return $utf8_string;
        }
        $utf8_string = mb_convert_kana($utf8_string, $conv);
        return $utf8_string;
    }

    public static function normalize($utf8_string, $widgetObject)
    {
        $s = self::normalize_utf8($utf8_string, $widgetObject->normalize);

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
            $s = self::normalize_ja($s, $conv);
        }
        return $s;
    }
}
