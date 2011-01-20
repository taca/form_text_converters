<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Form fields
 */
$GLOBALS['TL_LANG']['FFL']['lText'] = array('Textfeld mit Code-Konvertierung', 'Ein einzeiliges Eingabefeld f���r einen kurzen oder mittellangen Text.');
$GLOBALS['TL_LANG']['FFL']['lTextArea'] = array('Textarea mit Code-Konvertierung', 'Ein mehrzeiliges Eingabefeld mit Code-Konvertierung f���r einen mittellangen oder langen Text.
A text field with small extension.');

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion']   = array('Umwandlung der Eingabe von Text', 'F�Î�hren Umwandlung von Text einzugeben; Unicode-Normalisierung und / oder full-widh/half-width Konvertierung f�Î�r Japanisch.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alpha']    = array('Umstellung der alphabetische Zeichen', 'Umwandlung von alphabetische Zeichen in voller Breite oder Zeichen halber Breite.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_digit']    = array('Umstellung der numerischen Zeichen', 'Umwandlung von numerische Zeichen in voller Breite oder Zeichen halber Breite.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alnum']    = array('Umstellung der alphanumerische Zeichen', 'Umwandlung von alphanumerischen Zeichen einschlie����ich Symbole in voller Breite oder Zeichen halber Breite. Bei der Konvertierung in voller Breite Zeichen, werden diese Zeichen nicht konvertiert werden: &quot;  &#39; &#92; &#126;.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_space']    = array('Umrechnung von Raum-Zeichens', 'Umwandlung von Leerzeichen Zeichen in voller Breite oder halber Breite Leerzeichen Zeichen.');
$GLOBALS['TL_LANG']['tl_form_field']['hKatakana']    = array('Umstellung der Halbwertsbreite Katakana', 'Umwandlung von halber Breite Katakana in voller Breite Hiragana Katakana oder.');
$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'] = array('Compose (semi-)stimmhaft Tonmarke', 'Beim Konvertieren Halbwertsbreite Katakana in voller widh Katakana oder Hiragana �Î�u����rte Compose H�Î�rmarke und semi-stimmhaft H�Î�rmarke mit fr�Î�heren Charakter, wenn m�Î�glich.');
$GLOBALS['TL_LANG']['tl_form_field']['fKatakana']    = array('Umwandlung der vollen Breite Katakana', 'Umwandlung von voller Breite Katakana in voller Breite Hiragana oder halber Breite Katakana');
$GLOBALS['TL_LANG']['tl_form_field']['fHiragana']    = array('Concversion der vollen Breite Hiragana', 'Umwandlung von voller Breite Hiragana in voller Breite Katakana oder halber Breite Katakana.');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion_legend'] = 'Umwandlung von Text';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form_field']['none'] = array('Keine', 'Kein Unicode Normalisierung wird nicht durchgef�Î�hrt werden.');
$GLOBALS['TL_LANG']['tl_form_field']['NFD']  = array('F�Î�hren NFD', 'F�Î�hren NFD (Normalization Form Decomposite); kanonische Zerlegung.');
$GLOBALS['TL_LANG']['tl_form_field']['NFC']  = array('F�Î�hren NFC', 'F�Î�hren NFC (Normalization Form Composite); kanonische Zerlegung von Canonical Zusammensetzung gefolgt.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKC'] = array('F�Î�hren NFKC', 'F�Î�hren NFKC (Normalisierung kompatiblen Form Composite); Kompatibilit�Î�t Zersetzung von Canonical Zusammensetzung gefolgt.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKD'] = array('F�Î�hren NFKD', 'F�Î�hren NFKD (Normalisierung kompatiblen Form Decomposite); Kompatibilit�Î�t Zersetzung.');
$GLOBALS['TL_LANG']['tl_form_field']['toFullwidth'] = 'Convert to Zeichen voller Breite';
$GLOBALS['TL_LANG']['tl_form_field']['toHalfwidth'] = 'Convert to Zeichen halber Breite';
$GLOBALS['TL_LANG']['tl_form_field']['toFKatakana'] = 'Convert to Voller Breite Katakana';
$GLOBALS['TL_LANG']['tl_form_field']['toFHiragana'] = 'Convert to Voller Breite Hiragana';
$GLOBALS['TL_LANG']['tl_form_field']['toHKatakana'] = 'Convert to Halber Breite Katakana';
$GLOBALS['TL_LANG']['tl_form_field']['email-noidn'] = 
    array('E-mail address ohne IDN', 
          'Pr�Î�ft, ob die Eingabe einer g�Î�ltigen E-Mail-Adresse ohne IDN (Internationalisierung Domain Names) ist.');
$GLOBALS['TL_LANG']['tl_form_field']['url-noidn'] = 
    array('URL format ohnex IDN',
          'Pr�Î�ft, ob die Eingabe einer g�Î�ltigen URL ohne IDN (Internationalisierung Domain Names) ist.');


?>
