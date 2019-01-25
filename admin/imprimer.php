<?php
    include '../connect2db.php';

    // requete
    $query = "SELECT * FROM simplonien";
    // execution de la requete
    $resultat = mysqli_query($conn,$query);

?>

    <?php
    error_reporting(E_ALL);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "simplonciv";


    $sql1 ="SELECT * FROM simplonien";
    $result = $conn->query($sql1);

  if ($result->num_rows > 0) {
    //Afficher la liste de présence dans un tableau
    echo "<center>";
    echo "<br>";
    echo '
    <h1 align="center">LISTE DE PRESENCE SIMPLON COTE D\'IVOIRE DU ';

      date_default_timezone_set('Africa/Abidjan'); // CDT
      echo date("d/m/y");
      echo ' </h1>  ';
      echo "
      <div id=\"print\">
      <table  border=\"2\" cellspacing=\"0\" cellspadding=\"0\" text-align=\"center\"><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Numéro De Téléphone</th><th>Sexe</th></tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["email"]."</td><td>".$row["numTel"]."</td><td>".$row["sexe"]."</td></tr>";
      }
      echo "</table>
      </div>
      ";

      echo "</center>";
  } else {
      echo "0 results";
  }


  $conn->close();
  ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="icon" type="image/jpg" href="../Logo Simplon.jpg">
    <style media="screen">
      body {
        background-image: url("../Logo Simplon.jpg");
        background-repeat: no-repeat;
        background-position: top;
      }
    </style>

  </head>
  <body>
<script type="text/javascript">
  window.onload = function() { window.print(); }
</script>
  </body>
</html>
