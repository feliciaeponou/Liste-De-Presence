<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Recherche</title>
    <link rel="icon" type="image/jpg" href="Logo Simplon.jpg">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  </head>
  <body>
    <?php
      include('connect2db.php');
      $search_input = $_POST['search_input'];

      if (isset($search_input)) {

        $search_input = htmlspecialchars($search_input);

        $search_input = mysqli_real_escape_string($conn,$search_input);

        $search_query = mysqli_query($conn,"SELECT * FROM simplonien WHERE (`nom` LIKE '%".$search_input."%') OR (`prenom` LIKE '%".$search_input."%') OR (`numTel` LIKE '%".$search_input."%')") or die(mysql_error());

        if(mysqli_num_rows($search_query) > 0){


            echo "<center>";
            echo "<br>";
            echo "<h3 text-align=\"center\">Resultats de la recherche</h3>";
              echo "<table border=\"2\" cellspacing=\"0\" cellspadding=\"0\" text-align=\"center\"><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Numéro De Téléphone</th><th>Sexe</th></tr>";
              // output data of each row
              while($row = mysqli_fetch_array($search_query)){
                  echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["email"]."</td><td>".$row["numTel"]."</td><td>".$row["sexe"]."</td></tr>";
              }
              echo "</table>";
              echo "</center>";
          }

        }
        else {
          echo "No results found";
        }


?>
  </body>
</html>
