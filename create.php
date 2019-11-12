<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Formulaire</title>
</head>
<body>
<h2 class="text-center">nouveau etudiant</h2>
<div class="container py-3">
<fieldset>
  <legend>etudiant</legend>
<form action="store.php" method="post">
     <div class="row">
       <div class="col-md-6">
          <div class="form-group">
              <label for="firstname">First Name :</label>
                <input type="text" name="firstname" class="form-control" id="fn">
            </div>
            </div> 
            <div class="col-md-6">
          <div class="form-group">
<label for="lastname">Last Name :</label>
<input type="text" name="lastname" class="form-control" id="ln">
            </div>
            </div>
</div>
<div class="row">
    <div class="col-md-6">
    <div class="form-group">

<label for="email">Email :</label>
<input type="text" name="email" class="form-control" id="em">
       </div>
       </div>
       <div class="form-group">
       <div class="col-md-6">

<label for="phone">Phone :</label>
<input type="number" name="phone" class="form-control" id="ph">
         </div>
        </div>
</div>
<div class="row">
    <div class="col-md-6">
<button type="submit" class="btn btn-outline-enregistrer">Enregistrer</button>
<button type="reset" class="btn btn-default">Annulerr</button>

</div>
</div>
</div>
</form>
</fieldset>
</div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</html>