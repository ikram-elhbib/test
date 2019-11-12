<?php 
include 'dbconnexion.php';
  //$Id=$_POST['Id'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $rep= $bdd->prepare
  (
    'INSERT INTO students (firstname,lastname,email,phone) 
  VALUES(:param_firstname , :param_lastname , :param_email ,  :param_phone)'
  );
  $rep->bindParam(':param_firstname', $firstname);
  $rep->bindParam(':param_lastname', $lastname);
  $rep->bindParam(':param_email', $email);
  $rep->bindParam(':param_phone', $phone);
  $rep->execute();



  echo "La personne a bien été ajoutée ! " ; 
  header ('Location:index.php');

?>