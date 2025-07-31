<?php
namespace App\tests\Service\Calendar;

use App\Service\Calendar\WorkingDayCalculator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(WorkingDayCalculator::class)]
class WorkingDayCalculatorTest extends TestCase
{
    public function testComputeWorkingDays(): void
    {
        $calculator = new WorkingDayCalculator();

        $count = $calculator->computeWorkingDays(new \DateTimeImmutable('2025-07-28'), new \DateTimeImmutable('2025-08-01'));
        $this->assertEquals(5, $count);
    }
}
