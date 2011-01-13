<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

$GLOBALS['TL_DCA']['tl_form_field']['palettes']['lText'] = '{type_legend},type,name,label;{fconfig_legend},mandatory,rgxp,maxlength;{expert_legend:hide},value,class,accesskey;{submit_legend},addSubmit';


$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'email-noidn';
$GLOBALS['TL_DCA']['tl_form_field']['fields']['rgxp']['options'][] = 'url-noidn';

?>
