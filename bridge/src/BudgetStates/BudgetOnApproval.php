<?php

namespace Thiago\StructuralPattern\BudgetStates;

use Thiago\StructuralPattern\Budget;

class BudgetOnApproval extends BudgetState
{
    public function calculateExtraValue(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function aprove(Budget $budget): void
    {
        $budget->atualState = new BudgetAproved();
    }

    public function reprove(Budget $budget): void
    {
        $budget->atualState = new BudgetReproved();
    }
}