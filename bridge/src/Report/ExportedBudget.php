<?php

namespace Thiago\StructuralPattern\Report;

use Thiago\StructuralPattern\Budget;

class ExportedBudget implements ExportedContent
{
    private Budget $orcamento;

    public function __construct(Budget $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->value,
            'quantidade_itens' => $this->orcamento->itemsQuantity
        ];
    }
}
