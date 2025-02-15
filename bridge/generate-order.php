<?php

require_once "vendor/autoload.php";

$budgetValue = $argv[1];
$itemsQuantity = $argv[1];
$clientName  = $argv[1];

$generateOrder = new \Thiago\StructuralPattern\Commands\GenerateOrder($budgetValue, $itemsQuantity, $clientName);
$generateOrderHandler = new \Thiago\StructuralPattern\Commands\GenerateOrderHandler();
$generateOrderHandler->execute($generateOrder);
