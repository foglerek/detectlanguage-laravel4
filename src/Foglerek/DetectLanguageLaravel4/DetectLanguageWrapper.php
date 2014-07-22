<?php namespace Foglerek\DetectLanguageLaravel4;

/**
 * Non-static wrapper for the DetectLanguage static library.
 */
class DetectLanguageWrapper
{
	public function __call($name, $arguments)
	{
		return call_user_func_array(['DetectLanguage\DetectLanguage', $name], $arguments);
	}
}
