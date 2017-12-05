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


// $reqSQL = $conn->prepare("SELECT * FROM coordonnees, experiences WHERE experiences.coordonnees_ID = coordonnees.ID AND experiences.poste = '$poste_selected'");
// 	$reqSQL->execute();
//
// while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
//     echo 'coordonnees: '.$row['prenom'].'<br>Nom: '.$row['nom'].'<br><br>';
//     echo 'poste: '.$row['poste'].'<br><br>';
//
// }

// $reqSQL = $conn->prepare("SELECT * FROM coordonnees, experiences, formations WHERE experiences.coordonnees_ID = coordonnees.ID AND formations.coordonnees_ID = coordonnees.ID AND experiences.poste = '$poste_selected'");
// 	$reqSQL->execute();
//
// while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
//     echo 'coordonnees: '.$row['prenom'].'<br>Nom: '.$row['nom'].'<br><br>';
//     echo 'poste: '.$row['poste'].'<br><br>';
//     echo 'intitule: '.$row['intitule'].'<br><br>';
//
// }

$reqSQL = $conn->prepare("SELECT * FROM coordonnees, experiences WHERE experiences.coordonnees_ID = coordonnees.ID AND experiences.poste = '$poste_selected'");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
    echo 'coordonnees: '.$row['prenom'].'<br>Nom: '.$row['nom'].'<br><br>';
    echo 'coordonnees: '.$row['ID'];

    $id_array = array();

    // if((in_array($row['coordonnees_ID'], $id_array) == false)) {
    //   $id_array[] = $row['coordonnees_ID'];
    //   echo 'coordonnees: '.$row['prenom'].'<br>Nom: '.$row['nom'].'<br>';
    //   echo 'coordonnees: '.$row['coordonnees_ID'].'<br><br>';
    // }

    // foreach($id_array as $key => $value):
    //   "SELECT * FROM experiences, formations, competences";
    //   echo 'poste: '.$row['poste'].'<br><br>';
    //   echo $row['intitule'].'<br><br>';
    //   // echo 'competences: '.$row['intitule_competences'].'<br><br>';
    // endforeach;
}

$reqSQL = $conn->prepare("SELECT * FROM coordonnees, experiences WHERE experiences.coordonnees_ID = coordonnees.ID AND experiences.poste = '$poste_selected'");
	$reqSQL->execute();

// Close connexion

$reqSQL = null;
$conn = null;

?>
