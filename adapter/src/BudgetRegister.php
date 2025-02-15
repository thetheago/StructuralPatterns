<?php

namespace Thiago\StructuralPattern;

use Thiago\StructuralPattern\BudgetStates\BudgetFinished;
use Thiago\StructuralPattern\Http\HttpAdapter;

class BudgetRegister
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function register(Budget $budget): void
    {
        if (!$budget->atualState instanceof BudgetFinished) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API.');
        }

        $this->http->post('http://api.register.budget', [
            'value' => $budget->value,
            'itemsQuantity' => $budget->itemsQuantity
        ]);
    }
}