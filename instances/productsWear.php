<?php 
require_once __DIR__ . '/../classes/subProducts/Wear.php';
$wear_products = [];

$product_wear1 = new Wear('Shirt Armani', 289.90, 'top-wear');
$product_wear1->setScount($user1->getScount());

$product_wear2 = new Wear('T-Shirt Adidas', 29.90, 'top-wear');
$product_wear2->setScount($user1->getScount());

$product_wear3 = new Wear('Convers', 79.99, 'shoes');
$product_wear3->setScount($user1->getScount());

$product_wear4 = new Wear('Louboutin Classic', 500, 'shoes');
$product_wear4->setScount($user1->getScount());

$wear_products [] = $product_wear1;
$wear_products [] = $product_wear2;
$wear_products [] = $product_wear3;
$wear_products [] = $product_wear4;


$wear_products_premium = [];
$product_wear_prem1 = new Wear('Shirt Armani', 289.90, 'top-wear');
$product_wear_prem1->setScount($premium_user1->getScount());

$product_wear_prem2 = new Wear('T-Shirt Adidas', 29.90, 'top-wear');
$product_wear_prem2->setScount($premium_user1->getScount());

$product_wear_prem3 = new Wear('Convers', 79.99, 'shoes');
$product_wear_prem3->setScount($premium_user1->getScount());

$product_wear_prem4 = new Wear('Louboutin Classic', 500, 'shoes');
$product_wear_prem4->setScount($premium_user1->getScount());

$wear_products_premium [] = $product_wear_prem1;
$wear_products_premium [] = $product_wear_prem2;
$wear_products_premium [] = $product_wear_prem3;
$wear_products_premium [] = $product_wear_prem4;