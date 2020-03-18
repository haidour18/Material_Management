<?php

      try{
        $bdd=new PDO ("mysql:host=127.0.0.1;dbname=intervention_emp","root","");
      
        if ( isset ($_POST ['utilisateur']) AND isset($_POST ['dates'])
        AND isset($_POST['heure']) AND isset($_POST['departement'])
       AND isset($_POST['fonction']) AND isset($_POST['direction']) AND isset($_POST['inter']) AND isset($_POST['panne'])AND isset($_POST['observation']) AND isset($_POST['detail'])
       )
    {
      $requete = $bdd->prepare("INSERT INTO info_emp (utilisateur,dates,heure,departement,fonction,direction,Type_int,Type_panne,observation,detail) VALUES(?,?,?,?,?,?,?,?,?,?)" );
      $requete->execute(array($_POST ['utilisateur'],$_POST ['dates'],$_POST['heure'],$_POST['departement'],
     $_POST['fonction'],$_POST['direction'],$_POST['inter'],$_POST['panne'],$_POST['observation'],$_POST['detail']));
     $requete = $bdd->prepare("INSERT INTO copie_info_emp (utilisateur,dates,heure,departement,fonction,direction,Type_int,Type_panne,observation,detail) VALUES(?,?,?,?,?,?,?,?,?,?)" );
     $requete->execute(array($_POST ['utilisateur'],$_POST ['dates'],$_POST['heure'],$_POST['departement'],
    $_POST['fonction'],$_POST['direction'],$_POST['inter'],$_POST['panne'],$_POST['observation'],$_POST['detail']));
   
    }
    }
    catch(Exception $e) {
        echo 'Message: ' .$e->getMessage();
      }
    
  ?>
  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Entreprise Métro Alger</title>
</head>
<body>
<script>
        
          alert("Merci ,votre demande sera envoyé au service informatique pour la prise en charge");
        
        </script>  
</body>
  </html>