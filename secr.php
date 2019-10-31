
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .dfroy
    {
        position: absolute;
            top: 8%;
            transform: translate(-50%);
            left: 45%;
            width: 450px;
            height: 550px;
            padding: 100px 50px;
            box-sizing: border-box;
            background: rgb(0, 0, 0,.5)
    }
    .dfroy p{
        margin: 0;  
        padding:0;
        font-weight: bold;
        color: #fff;
    }
    .dfroy input[type="text"]
     {
        border:none;
        border-bottom: 1px solid #fff;
        width:100%;
        margin-bottom:10px;
        background: transparent;
        outline: none;
        height: 40px;
        color: rgb(237, 242, 243);
     } 
     .dfroy input[type="submit"]
     {
        border: none;
      outline: none;
      height: 40px;
      width: 100px;
      color: rgb(7, 1, 1);
      font-size: 16px;
      background: #f5f10f;
      cursor: pointer;
      border-radius: 20px;
      float: right;
      margin-top: 20px;
     }                
 </style>
<body>
    <div class="dfroy">
    <form method="POST">
        <label>nom</label>
        <input type="text" name="nom" placeholder="votre nom">
        <label>prenom</label>
        <input type="text" name="pnom" placeholder="votre prenom">
        <label>E mail</label>
        <input type="text" name="mail" placeholder="@gmail.com">
        <input type="submit" name="btnajt" values="Ajouter">
    </form>
    </div>
</body>
<?php
include_once "fonction.php";
$conn=connect();
if(isset($_POST['btnajt']))
{
    extract($_POST);
    $sql="INSERT INTO secretaire(idsec,nom,prenom,email) values(NULL,'$nom','$pnom','$mail')";
    $exe=mysqli_query($conn,$sql)or die (mysqli_error($conn));
    if($exe)
    {
        echo "insertion reussir";
    }
    else{
        echo "echec de l\insertion";
    }
}
?>
</html>