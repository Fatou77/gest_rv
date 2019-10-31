
<html>
    <head>
        <title></title>
    </head>
    <style>
 body
{
    margin: 0;
    padding: 0;
    top: 0;
    bottom: 0;
    background-image: url('br.jpeg') ;
    background-size:cover ;
    background-repeat: no-repeat;
    height: 100vh;
    z-index: -5px;
}
.fdreyk
{
           position: absolute;
            top: 10%;
            transform: translate(-50%);
            left: 85%;
            width: 500px;
            height: 550px;
            padding: 100px 60px;
            box-sizing: border-box;
            background: rgb(0, 0, 0,.4);
            border-radius:15px; 
}
h2
{
   
    margin: 0;
  padding: 0 0 20px;
   color: rgb(10, 231, 158);
   margin-top: -50px;
}
.fdreyk p{
        margin: 0;  
        padding:0;
        font-weight: bold;
        color:rgb(0, 0, 0);
        font-size:15px;
}
.fdreyk input[type="text"]
  {
        border:none;
        border-bottom:1px solid #fff;
        width:90%;
        margin-bottom:6px;
        background: transparent;
        outline: none;
        height: 30px;
        color: #fff;
        font-size: 15px;
    }
    .fdreyk input[type="select"]
    {
      direction: unset;
     }
    ::placeholder
    {
        color: rgba(28, 28, 29, 0.973)
    }
    .fdreyk input[type="submit"]
  
    
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
    }
</style>
    <body>
    <div class="fdreyk">
    <form action ="liste_rv.php" method ="POST">
        <h2>Gestion des rendez_vous</h2>
    <P>nom</P>
        <input type="text" name="nom" placeholder="votre nom" required>
        <P>prenom</P>
        <input type="text" name="pnom" placeholder="votre prenom"required>
        civilite<select name="civil" id="">
            <option value=""></option>
            <option value="">Mr</option>
            <option value="">Mme</option>
            <option value="">Mll</option>
        </select>
        <P>age</P>
        <input type="text" name="age" placeholder="l'age du patient">
         jours ouvrable<select name="jour" type="select">
        <option value=""></option>    
        <option value="">lundi</option>
            <option value="">mardi</option>
            <option value="">mercredi</option>
            <option value="">jeudi</option>
            <option value="">vendredi</option>
        </select>
        <p>heur du rv</p>
        <input type="time" name="hr" > &nbsp;&nbsp;&nbsp; &nbsp;  
        <p>medcin</p>
        <button> <a href="listemed.php"> madcin</a></button><br>          
         <p>nom du secretaire</p>
        <select name="scrtre" id="" value="">
           <option value=""></option>
       </select>
       <p>n'oublie pas que la consultation duree 15mn </p>
        <input type="submit" name="btnsave" value="Ajouter">

    </form>
    </div>
    </body>
</html>
<?php
include_once "fonction.php";
 $conn=connect();
 if(isset($_POST['btnsave']))
 {
 extract($_POST);
 $req = "INSERT INTO rendez_vous(idrv,nom,prenom,civilite,age,jour,heur,idsec) VALUES (NULL,'$nom','$pnom','$civil', '$age','$jour','$hr','$sectre')" ;
 $exe = mysqli_query($conn,$req) or die (mysqli_error($conn));
 if($exe)
 {
    echo "le patient a ete enregistrer";

}else

 {
     echo "veuillez ressayer";
 }

}
?>
