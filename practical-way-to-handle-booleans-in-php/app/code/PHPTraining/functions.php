<?php

declare(strict_types=1);

if (!defined('PHP_TRAINING_FUNCTIONS')) {
    define('PHP_TRAINING_FUNCTIONS', 1);

    /**
     * @param $value
     * @param bool $assert
     * @return bool
     */
    function is_true($value, bool $assert = false): bool
    {
        return \PHPTraining\Helper::isTrue($value, $assert);
    }

    /**
     * @param $value
     * @param bool $assert
     * @return bool
     */
    function is_false($value, bool $assert = false): bool
    {
        return \PHPTraining\Helper::isFalse($value, $assert);
    }
}