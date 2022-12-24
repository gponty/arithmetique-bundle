<?php

namespace Gponty\Bundle\Service;

class ArithmetiqueService
{
    public function addition(int $a, int $b): string
    {
        return $a+$b;
    }

    public function multiplication(int $a, int $b): string
    {
        return $a*$b;
    }

}