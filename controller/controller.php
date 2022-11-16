<?php 
session_start();

if (isset($_SESSION['connected'])) {
	
}else {
	header("Location: ./login.php");
	exit();
}