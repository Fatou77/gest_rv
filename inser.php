<?php

$objetPdo=new PDO('mysql:serveur=localhost;Base de donnees=Gestion_de_rendez_vous','fatou','');
//insertion au base de donnee;
$pdoStat = $objetPdo->prepare("INSERT INTO medcin VALUES (NULL, :nom, :pnm, :mail, :splt)");

$pdoStat->binValue(':nom', $_POST['nom'], PDO::PARAM_STR);
$pdoStat->binValue(':pnm', $_POST['pnm'], PDO::PARAM_STR);
$pdoStat->binValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$pdoStat->binValue(':splt', $_POST['splt'], PDO::PARAM_STR);

$insertIsOk = $pdoStat->execute();

if($insertIsOk)
{
    $msg ="le medcin a ete enregistrer";

}else
{
    $msg = "echec d\insertion";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>insertion </h1>   
  <p> 
  <?php 
    echo $msg; 
  ?>
  </p> 
</body>
</html>