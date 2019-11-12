<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
<div class="container py-3">
<div class="jumbotron">
<h2 class="text-center">Liste des étudiants  DSI22 Iset Bizerte 2019</h2>
<table class="table table-hover">
<thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        </thead>
        <tbody>

        <?php 
        include 'dbconnexion.php';
        
 
        $rep=$bdd->prepare("SELECT * FROM students");
        $rep->execute();
        while ($don=$rep->fetch())
        {
            echo "<tr>";
            echo "<td>". $don['Id']. "</td>";
            echo "<td>". $don['firstname']. " </td>";
            echo "<td>" . $don['lastname']. " </td>" ;
            echo "<td>". $don['email']. "</td>";
            echo "<td>" . $don['phone']. "</td>";
            echo "</tr>";
            echo '<td>
            <a href="edit.php?id='.$don['Id'].'" class="btn btn-info" role="button">editer</a>
            <a href="delete.php?id='.$don['Id'].'" class="btn btn-info" role="button">supprimer</a>
            </td>';
            echo'</tr>';
        }
        ?>
        <button class="btn-btn-primary"><a href="create.php" class="btn-btn-primary" role="button">nouveau Etudiant</a><button>
        </tbody>


</table>
</div>
    
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>