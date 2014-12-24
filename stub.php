<?php

$phar = __FILE__;
Phar::mapPhar($phar);
$loader = require "phar://${phar}/vendor/autoload.php";
$loader->add('app\\', "phar://${phar}");
__HALT_COMPILER();
