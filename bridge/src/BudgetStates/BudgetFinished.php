<?php

namespace Thiago\StructuralPattern\BudgetStates;

use DomainException;
use Thiago\StructuralPattern\Budget;

class BudgetFinished extends BudgetState
{
    /**
     * @throws DomainException;
     */
    public function calculateExtraValue(Budget $budget): float
    {
        throw new DomainException('Um orçamento finalizado não pode calcular valor extra');
    }
}