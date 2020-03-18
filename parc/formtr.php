<?php
    $bdd=new PDO ("mysql:host=127.0.0.1;dbname=intervention_emp","root","");

try{

  session_start();
$s=$_SESSION['q'];

$requete = $bdd->prepare("INSERT INTO confirme (ref,dates,heure,detail,designation,genre,inventaire,obs,nec,montant_chiff,montant_lett) VALUES(?,?,?,?,?,?,?,?,?,?,?)" );
$requete->execute(array($_SESSION['q'],$_POST ['dates'],$_POST['heure'],$_POST['detail'],
$_POST['designation'],$_POST ['genre'],$_POST['inventaire'],$_POST['obs'],$_POST['nec'],$_POST ['montant_chiff'],$_POST ['montant_lett']));

$stmt = $bdd->prepare("DELETE FROM info_emp WHERE Ref = ?"); 
$stmt->execute(array($s)); 


}
catch( Exception $e)

{
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
        
          alert(" Traitement effectué Merci  ");
        
        </script>  
</body>
  </html>