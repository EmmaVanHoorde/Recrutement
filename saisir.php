<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta http-equiv="Content-Language" content="fr" />
   <link rel="stylesheet" href="style.css"/>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/script.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <title>Formulaire</title>
 </head>
 <body>
   <h1>Créations d'un CV</h1>
   <form action="formulaire.php" method="post">
     <h3>Coordonnees:</h3>
     <ul>
       <li><label for="prenom">Prénom:</label> <input name="prenom" id="prenom" type="text"></li>
       <li><label for="nom">Nom:</label> <input name="nom" id="nom" type="text"></li>
       <li><label for="email">Email:</label> <input name="email" id="email" type="text"></li>
      </ul>

      <!--End coordonnees-->
      <h3>Expériences:</h3>
      <ul class="experiences">
        <li><label for="poste0">Poste:</label> <input name="poste0" id="poste0" type="text"></li>
        <li><label for="entreprise0">Entreprise:</label> <input name="entreprise0" id="entreprise0" type="text"></li>
        <li><label for="duree0">Durée:</label> <input name="duree0" id="duree0" type="text0"></li>
        <li><label for="dates0">Dates (de mois/annee à mois/annee):</label> <input name="dates0" id="dates0" type="text0"></li>
       </ul>
       <a id="addExperience">Add experience</a>
       <div class='testExperiences' style="visibility:hidden"><input  name="incrementationExperiences" type="number" value="0"></div>

       <!--End expériencess-->
       <h3>Formations:</h3>
       <ul class="formations">
         <li><label for="intitule0">Intitulé:</label> <input name="intitule0" id="intitule0" type="text"></li>
         <li><label for="niveau0">Niveau:</label> <input name="niveau0" id="niveau0" type="text"></li>
         <li><label for="ecole0">Ecole:</label> <input name="ecole0" id="ecole0" type="text"></li>
         <li><label for="annees0">Annees:</label> <input name="annees0" id="annees0" type="text"></li>
        </ul>
        <a id="addFormation">Add formation</a>
        <div class='testFormations' style="visibility:hidden"><input  name="incrementationFormations" type="number" value="0"></div>

        <!--End formations-->
        <h3>Compétences:</h3>
        <ul class="competences">
          <li><label for="intitule_competences0">Intitulé:</label> <input name="intitule_competences0" id="intitule_competences0" type="text"></li>
          <li><label for="niveau_competences0">Niveau:</label> <input name="niveau_competences0" id="niveau_competences0" type="text"></li>
         </ul>
         <a id="addCompetences">Add competence</a>
         <div class='testCompetences' style="visibility:hidden"><input  name="incrementationCompetences" type="number" value="0"></div>

      <input name="envoyer" id="envoyer" value="envoyer" type="submit">

   </form>

 </body>
</html>
