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

// FORMULAIRE

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];

$reqSQL = $conn->prepare("INSERT INTO coordonnees (prenom, nom, email) VALUES (:prenom, :nom, :email)");
	$reqSQL->execute(array(
					"prenom" => $prenom,
					"nom" => $nom,
					"email" => $email,
));

$coordonnees_ID = $conn->lastInsertId();

$iExperience = $_POST['incrementationExperiences'];
$incrementationExperiences = 0;



for ($i=0; $i <= $iExperience; $i++) {

	$posteR = 'poste'.$incrementationExperiences;
	$entrepriseR = 'entreprise'.$incrementationExperiences;
	$dureeR = 'duree'.$incrementationExperiences;
	$datesR = 'dates'.$incrementationExperiences;
	$incrementationExperiences++;
	$poste = $_POST[$posteR];
	$entreprise = $_POST[$entrepriseR];
	$duree = $_POST[$dureeR];
	$dates = $_POST[$datesR];

	$reqSQL = $conn->prepare("INSERT INTO experiences (coordonnees_ID, poste, entreprise, duree, dates) VALUES (:coordonnees_ID, :poste, :entreprise, :duree, :dates)");
	    $reqSQL->execute(array(
	            "coordonnees_ID" => $coordonnees_ID,
	            "poste" => $poste,
	            "entreprise" => $entreprise,
	            "duree" => $duree,
							"dates" => $dates,
	));
}


$iFormation = $_POST['incrementationFormations'];
$incrementationFormations = 0;

for ($i=0; $i <= $iFormation; $i++) {

	$intituleR = 'intitule'.$incrementationFormations;
	$niveauR = 'niveau'.$incrementationFormations;
	$ecoleR = 'ecole'.$incrementationFormations;
	$anneesR = 'annees'.$incrementationFormations;
	$incrementationFormations++;
	$intitule = $_POST[$intituleR];
	$niveau = $_POST[$niveauR];
	$ecole = $_POST[$ecoleR];
	$annees = $_POST[$anneesR];

	$reqSQL = $conn->prepare("INSERT INTO Formations (coordonnees_ID, intitule, niveau, ecole, annees) VALUES (:coordonnees_ID, :intitule, :niveau, :ecole, :annees)");
	    $reqSQL->execute(array(
	            "coordonnees_ID" => $coordonnees_ID,
	            "intitule" => $intitule,
	            "niveau" => $niveau,
	            "ecole" => $ecole,
							"annees" => $annees,
	));
}


$iCompetence = $_POST['incrementationCompetences'];
$incrementationCompetences = 0;

for ($i=0; $i <= $iCompetence; $i++) {

	$intitule_competencesR = 'intitule_competences'.$incrementationCompetences;
	$niveau_competencesR = 'niveau_competences'.$incrementationCompetences;

	$incrementationCompetences++;
	$intitule_competences = $_POST[$intitule_competencesR];
	$niveau_competences = $_POST[$niveau_competencesR];


	$reqSQL = $conn->prepare("INSERT INTO Competences (coordonnees_ID, intitule_competences, niveau_competences) VALUES (:coordonnees_ID, :intitule_competences, :niveau_competences)");
	    $reqSQL->execute(array(
	            "coordonnees_ID" => $coordonnees_ID,
	            "intitule_competences" => $intitule_competences,
	            "niveau_competences" => $niveau_competences,
	));
}


// Affichage

$reqSQL = $conn->prepare("SELECT * FROM coordonnees  WHERE ID = $coordonnees_ID");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
	echo '<br>';
	echo 'Nom: '.$row['nom'].'<br>';
	echo 'Prenom: '.$row['prenom'].'<br>';
	echo 'Email: '.$row['email'].'<br>';
}
$reqSQL = $conn->prepare("SELECT * FROM experiences WHERE coordonnees_ID = $coordonnees_ID");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
	echo 'Poste: '.$row['poste'].'<br>Entreprise: '.$row['entreprise'].'<br><br>';
}
$reqSQL = $conn->prepare("SELECT * FROM formations WHERE coordonnees_ID = $coordonnees_ID");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
	echo 'Formation: '.$row['intitule'].'<br>Niveau: '.$row['niveau'].'<br><br>';
}
$reqSQL = $conn->prepare("SELECT * FROM competences WHERE coordonnees_ID = $coordonnees_ID");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
	echo 'Competences: '.$row['intitule_competences'].'<br>Niveau: '.$row['niveau_competences'].'<br><br>';
}

// Close connexion

$reqSQL = null;
$conn = null;


?>
