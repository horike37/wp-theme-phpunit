[![Build Status](https://travis-ci.org/horike37/wp-theme-phpunit.svg?branch=master)](https://travis-ci.org/horike37/wp-theme-phpunit)
# wp-theme-phpunit
Unit Testing WordPress Theme using PHPUnit

Edit your-theme in `tests/bootstrap.php`
```php:
function _manually_load_plugin() {
	register_theme_directory( dirname( __FILE__ ) . '/../../' );
	switch_theme('your-theme');
}
```
