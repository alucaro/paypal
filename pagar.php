<?php

if(!isset($_POST['producto'], $_POST['precio'])){
    exit("Hubo un error");
}

use PayPal\Api\Payer;
use PayPal\Api\item;

require 'config.php';


$producto = htmlspecialchars($_POST['producto']);
$precio   = htmlspecialchars($_POST['precio']);
$precio   = (int) $precio;//Float si deseo fracciones
$envio    = 0;
$total    = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new Item();
