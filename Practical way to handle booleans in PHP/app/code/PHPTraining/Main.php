<?php

declare(strict_types=1);

namespace PHPTraining;

class Main
{
    public function getTitle(): string
    {
        return 'PHP Training';
    }

    public function __toString()
    {
        return $this->getTitle();
    }
}