<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['lText'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,rgxp,maxlength;{ltext_legend:hide},normalize,alpha,digit,alnum,space,hKatakana,hDakuten,fKatakana,fHiragana;{expert_legend:hide},value,class,accesskey;{submit_legend},addSubmit';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['normalize'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['normalize'],
	'inputType' => 'select',
    'options'   => array('none', 'NFD', 'NFC', 'NFKC', 'NFKD'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('helpwizard' => 'true', 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['alpha'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['alpha'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50 clr')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['digit'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['digit'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['alnum'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['alnum'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['space'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['space'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['hKatakana'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['hKatakana'],
	'inputType' => 'select',
    'options'   => array('none', 'toFKatakana', 'toFHiragana'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['hDakuten'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['hDakuten'],
	'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50 m12')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['fKatakana'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['fKatakana'],
	'inputType' => 'select',
    'options'   => array('none', 'toFHiragana', 'toHKatakana'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['fHiragana'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['fHiragana'],
	'inputType' => 'select',
    'options'   => array('none', 'toFKatakana', 'toHKatakana'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);


$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'email-noidn';
$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'url-noidn';

?>
