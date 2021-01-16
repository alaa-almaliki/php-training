<?php

declare(strict_types=1);

namespace PHPTraining;

use Throwable;

class Assert
{
    /**
     * @param bool $value
     * @param Throwable $throwable
     * @throws Throwable
     */
    public static function assertTrue(bool $value, Throwable $throwable): void
    {
        if ($value === false) {
            throw $throwable;
        }
    }

    /**
     * @param bool $value
     * @param Throwable $throwable
     * @throws Throwable
     */
    public static function assertNotTrue(bool $value, Throwable $throwable): void
    {
        static::assertTrue(!$value, $throwable);
    }

    public static function assertInstanceOf($object, string $class, Throwable $throwable): void
    {
        static::assertTrue(is_object($object), new \Exception('Argument 1 must be object.'));
        static::assertTrue(is_object($object) && get_class($object) === $class, $throwable);
    }
}