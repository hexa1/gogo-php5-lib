# A bootstrap of a PHP5 library packaged as a Phar

A starting point for a PHP5 object-oriented library (with namespacing) which is to be distributed via a .phar file.

**Includes**:

- .editorconfig
- .gitignore
- phing
- phing: isolated project properties
- CHANGES, LICENSE
- composer
- sample library loaded via composer (underscore.php)
- phing task for generating Phar file
- 2 test files: the api in `classes` dir, and api in the phar file
- distributable phar example
- phar stub file (which loads composer vendor libs)

## Getting Started

- make sure you have phing and composer installed
- `$ composer install`
- `$ phing dist`
- `$ php ./lib-test`
- `$ php ./test-phar`

## Notes

On OS X with MAMP, the phing path may be something like this: `/Applications/MAMP/bin/php/php5.4.4/bin/phing`

Some helpful resources:

- http://php.net/manual/en/language.namespaces.basics.php
- http://blog.nickbelhomme.com/php/php-5-3-3-namespaces_251
- http://anahkiasen.github.io/underscore-php/
