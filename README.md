detectlanguage-laravel4
=======================

Laravel 4 wrapper of the detectlanguage php library for http://detectlanguage.com

- **Author:** Alexander Wesolowski
- **Version:** 1.0.0

## Installation

To install the API add this to your composer.json:

```json
"require": {
        "detectlanguage/detectlanguage": "dev-master",
        "foglerek/detectlanguage-laravel4": "dev-master"
}
```

..then run `composer update`. (If you have problems getting that to work, try running `php artisan dump-autoload` followed by `composer update` again).  

Register the service provider in `app/config/app.php` in the `providers` array:

```php
'providers' => array(
    //...
    'Foglerek\DetectLanguageLaravel4\DetectLanguageServiceProvider',
)
```

Then create the config file `app/config/detectlanguage.php` based on the config file in the package.
```php
<?php
    return array(
        /**
         * DetectLanguage API Key
         */
        'api_key' => ''
    );

```

## Documentation

Now, you can access the DetectLanguage API by calling the `DetectLanguage::` facade.
For more information on the available commands, see https://github.com/detectlanguage/detectlanguage-php
