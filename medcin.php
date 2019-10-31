<?php
include_once "fonction.php";
$conn =connect();
$sql="SELECT * FROM specialite";
$exel = mysqli_query($conn,$sql)or die (mysqli_error($conn));
if(isset($_POST['btnajt']))
{
    extract($_POST);
    $ins ="INSERT INTO medcin (idmed,nom,prenom,email,idsp)
           VALUES (NULL,'$nom','$prenom','$email','$idsp')";
    $res=mysqli_query($conn,$ins) or die(mysqli_error($conn));
    if($res)
    {
        echo "insertion reussie";
        echo"<script>window.location.href='listemed.php';</script>";
    }else{
        echo "echec de l\insertion";
    }
}

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
        body
        {
            margin: 0;
            padding: 0;
            background-image: url(me.jpeg);
            background-size: cover; 
        }
            .forpu
            {
                position: absolute;
                top: 100px;
                transform: translate(-50%);
                left: 45%;
                width: 450px;
                height: 500px;
                padding: 100px 50px;
                box-sizing: border-box;
                background: rgb(0, 0, 0,.5);
                border-radius: 20px;
                
            }
            h1{
                margin: 0;
                padding: 0 0 20px;
                color: mediumblue;
            }
            
            .forpu p
        {
            margin: 0;  
            padding:0;
            font-weight: bold;
            color: #fff
    
           
        }
        .forpu  input
        
        {
            width:100%;
            margin-bottom:20px;
        }
        .forpu input[type="text"]
        
        {
            border:none;
            border-bottom:1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: rgb(243, 242, 242); 
        }
        ::placeholder
        {
            color: rgba(255, 247, 247, 0.959)
        }
        .forpu input[type="submit"]
        
        {
          border: none;
          outline: none;
          height: 40px;
          width: 100px;
          color: rgb(8, 8, 1);
          font-size: 16px;
          background: #f7d40e;
          cursor: pointer;
          border-radius: 20px;
          
        }
        
    
        </style>
<body>
    <div class="forpu"> 
    <form action="listemed.php" method="POST">
    <p>nom</p>
        <input type="text" name="nom" placeholder="votre nom">
       <p>prenom</p>
        <input type="text" name="pnm" placeholder="votre prenom">
        <p>E mail</p>
        <input type="text" name="mail" placeholder="@gmail.com">
        <p>specialite</p><select name="splt" id="">
            <option value=""></option>
        <?php
        if($exel){
        while ($l=mysqli_fetch_array($exel))
            { ?>
              <option value=""> <?php echo $l['nomsp'];?> </option> 
            <?php } }?>
            
        </select>
        <input type="submit" name="btnajt" value=" Ajouter">
        
        
    </form>
</div>
</body>
</html>

