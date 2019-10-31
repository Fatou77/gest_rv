
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
body
{
    margin: 0;
    padding: 0;
    top: 0;
    bottom: 0;
    background-image: url('g.jpeg');
    background-size:cover ;
    background-position: center center;
    height: 100vh;
    position: relative;
    z-index: -5px;
}
.fatre
{
           position: absolute;
            top: 20%;
            transform: translate(-50%);
            left: 50%;
            width: 450px;
            height: 400px;
            padding: 100px 50px;
            box-sizing: border-box;
            background: rgb(0, 0, 0,.4);
            border-radius:15px; 
}
.img
{
    width: 100px;
    height: 100px;
    border-radius: 60px;
    overflow: hidden;
    position: absolute;
    top: calc(-80px/3);
    left: calc(50% - 50px);

}
.fatre p{
        margin: 0;  
        padding:0;
        font-weight: bold;
        color: #fff;
}
.fatre input[type="text"],
.fatre input[type="password"]
  {
        border:none;
        border-bottom:1px solid #fff;
        width:90%;
        margin-bottom:10px;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 15px;
    }
    ::placeholder
    {
        color: rgba(255, 255, 255,.4)
    }
    .fatre input[type="submit"]
    
    {
      border: none;
      outline: none;
      height: 40px;
      width: 100px;
      color: #fff;
      font-size: 16px;
      background: #149e01;
      cursor: pointer;
      border-radius: 20px;
      position: center center;
    }
</style>
<body>
    
       
    <div class="fatre">
            <img src="user.png" alt="" class="img">
    <form method="POST" action="acce.php">
        <p>login</p>
        <input type="text" name="log" placeholder="mail utilisateur">
        <p>password</p>
        <input type="password" name="pwd" placeholder="votre mo de passe">
        <p>service</p>
        <input type="text" name="nom" placeholder="le nom du service">
        <input type="submit" name="save" value="Enregistrer">
    </form>
    </div>
</body>
</html>
<?php
include_once "fonction.php";
   $login = $_POST['log'];
    $password = $_POST['pwd'];
    $nom = $_POST['nom'];
if (isset($_POST['save'])) {
    //echo "ok";
     $c=connect();
         $req = "SELECT * FROM user WHERE login = '$login' AND pwd = '$password' AND nom = '$nom' ";
         $res = mysqli_query($c,$req)or die(mysqli_error($c));
         // var_dump($res);
         if($res == false){
           echo "Erreur dun serveur";
         }
         else{
               $tab = mysqli_fetch_array($res);
               if($tab['login '] == $login AND $tab['password'] == $password AND $tab['nom'] == $nom) 
               {
                // echo "Connexion reuissi";
                echo"<script>window.location.href='acce.php';</script>";
               }
               else
               {
                echo "Identifiant incorrect";
               }
          
         }
   }
?>