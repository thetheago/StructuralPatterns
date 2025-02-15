<?php

require 'vendor/autoload.php';

use Thiago\StructuralPattern\{Budget, Order};
use Thiago\StructuralPattern\Report\{ExportedBudget, ExportedOrder};
use Thiago\StructuralPattern\Report\{XMLExporter, ZipExporter};

$order = new Order();
$order->clientName = 'Thiago Henrique';
$order->finalDate = new DateTimeImmutable();

$exportedOrder = new ExportedOrder($order);
$XMLExporter = new XMLExporter('pedido.array');

echo $XMLExporter->salvar($exportedOrder);

//$zipExporter = new ZipExporter('pedido.array');
//echo $zipExporter->salvar($exportedOrder);
