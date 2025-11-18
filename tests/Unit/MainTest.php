<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Main;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;
use PHPUnit\Framework\Attributes\Small;
use PHPUnit\Framework\Attributes\Test;

/**
 * @internal
 */
#[CoversClass(Main::class)]
#[Small]
final class MainTest extends TestCase
{
    #[DoesNotPerformAssertions]
    #[Test]
    public function testMain(): void
    {
        Main::main();
    }
}
