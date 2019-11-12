<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
   
</head>
<body>
    <?php 
    include 'dbconnexion.php';
    $rep=$bdd->prepare(
        'SELECT * FROM students WHERE id=:Id'
    );
    $rep->bindParam(':Id' , $_GET['id']);
    $rep->execute();
    $don=$rep->fetch();
    ?>
<div class="container">
<fieldset>
<legend>Editer Etudiant</legend>
<form action="update.php" method="post">
  <div class="form-group">
      <label for="firstname">First Name :</label>
      <input type="text" name="firstname" required value="<?= $don['firstname'] ?> "class="form-control" >

      <label for="lastname">Last Name :</label>
      <input type="text" name="lastname" required value="<?= $don['lastname'] ?> " class="form-control" >
  </div>

  <div class="form-group">
      <label for="email">Email :</label>
      <input type="text" name="email"  required value="<?= $don['email'] ?> "class="form-control" >

      <label for="phone">Phone :</label>
      <input type="number" name="phone" required value="<?= $don['phone'] ?> " class="form-control" >
  </div>

  <div class="form-group">
 <input name="id" type="number" hidden value="<?= $don['Id'] ?> ">
  <button type="submit" class="btn btn-outline-enregistrer">Enregistrer</button>
 
  <button type="reset" class="btn btn-default">Annuler</button>
  </div>
</div>
</fieldset>


</body>
</html>