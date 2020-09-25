<?php

use App\Charge;
use App\Account;
use App\Customer;

require __DIR__.'/../vendor/autoload.php';


// Paso 1, necesito un cliente
$cliente = new Customer('Hector');

// Paso 2, necesitamos algo que cobrarle:

$charge1 = new Charge('iPad Pro 64 Gb', 24000, 1);
$charge2 = new Charge('SSD 500 Gb', 3500, 5);
$charge3 = new Charge('Magic Mouse', 1200, 15);

// paso 3. Necesitamos agregar los cargos a la cuenta de cobranza

$account = new Account();

$account->setClient( $cliente);

$account->addCharge( $charge1);
$account->addCharge( $charge2);
$account->addCharge( $charge3);


echo "Resumen de la cuenta del cliente {$account->client()->name}.";
echo "\n";
echo "Hay {$account->chargesCount()} conceptos de cobranza.";
echo "\n";

echo "la cuenta es por un total de $ {$account->totalCharges()}";

echo "\n";

