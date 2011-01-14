<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Form fields
 */
$GLOBALS['TL_LANG']['FFL']['lText'] = array('Small extended text field', 'A text field with small extension.');

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['lText'] = array('Small extended text field', 'A text field with small extension.');

$GLOBALS['TL_LANG']['tl_form_field']['normalize']    = array('Unicode Normalization', 'Perform Unicode Normalization of submitted text.');
$GLOBALS['TL_LANG']['tl_form_field']['alpha']    = array('Conversion of alphabetic characters', 'Convert alphabetic characters into full-width or half-width characters.');
$GLOBALS['TL_LANG']['tl_form_field']['digit']    = array('Conversion of numeric chracters', 'Convert numeric characters into full-width or half-width characters');
$GLOBALS['TL_LANG']['tl_form_field']['alnum']    = array('Conversion of alphanumeric characters', 'Conversion of alphanumeric characters including symbols into full-width or half-width characters.  When converting to full-width characters, these characters are not be converted: &quot;  &#39; &#92; &#126;');
$GLOBALS['TL_LANG']['tl_form_field']['space']    = array('Conversion of space', 'Convert space characters into full-width or half-width space.');
$GLOBALS['TL_LANG']['tl_form_field']['hKatakana']    = array('Conversion of half-width Katakana', 'Convert half-width Katakana into full-width Hiragana or Katakana.');
$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'] = array('Compose (semi-)voiced sound mark of half-width Katakana', 'When converting half-width Katakana into full-widh Katakana or Hiragana, Compose voiced sound mark and semi-voiced sound mark with previous character if possible.');
$GLOBALS['TL_LANG']['tl_form_field']['fKatakana']    = array('Conversion of full-width Katakana', 'Convert full-width Katakana into full-width Hiragana or half-width Katakana.');
$GLOBALS['TL_LANG']['tl_form_field']['fHiragana']    = array('Concversion of full-width Hiragana', 'Convert full-width Hiragana into full-width Katakana or half-width Katakana.');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['ltext_legend'] = 'Conversion of text';

/**
 * References
 */
$GLOBALS['TL_LANG']['tl_form_field']['none'] = array('None', 'No Unicode Normalization will not be performed.');
$GLOBALS['TL_LANG']['tl_form_field']['NFD']  = array('Perform NFD', 'Perform NFD(Normalization Form Decomposite); Canonical Decomposition.');
$GLOBALS['TL_LANG']['tl_form_field']['NFC']  = array('Perform NFC', 'Perform NFC(Normalization Form Composite); Canonical Decomposition, followed by Canonical Composition.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKC'] = array('Perform NFKC', 'Perform NFKC(Normalization Form Compatible Composite); Compatibility Decomposition, followed by Canonical Composition.');
$GLOBALS['TL_LANG']['tl_form_field']['NFKD'] = array('Perform NFKD', 'Perform NFKD(Normalization Form Compatible Decomposite); Compatibility Decomposition.');
$GLOBALS['TL_LANG']['tl_form_field']['toFullwidth'] = 'Convert to full-width characters';
$GLOBALS['TL_LANG']['tl_form_field']['toHalfwidth'] = 'Convert to half-width characters';
$GLOBALS['TL_LANG']['tl_form_field']['toFKatakana'] = 'Convert to full-width Katakana';
$GLOBALS['TL_LANG']['tl_form_field']['toFHiragana'] = 'Convert to full-width Hiragana';
$GLOBALS['TL_LANG']['tl_form_field']['toHKatakana'] = 'Convert to half-width Katakana';
$GLOBALS['TL_LANG']['tl_form_field']['email-noidn'] = 
    array('E-mail address without IDN', 
          'Checks whether the input is a valid e-mail address without IDN (Internationalizing Domain Names).');
$GLOBALS['TL_LANG']['tl_form_field']['url-noidn'] = 
    array('URL format without IDN',
          'Checks whether the input is a valid URL without IDN (Internationalizing Domain Names).');

?>
