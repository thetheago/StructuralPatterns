<?php

namespace Thiago\StructuralPattern\Report;

use Thiago\StructuralPattern\Order;

class ExportedOrder implements ExportedContent
{
    private Order $pedido;

    public function __construct(Order $pedido)
    {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->finalDate->format('d/m/Y'),
            'nome_cliente' => $this->pedido->clientName
        ];
    }
}
