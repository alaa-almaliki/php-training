<?php

declare(strict_types=1);

namespace PHPTraining;

use Exception;

class Helper
{
    /**
     * @var array
     */
    private static array $trueValues = [true, 1, 'true', '1'];

    /**
     * @var array
     */
    private static array $falseValues = [false, 0, 'false', '0'];

    /**
     * @param $value
     * @throws Exception
     */
    private static function assertBoolean($value): void
    {
        $boolValues = array_merge(static::$trueValues, static::$falseValues);
        if (!in_array($value, $boolValues, true)) {
            throw new Exception('Value provided is not boolean');
        }
    }

    public static function isTrue($value, bool $assert = false): bool
    {
        if (true === $assert) {
            static::assertBoolean($value);
        }

        return in_array($value, static::$trueValues, true);
    }

    public static function isFalse($value, bool $assert = false): bool
    {
        if (true === $assert) {
            static::assertBoolean($value);
        }

        return in_array($value, static::$falseValues, true);
    }
}