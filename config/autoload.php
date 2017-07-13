<?php

/**
 * Copyright (c) 2011-2017 Takahiro Kambe
 *
 * @license    two-clause-bsd
 *
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
