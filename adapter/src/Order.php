<?php

namespace Thiago\StructuralPattern;

use Thiago\StructuralPattern\Budget;

class Order
{
    public string $clientName;
    public \DateTimeInterface $finalDate;
    public Budget $budget;

}