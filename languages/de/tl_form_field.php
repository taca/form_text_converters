<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Form fields
 */
$GLOBALS['TL_LANG']['FFL']['lText'] = array('Small extended text field', 'A text field with small extension.');

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['lText'] = array('Small extended text field', 'A text field with small extension.');
$GLOBALS['TL_LANG']['tl_form_field']['conversion']   = array('Umwandlung der Eingabe von Text', 'Führen Umwandlung von Text einzugeben; Unicode-Normalisierung und / oder full-widh/half-width Konvertierung für Japanisch.');
$GLOBALS['TL_LANG']['tl_form_field']['normalize']    = array('Unicode Normalisierung', 'Kein Unicode Normalisierung wird nicht durchgeführt werden.');
$GLOBALS['TL_LANG']['tl_form_field']['NFD']  = array('Führen NFD', 'Führene NFD(Normalization Form Decomposite); kanonische Zerlegung.');
$GLOBALS['TL_LANG']['tl_form_field']['NFC']  = array('Führen NFC', 'Führen NFC (Normalization Form Composite); kanonische Zerlegung von Canonical Zusammensetzung gefolgt.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKC'] = array('Führen NFKC', 'Führen NFKC(Normalization Form Compatible Composite); Compatibility Decomposition, followed by Canonical Composition.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKD'] = array('Führen NFKD', 'Führen NFKD (Normalisierung kompatiblen Form Decomposite); Kompatibilität Zersetzung.');
$GLOBALS['TL_LANG']['tl_form_field']['hKatakana']    = array('Umstellung der Halbwertsbreite Katakana', 'Rechnen Sie mit halber Breite Katakana in voller Breite Hiragana Katakana oder.');
$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'] = array('Compose (semi-)stimmhaft Tonmarke', 'Beim Konvertieren Halbwertsbreite Katakana in voller widh Katakana oder Hiragana äußerte Compose Hörmarke und semi-stimmhaft Hörmarke mit früheren Charakter, wenn möglich.');
$GLOBALS['TL_LANG']['tl_form_field']['fKatakana']    = array('Umwandlung der vollen Breite Katakana', 'Rechnen Sie mit voller Breite Katakana in voller Breite Hiragana oder halber Breite Katakana');
$GLOBALS['TL_LANG']['tl_form_field']['fHiragana']    = array('Concversion der vollen Breite Hiragana', 'Rechnen Sie mit voller Breite Hiragana in voller Breite Katakana oder halber Breite Katakana.');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['ltext_legend'] = 'Umwandlung von Text';

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
