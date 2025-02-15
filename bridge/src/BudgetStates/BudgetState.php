<?php

namespace Thiago\StructuralPattern\BudgetStates;

use DomainException;
use Thiago\StructuralPattern\Budget;

abstract class BudgetState
{
    /**
     * @throws DomainException;
     */
    abstract public function calculateExtraValue(Budget $budget): float;

    /**
     * @throws DomainException;
     */
    public function aprove(Budget $budget): void
    {
        throw new DomainException('Este orçamento não pode ser aprovado!');
    }

    /**
     * @throws DomainException;
     */
    public function reprove(Budget $budget): void
    {
        throw new DomainException('Este orçamento não pode ser reprovado!');
    }

    /**
     * @throws DomainException;
     */
    public function finish(Budget $budget): void
    {
        throw new DomainException('Este orçamento não pode ser finalizado!');
    }
}