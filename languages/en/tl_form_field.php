<?php

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion']   = array('Conversion of input text', 'Perform conversion of input text; Unicode Normalization and/or full-widh/half-width conversion for Japanese.');
$GLOBALS['TL_LANG']['tl_form_field']['normalize']    = array('Unicode Normalization', 'Perform Unicode Normalization of submitted text according to setting.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alpha']    = array('Conversion of alphabetic characters', 'Convert alphabetic characters into full-width or half-width characters.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_digit']    = array('Conversion of numeric chracters', 'Convert numeric characters into full-width or half-width characters.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_alnum']    = array('Conversion of alphanumeric characters', 'Conversion of alphanumeric characters including symbols into full-width or half-width characters.  When converting to full-width characters, these characters are not be converted: &quot;  &#39; &#92; &#126;.');
$GLOBALS['TL_LANG']['tl_form_field']['convert_space']    = array('Conversion of space characters', 'Convert space characters into full-width or half-width space characters.');
$GLOBALS['TL_LANG']['tl_form_field']['hKatakana']    = array('Conversion of half-width Katakana', 'Convert half-width Katakana into full-width Hiragana or Katakana.');
$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'] = array('Compose (semi-)voiced sound marks', 'When converting half-width Katakana into full-widh Katakana or Hiragana, Compose voiced sound mark and semi-voiced sound mark with previous character if possible.');
$GLOBALS['TL_LANG']['tl_form_field']['fKatakana']    = array('Conversion of full-width Katakana', 'Convert full-width Katakana into full-width Hiragana or half-width Katakana.');
$GLOBALS['TL_LANG']['tl_form_field']['fHiragana']    = array('Concversion of full-width Hiragana', 'Convert full-width Hiragana into full-width Katakana or half-width Katakana.');
 
/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_form_field']['conversion_legend'] = 'Conversion of text';

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
