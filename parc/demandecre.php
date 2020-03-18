

 <!DOCTYPE html>
<html lang="fr">
<head>
  <style>
html,body{
  width:100%;
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
  
  h4.titre2{
    padding-top:15px;
    color: #3BA3FC;
    
    text-align: center;
  }
  .container{
    text-align: center;
  }
  h4.titre2{
    text-align: center;
    color: #3BA3FC;
  }
  .d{
    text-align:center;
    color: #3BA3FC;
    padding :5px;
margin:5px;
  }
  table{
margin:20 px 0;
font-size: 0,9em;
    border-collapse:collapse;
    min-width:400px;
    border-radius: 5px 5px 0 0;
    overflow :hidden;
    table-layout:fixed;


  }
  thead{
    color:#3BA3FC;
  }
 
 tr,thead{
    padding:5px;
    border: 1px solid white;
  text-align:center;
  }
  tr:hover{
    background :#F7F7F7;
    opacity:100%;
    width:100%;
  }
  td,th{
padding: 12px 60px;
  }
  a{
  display: inline-block;
  padding: 2px 5px;
  background: #ffffff;
  border-radius: 4px;
  text-decoration: none;
  color: #000000;
  font-weight: 40;
  margin-top:  5px;
  box-shadow: 0 2px 5px rgba(0,0,0,.2);
}

 
  


  .topnav .search-container {
    
    float: none;
  }
  .topnav input[type=search], .topnav .search-container button {
    float: none;
    display: inline;
    text-align: left;
background:#FFFFFF;
    margin: 0;
    padding: 15px;
    color:#3BA3FC;
    border: 1px solid #3BA3FC ;  
    

  }
  .topnav input[type=search] {
    border: 1px solid #3BA3FC ; 
    padding-top:15px;
 
  }
  .topnav input[type=search],  .topnav input[type=submit],.search-container button{

padding-top:15px;
  }
 
  form{
padding-top:15px;
    text-align:center;
  }
  ..topnav input[type=submit] :nth-child(1):hover {
  box-shadow: 0 0 0 500px #BBDBF7;
 
}

 </style>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
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
<div class="topnav">
<div class="search-container">
    <form action="detaildc.php" method="GET">
      <input type="search" placeholder="Reference.." name="q">
      <button type="submit" name="rechercher"><i class="fa fa-search"></i></button>
    </form>
  </div>

</div>


<div class="navi">


<h4 class="titre2">   " Liste des demandes envoyées "</h4>

</div>
<table>
<thead>
    <tr>
      <th> Réference   </th>
      <th>   Utilisateur </th>
      <th> Direction   </th>     
       <th> Fonction   </th>
       <th>  Département  </th>
       <th>   Date </th>
    </tr>
</thead>
<tbody>
<?php
$bdd=new PDO ("mysql:host=127.0.0.1;dbname=intervention_emp","root","");
$requete = $bdd->query('SELECT  * From info_emp ');

 while ($contacts=$requete->fetch() ) {

echo '<tr>'.'<td>'.$contacts['Ref'].'</td>' ;

echo '<td >'.$contacts['utilisateur'] .'</td>'; 
echo '<td>'.$contacts['direction'].'</td>' ; 
echo '<td>'.$contacts['fonction'] .'</td>';
echo '<td>'.$contacts['departement'].'</td>';  
echo '<td>'.$contacts['dates'].'</td>';


'</tr>';







    } 

?>
</tbody>
</table>

  </body>
  </html>









