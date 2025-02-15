<?php

namespace Thiago\StructuralPattern\BudgetStates;

use DomainException;
use Thiago\StructuralPattern\Budget;

class BudgetReproved extends BudgetState
{
    /**
     * @throws DomainException;
     */
    public function calculateExtraValue(Budget $budget): float
    {
        throw new DomainException('Um orçamento reprovado não pode calcular valor extra');
    }

    public function finish(Budget $budget): void
    {
        $budget->atualState = new BudgetFinished();
    }
}
