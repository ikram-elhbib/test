<?php 
include 'dbconnexion.php';
$firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $Id=$_POST['Id'];

  $rep=$bdd->prepare('UPDATE students SET  firstname=:firstname, lastname=:lastname , email= :email , phone= :phone WHERE id=:id');
  $rep->bindParam(':firstname', $firstname);
  $rep->bindParam(':lastname', $lastname);
  $rep->bindParam(':email', $email);
  $rep->bindParam(':phone', $phone);
  $rep->bindParam(':id' , $Id );
  $rep->execute();
  header ('Location:index.php');

?>