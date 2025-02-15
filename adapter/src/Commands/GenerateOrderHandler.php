<?php

namespace Thiago\StructuralPattern\Commands;

use DateTimeImmutable;
use Thiago\StructuralPattern\Budget;
use Thiago\StructuralPattern\Order;

class GenerateOrderHandler
{
    public function __construct(/* OrderRepository, MailService */)
    {
    }

    public function execute(GenerateOrder $generateOrder)
    {
        $budget = new Budget();
        $budget->itemsQuantity = $generateOrder->getItemsQuantity();
        $budget->value = $generateOrder->getBudgetValue();

        $order = new Order();
        $order->finalDate = new DateTimeImmutable();
        $order->clientName = $generateOrder->getClientName();
        $order->budget = $budget;

        echo "Cria pedido no banco de dados ". PHP_EOL;
        echo "Envia e-mail para o client ". PHP_EOL;
    }
}