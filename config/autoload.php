<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package Form_text_converters
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'FormTextAreaConvert'  => 'system/modules/form_text_converters/FormTextAreaConvert.php',
	'FormTextFieldConvert' => 'system/modules/form_text_converters/FormTextFieldConvert.php',
	'MiscTextConverters'   => 'system/modules/form_text_converters/MiscTextConverters.php',
));
