<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <div class="gdfret">
            <div class="dserty">
        <label for="nom">nom</label>
        <input type="text" name="nomsp" placehoder="nom d'specialite">
        </div>
        <input type="submit" name="btna" value="Ajouter">
        </div>
        
    </form>
</body>
</html>
<?php
include_once "fonction.php";
$conn=connect();
if(isset($_POST['btna']))
{
    extract($_POST);
    $insert="INSERT INTO specialite (idsp,nom) VALUES (NULL,'$nomsp')";
    $res=mysqli_query($conn,$insert)or die(mysqli_error($conn));
    if($res)
    {
        echo "ok";
    }else{
        echo "erreur";
    }
}