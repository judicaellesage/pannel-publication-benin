<?php 
session_start();

/*requires files*/
require 'controller/database.php';

$request_list_achat_bien = "SELECT * FROM achat_bien_immeuble ORDER BY id DESC";
$query_list_achat_bien = mysqli_query($immo, $request_list_achat_bien);

/*list des bon de commande*/
$request_list_bon_commande = "SELECT * FROM bon_commande ORDER BY id DESC";
$query_list_bon_commande = mysqli_query($immo, $request_list_bon_commande);