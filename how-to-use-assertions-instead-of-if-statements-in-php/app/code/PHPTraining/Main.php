<?php

declare(strict_types=1);

namespace PHPTraining;

/**
 * Class Main
 *
 * @package PHPTraining
 */
class Main
{

    public function getTitle(): string
    {
        return 'PHP Recipes';
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return 'working';
    }
}