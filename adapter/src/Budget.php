<?php

namespace Thiago\StructuralPattern;

use Thiago\StructuralPattern\BudgetStates\BudgetOnApproval;
use Thiago\StructuralPattern\BudgetStates\BudgetState;

class Budget
{
    public int $itemsQuantity;

    public float $value;

    public BudgetState $atualState;

    public function __construct()
    {
        $this->atualState = new BudgetOnApproval();
    }

    public function applyExtraDiscount()
    {
        $this->value -= $this->atualState->calculateExtraValue($this);
    }

    public function aprove()
    {
        $this->atualState->aprove($this);
    }

    public function reprove()
    {
        $this->atualState->reprove($this);
    }

    public function finish()
    {
        $this->atualState->finish($this);
    }
}