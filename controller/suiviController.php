<?php 
session_start();

/*requires file*/
require 'controller/database.php';

/*liste suivi d'achat de bien immeuble*/
$request_list_suivi_achat = "SELECT * FROM suivi_achat_bien ORDER BY id DESC";
$query_list_suivi_achat = mysqli_query($immo, $request_list_suivi_achat);

/*liste vente de bien immeuble*/
$request_list_vente = "SELECT * FROM vente_bien ORDER BY id DESC";
$query_list_vente = mysqli_query($immo, $request_list_vente);
