<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Palettes
 */
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['lText'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,rgxp,maxlength;{ltext_legend:hide},conversion;{expert_legend:hide},value,class,accesskey;{submit_legend},addSubmit';

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['__selector__'][] = 'conversion';
$GLOBALS['TL_DCA']['tl_form_field']['subpalettes']['conversion'] = 'normalize,alpha,digit,alnum,space,hKatakana,hDakuten,fKatakana,fHiragana';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_form_field']['fields']['conversion'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['conversion'],
	'inputType' => 'checkbox',
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('submitOnChange'=>true, 'tl_class' => 'w50 m12')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['normalize'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['normalize'],
	'inputType' => 'select',
    'options'   => array('none', 'NFD', 'NFC', 'NFKC', 'NFKD'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('helpwizard' => 'true', 'tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['convert_alpha'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['convert_alpha'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50 clr')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['convert_digit'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['convert_digit'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['convert_alnum'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['convert_alnum'],
	'inputType' => 'select',
    'options'   => array('none', 'toHalfwidth', 'toFullwidth'),
    'reference' => &$GLOBALS['TL_LANG']['tl_form_field'],
    'eval'      => array('tl_class' => 'w50')
);

$GLOBALS['TL_DCA']['tl_form_field']['fields']['convert_space'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_form_field']['convert_space'],
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
    'eval'      => array('tl_class' => 'w50 m12'),
    'save_callback' => array
    (
        array('tl_lform_field', 'validateForm')
    ),
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

class tl_lform_field extends tl_form_field
{
    public function validateForm($varInput, $dc)
    {
        if (!empty($varInput)) {
            $l = $dc->Input->post('hKatakana');
            if (empty($l) || $l == 'none') {
                $varInput = '';
            }
        }
        return $varInput;
    }
}

?>
