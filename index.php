<!DOCTYPE html>
<html>
<head>
	<title>Liste de presence SIMPLON CIV</title>
	<link rel="icon" type="image/jpg" href="Logo Simplon.jpg">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<style media="screen">

	</style>
</head>
<body>

<div class="container">
<h1 align="center">LISTE DE PRESENCE SIMPLON COTE D'IVOIRE DU <input type="date" name="date"> </h1>
<form method="post">
  <div class="form-group">
    <label >Nom : </label>
    <input type="text" class="form-control" placeholder="Nom" name="nom" required="required">
  </div>
  <div class="form-group">
    <label>Prénom : </label>
    <input type="text" class="form-control" placeholder="Prénom" name="prenom" required="required">
  </div>
  <div class="form-group">
    <label>E-mail :</label>
    <input type="email" class="form-control" placeholder="Votre E-mail" name="email" required="required">
  </div>
  <div class="form-group">
    <label>Numéro De Téléphone : </label>
    <input type="text" class="form-control" placeholder="Ex : 01234567" name="numTel" required="required">
  </div>
  <div class="form-group">
    <label>Sexe : </label>
    <input type="radio" name="sexe" value="M"> H <input type="radio" name="sexe" value="F">F
  </div>
  <button type="submit" class="btn btn-default" name="present">Je suis Présent(e)</button>
</form>
</div>

<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simplonciv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['present'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$numTel = $_POST['numTel'];
	$sexe = $_POST['sexe'];
$sql = "INSERT INTO simplonien (nom, prenom, email, numTel, sexe)
VALUES ('$nom', '$prenom', '$email','$numTel','$sexe')";
}
if ($conn->query($sql) === TRUE) {
	$sql1 = "SELECT * FROM simplonien";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
	echo "<br>";
	echo "<h3>Liste de présence</h3>";
    echo "<table border="," cellspacing="," cellspadding="," text-align=";"><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>E-mail</th><th>Numéro De Téléphone</th><th>Sexe</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nom"]."</td><td>".$row["prenom"]."</td><td>".$row["email"]."</td><td>".$row["numTel"]."</td><td>".$row["sexe"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
} else {
    echo " ";
}
$conn->close();
?>
<form action="index.php" method="post">
	<input type="submit" name="reinitialiser" value="Réinitialiser la liste">
</form>
<?php
if (isset($_POST['reinitialiser'])) {
	$req2 = "ALTER TABLE simplonien auto_increment = 1";
}
 ?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
