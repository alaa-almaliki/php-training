<?php

declare(strict_types=1);

define('BASE_DIR', __DIR__);

require_once __DIR__ . '/bootstrap.php';


var_dump(is_true(true));
var_dump(is_true(1));
var_dump(is_true('true'));
var_dump(is_true('1'));
var_dump(is_true('Y'));

var_dump(is_false(false));
var_dump(is_false(0));
var_dump(is_false('false'));
var_dump(is_false('0'));
var_dump(is_false('N', true));