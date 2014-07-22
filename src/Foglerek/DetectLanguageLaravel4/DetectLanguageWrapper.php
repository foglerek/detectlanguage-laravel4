<?php namespace Foglerek\DetectLanguageLaravel4;

use DetectLanguage\DetectLanguage;

/**
 * Non-static wrapper for the DetectLanguage static library.
 */
class DetectLanguageWrapper
{
	public function __call($name, $arguments)
	{
		return call_user_func_array(['DetectLanguage', $name], $arguments);
	}
}
