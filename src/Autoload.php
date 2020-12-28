<?php

declare(strict_types=1);

namespace Tshafer\PestInteria;

use Pest\Plugin;
use PHPUnit\Framework\TestCase;

Plugin::uses(PestInteria::class);

/**
 * @return TestCase
 */
function example(string $argument)
{
    return test()->example(...func_get_args());
}
