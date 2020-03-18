
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
.container2{
    text-align: center;
    margin-left: auto;
   margin-right: auto;
}
  h5{
 font-size: 20px;
 margin: 10px 0;
 padding: 0;
 color: #3BA3FC;
 text-align: center;
}  
.container2 a{
  display: inline-block;
  padding: 10px 20px;
  background: #ffffff;
  border-radius: 4px;
  text-decoration: none;
  color:  #3BA3FC;
  font-weight: 500;
  margin-top: 20px;
  box-shadow: 0 2px 5px rgba(0,0,0,.2);
  text-align: center;
  margin: 15px;
  margin-top:2px;

}  
 .box{
   position: center;
   widows: 250px;
   padding: 30px;
   height: 100%;
   margin: 15px;
   width :700px;
   margin-left: auto;
   margin-right: auto;
   background: #ffffff;
 box-shadow: 0 5px 15px rgba(0,0,0,.1);
 border-radius: 4px;
 box-sizing: border-box;
 overflow: hidden;
 text-align: center;
 }
.box  h7{
color: #3BA3FC ;
 }
    .container3{
        text-align: center;
        margin-left: auto;
   margin-right: auto;
   margin: 15px;
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
<h5> 'Details de la demande' </h5>
<?php
session_start();
try{
    $bdd=new PDO ("mysql:host=127.0.0.1;dbname=intervention_emp","root","");
   
   if ( isset ($_GET ['q']) AND !empty($_GET ['q'] )){
$q= htmlspecialchars($_GET ['q']);
$_SESSION['q']=$_GET ['q'];

    $requete = $bdd->query("SELECT * FROM info_emp WHERE Ref =$q ");
    $contacts=$requete->fetch();
    echo  '<div class="box">'.
   '<br>'.'<h7>'.'Référence :' .'</h7>'. $contacts['Ref'].'</br>'.
    '<br>'.'<h7>'.'Utilisateur  :' .'</h7>'. $contacts['utilisateur'].'</br>'.
    '<br>'.'<h7>'.'Fonction Utilisateur:' .'</h7>'.$contacts['fonction'].'</br>'.
    '<br>'.'<h7>'.'Departement Utilisateur :' .'</h7>'. $contacts['departement'].'</br>',

   '<br>'.'<h7>'.'Direction Utilisateur :' .'</h7>'. $contacts['direction'].'</br>',
    '<br>'.'<h7>'.'Date de la demande :' .'</h7>'.$contacts['dates'].'</br>',
    '<br>'.'<h7>'.'Heure de la demande :' .'</h7>'.$contacts['heure'].'</br>',
    '<br>'.'<h7>'.'Type Intervention  :' .'</h7>'.$contacts['Type_int'].'</br>',
    '<br>'.'<h7>'.'Observation  :' .'</h7>'.$contacts['detail'].'</br>',
    '<br>'.'<h7>'.'Type de panne :' .'</h7>'.$contacts['Type_panne'].'</br>',
    '<br>'.'<h7>'.'Detail  :' .'</h7>'.$contacts['observation'].'</br>','</div>'

.'<div class="container2">'. '<a href="formconfirmation.html">'.'Confirmer '.'</a>';

    

   


    }
     
  }
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
  ?>
                 

  </body>
