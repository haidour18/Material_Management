
<!DOCTYPE html>
<html lang="fr">
<head>
    <style>
        html,body{
  padding: 0px;
  margin: 0px;
}
.navigateur{
    background-color: #3BA3FC;
    padding-top: 0 px;
    width: 100%;
    height: 100 px;
    padding: 0px;
  margin: 0px;
}
h4.titrel{
  margin: 0;
  padding-top: 70;
     color: azure;
   font-size: 390 ;
   text-align: center;
}
.container{
  text-align: center;
}
h5{
 font-size: 20px;
 margin: 10px 0;
 padding: 0;
 color: #3BA3FC;
 text-align: center;
}  
.container2 .box{
   position: relative;
   widows: 350px;
   padding: 40px;
   background: #ffffff;
 box-shadow: 0 5px 15px rgba(0,0,0,.1);
 border-radius: 4px;
 margin: 20px;
 box-sizing: border-box;
 overflow: hidden;
 text-align: center;
  width:600px;
  height:100%;
 }
 .container2{
   display: inline-block;
   widows: 350px;
   width:630px;
   height:100%;
margin-top:2%;
 }
 .container3 .box{
overflow:auto;
   widows: 350px;
   padding: 40px;
   background: #ffffff;
 box-shadow: 0 5px 15px rgba(0,0,0,.1);
 border-radius: 4px;
 margin: 20px;

 text-align: center;

  height:100%;
 }
 .container3{
   display: inline-block;
   widows: 350px;
   width:630px;
   height:100%;
margin-top:-3%;
 }
.box  h7{
color: #3BA3FC ;
 }

    } 
    .cont{
        text-align: center;
        margin-left: auto;
   margin-right: auto;
    }  
   
        </style>
    <meta charset="UTF-8">
    <title>Entreprise Métro Alger</title>
</head>
<header>

</header>

<body>

<nav class="navigateur">
<div class="container">
<h4 class="titrel"> Entreprise Métro Alger</h4 >
<img src="img/Metroalger.png" width=" 80 px" height="80 ">
</div >
</nav>
<h5> 'Details de la demande et son traitement' </h5>
<?php
session_start();
try{
    $bdd=new PDO ("mysql:host=127.0.0.1;dbname=intervention_emp","root","");
   
   if ( isset ($_GET ['q']) AND !empty($_GET ['q'] )){
$q= htmlspecialchars($_GET ['q']);
$_SESSION['q']=$_GET ['q'];

$requete = $bdd->query("SELECT * FROM copie_info_emp WHERE Ref =$q ");
$contacts=$requete->fetch();
echo ' <div class="container2">'.'<div class="box">'.
'<br>'.'<h7>'.'Référence :' .'</h7>'. $contacts['Ref'].'</br>'.
'<br>'.'<h7>'.'Utilisateur  :' .'</h7>'. $contacts['utilisateur'].'</br>'.
'<br>'.'<h7>'.'Fonction Utilisateur:' .'</h7>'.$contacts['fonction'].'</br>'.
'<br>'.'<h7>'.'Departement Utilisateur :' .'</h7>'. $contacts['departement'].'</br>',
'<br>'.'<h7>'.'Direction Utilisateur :' .'</h7>'. $contacts['direction'].'</br>',
'<br>'.'<h7>'.'Date de la demande :' .'</h7>'.$contacts['dates'].'</br>',
'<br>'.'<h7>'.'Heure de la demande :' .'</h7>'.$contacts['heure'].'</br>',
'<br>'.'<h7>'.'Type Intervention  :' .'</h7>'.$contacts['Type_int'].'</br>',
'<br>'.'<h7>'.'Détails du matériel et de type intervention :' .'</h7>'.$contacts['detail'].'</br>',
'<br>'.'<h7>'.'Type de panne :' .'</h7>'.$contacts['Type_panne'].'</br>',
'<br>'.'<h7>'.'Observation :' .'</h7>'.$contacts['observation'].'</div>'.'</div>';
    $requete2 = $bdd->query("SELECT * FROM confirme where ref=$q  ");
$contacts2=$requete2->fetch();
 

    echo '<div class="container3">'. '<div class="box">'.
   
    '<br>'.'<h7>'.'Détails  :' .'</h7>'. $contacts2['detail'].'</br>'.
    '<br>'.'<h7>'.'Date de fin :' .'</h7>'.$contacts2['dates'].'</br>'.
    '<br>'.'<h7>'.'Heure de fin :' .'</h7>'. $contacts2['heure'].'</br>',
   '<br>'.'<h7>'.'Désignation de matériel :' .'</h7>'. $contacts2['designation'].'</br>',
    '<br>'.'<h7>'.'Inventaire :' .'</h7>'.$contacts2['inventaire'].'</br>',
    '<br>'.'<h7>'.'Observation :' .'</h7>'.$contacts2['obs'].'</br>',
    '<br>'.'<h7>'.'Nécéessité :' .'</h7>'.$contacts2['nec'].'</br>',
    '<br>'.'<h7>'.'Montant chiffre:' .'</h7>'.$contacts2['montant_chiff'].'</br>',
    '<br>'.'<h7>'.'Montant lettre :' .'</h7>'.$contacts2['montant_lett']. '<br>'.'<h7>'.'' .'</h7>'.
    '<br>'.'<h7>'.'Type de traitement:' .'</h7>'.$contacts2['genre'].
    '<br>'.'<h7>'.'' .'</h7>'.
    '<br>'.'<h7>'.'' .'</h7>'.


    '<br>'.'<h7>'.'' .'</h7>'.'</div>'.'</div>';



    

   


    }
     
  }
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
  ?>
                 

  </body>
