<?php

if(!isset($_POST['producto'], $_POST['precio'])){
    exit("Hubo un error");
}

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;

require 'config.php';


$producto = htmlspecialchars($_POST['producto']);
$precio   = htmlspecialchars($_POST['precio']);
$precio   = (int) $precio;//Float si deseo fracciones
$envio    = 0;
$total    = $precio + $envio;

$compra = new Payer();
$compra->setPaymentMethod('paypal');

$articulo = new Item();

$articulo->setName($producto)
         ->setCurrency('MXN')
         ->setQuantity(1)
         ->setPrice($precio);

$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));

$detalles = new Details();
$detalles->setShipping($envio)
         ->setSubtotal($precio);

$cantidad = new Amount();
$cantidad->setCurrency('MXN')
          ->setTotal($precio)
          ->setDetails($detalles);