<?php

require __DIR__.'/vendor/autoload.php';

use \mamadzirone\Strutils\Str;

var_dump(Str::contains('abcd', ['ab', 'x']));