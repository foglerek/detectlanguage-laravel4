<?php namespace Foglerek\DetectLanguageLaravel4\Facades;

use Illuminate\Support\Facades\Facade;

class DetectLanguage extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'detectlanguage';
	}
}
