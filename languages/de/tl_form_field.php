<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion']   = array('Umwandlung der Eingabe von Text', 'Führen Umwandlung von Text einzugeben; Unicode-Normalisierung und / oder full-widh/half-width Konvertierung für Japanisch.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alpha']    = array('Umstellung der alphabetische Zeichen', 'Umwandlung von alphabetische Zeichen in voller Breite oder Zeichen halber Breite.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_digit']    = array('Umstellung der numerischen Zeichen', 'Umwandlung von numerische Zeichen in voller Breite oder Zeichen halber Breite.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alnum']    = array('Umstellung der alphanumerische Zeichen', 'Umwandlung von alphanumerischen Zeichen einschließlich Symbole in voller Breite oder Zeichen halber Breite. Bei der Konvertierung in voller Breite Zeichen, werden diese Zeichen nicht konvertiert werden: &quot;  &#39; &#92; &#126;.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_space']    = array('Umrechnung von Raum-Zeichens', 'Umwandlung von Leerzeichen Zeichen in voller Breite oder halber Breite Leerzeichen Zeichen.');
$GLOBALS['TL_LANG']['tl_form_field']['hKatakana']    = array('Umstellung der Halbwertsbreite Katakana', 'Umwandlung von halber Breite Katakana in voller Breite Hiragana Katakana oder.');
$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'] = array('Compose (semi-)stimmhaft Tonmarke', 'Beim Konvertieren Halbwertsbreite Katakana in voller widh Katakana oder Hiragana äußerte Compose Hörmarke und semi-stimmhaft Hörmarke mit früheren Charakter, wenn möglich.');
$GLOBALS['TL_LANG']['tl_form_field']['fKatakana']    = array('Umwandlung der vollen Breite Katakana', 'Umwandlung von voller Breite Katakana in voller Breite Hiragana oder halber Breite Katakana');
$GLOBALS['TL_LANG']['tl_form_field']['fHiragana']    = array('Concversion der vollen Breite Hiragana', 'Umwandlung von voller Breite Hiragana in voller Breite Katakana oder halber Breite Katakana.');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion_legend'] = 'Umwandlung von Text';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form_field']['none'] = array('Keine', 'Kein Unicode Normalisierung wird nicht durchgeführt werden.');
$GLOBALS['TL_LANG']['tl_form_field']['NFD']  = array('Führen NFD', 'Führen NFD (Normalization Form Decomposite); kanonische Zerlegung.');
$GLOBALS['TL_LANG']['tl_form_field']['NFC']  = array('Führen NFC', 'Führen NFC (Normalization Form Composite); kanonische Zerlegung von Canonical Zusammensetzung gefolgt.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKC'] = array('Führen NFKC', 'Führen NFKC (Normalisierung kompatiblen Form Composite); Kompatibilität Zersetzung von Canonical Zusammensetzung gefolgt.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKD'] = array('Führen NFKD', 'Führen NFKD (Normalisierung kompatiblen Form Decomposite); Kompatibilität Zersetzung.');
$GLOBALS['TL_LANG']['tl_form_field']['toFullwidth'] = 'Convert to Zeichen voller Breite';
$GLOBALS['TL_LANG']['tl_form_field']['toHalfwidth'] = 'Convert to Zeichen halber Breite';
$GLOBALS['TL_LANG']['tl_form_field']['toFKatakana'] = 'Convert to Voller Breite Katakana';
$GLOBALS['TL_LANG']['tl_form_field']['toFHiragana'] = 'Convert to Voller Breite Hiragana';
$GLOBALS['TL_LANG']['tl_form_field']['toHKatakana'] = 'Convert to Halber Breite Katakana';
$GLOBALS['TL_LANG']['tl_form_field']['email-noidn'] = 
    array('E-mail address ohne IDN', 
          'Prüft, ob die Eingabe einer gültigen E-Mail-Adresse ohne IDN (Internationalisierung Domain Names) ist.');
$GLOBALS['TL_LANG']['tl_form_field']['url-noidn'] = 
    array('URL format ohnex IDN',
          'Prüft, ob die Eingabe einer gültigen URL ohne IDN (Internationalisierung Domain Names) ist.');


?>
