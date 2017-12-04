<?php

//Connexion à la base
$servername = "localhost";
$username = "root";
$password = "";

try{
	$conn = new
	PDO("mysql:host=$servername;dbname=mini-site", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully <br>";
}
catch(PDOException $e){
	echo "Connection failed";
}

$poste_selected = $_POST['poste'];


//$reqSQL = $conn->prepare("SELECT * FROM coordonnees, experiences WHERE experiences.poste = '$poste_selected'");
$reqSQL = $conn->prepare("SELECT * FROM coordonnees, experiences WHERE experiences.coordonnees_ID = coordonnees.ID AND experiences.poste = '$poste_selected'");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
    echo 'coordonnees: '.$row['prenom'].'<br>Nom: '.$row['nom'].'<br><br>';
    echo 'poste: '.$row['poste'].'<br><br>';

}

// Close connexion

$reqSQL = null;
$conn = null;

?>
