<?php

declare(strict_types=1);

namespace Tshafer\PestInteria;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
trait PestInteria
{
    /**
     * Example description.
     */
    public function example(string $name): TestCase
    {
        $this->assertNotEmpty($name);

        return $this;
    }
}
