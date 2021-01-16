<?php

declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

$main = new \PHPTraining\Main();

$stdClass = new stdClass();


Webmozart\Assert\Assert::isArray([]);

Webmozart\Assert\Assert::isInstanceOf($stdClass, stdClass::class);