<?php 
include 'dbconnexion.php';
$del=$bdd->exec("DELETE FROM students WHERE :id=Id");
$rep->bindParam(':id', $_GET['Id']);
$rep->execute();
header ('Location:index.php');

?>