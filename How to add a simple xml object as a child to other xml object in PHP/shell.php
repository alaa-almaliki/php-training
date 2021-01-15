<?php

declare(strict_types=1);

define('BASE_DIR', __DIR__);

require_once __DIR__ . '/bootstrap.php';

$people = new \PHPTraining\SimpleXmlElement('<people />');

$people->addChild('city', 'Manchester');
$people->addChild('age_group', '40');

$person = new \SimpleXMLElement('<person />');
$person->addChild('name', 'Alaa Al-Maliki');
$person->addChild('job', 'Software Engineer');

$people->appendChildXML($person);

$people->saveXML('people.xml');