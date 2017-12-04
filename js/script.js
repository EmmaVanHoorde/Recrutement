$(function(){
  var incrementationExperiences = 0;
  $('#addExperience').click(function(){
    incrementationExperiences ++;
    var block = $('<h4>Nouveau poste:</h4><ul><li><label for="poste'+incrementationExperiences+'">Poste:</label> <input name="poste'+incrementationExperiences+'" id="poste'+incrementationExperiences+'" type="text"></li><li><label for="entreprise'+incrementationExperiences+'">Entreprise:</label> <input name="entreprise'+incrementationExperiences+'" id="entreprise'+incrementationExperiences+'" type="text"></li><li><label for="duree'+incrementationExperiences+'">Durée:</label> <input name="duree'+incrementationExperiences+'" id="duree'+incrementationExperiences+'" type="text"></li><li><label for="dates'+incrementationExperiences+'">Dates (de mois/annee à mois/annee):</label> <input name="dates'+incrementationExperiences+'" id="dates'+incrementationExperiences+'" type="text"></li></ul>');
    $('.experiences').append(block);
    console.log(incrementationExperiences);
    $('.testExperiences input').replaceWith('<input name="incrementationExperiences" type="number" value="'+incrementationExperiences+'">');
  });

  var incrementationFormations = 0;
  $('#addFormation').click(function(){
    incrementationFormations ++;
    var block = $('<h4>Nouvelle formation:</h4><ul><li><label for="intitule'+incrementationFormations+'">intitule:</label> <input name="intitule'+incrementationFormations+'" id="intitule'+incrementationFormations+'" type="text"></li><li><label for="niveau'+incrementationFormations+'">Niveau:</label> <input name="niveau'+incrementationFormations+'" id="niveau'+incrementationFormations+'" type="text"></li><li><label for="ecole'+incrementationFormations+'">Ecole:</label> <input name="ecole'+incrementationFormations+'" id="ecole'+incrementationFormations+'" type="text"></li><li><label for="annees'+incrementationFormations+'">annees:</label> <input name="annees'+incrementationFormations+'" id="annees'+incrementationFormations+'" type="text"></li></ul>');
    $('.formations').append(block);
    console.log(incrementationFormations);
    $('.testFormations input').replaceWith('<input name="incrementationFormations" type="number" value="'+incrementationFormations+'">');
  });

    var incrementationCompetences = 0;
    $('#addCompetences').click(function(){
      incrementationCompetences ++;
      var block = $('<h4>Nouvelle compétences:</h4><ul><li><label for="intitule_competences'+incrementationCompetences+'">Intitule:</label> <input name="intitule_competences'+incrementationCompetences+'" id="intitule_competences'+incrementationCompetences+'" type="text"></li><li><label for="niveau_competences'+incrementationCompetences+'">Niveau:</label> <input name="niveau_competences'+incrementationCompetences+'" id="niveau_competences'+incrementationCompetences+'" type="text"></li></ul>');
      $('.competences').append(block);
      console.log(incrementationCompetences);
      $('.testCompetences input').replaceWith('<input name="incrementationCompetences" type="number" value="'+incrementationCompetences+'">');
    });

});
