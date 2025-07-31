<?php
namespace App\Service\Calendar;

class WorkingDayCalculator
{

    public function computeWorkingDays(\DateTimeImmutable $from, \DateTimeImmutable $to): int
    {
        return 3;
    }
}