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
        background-image: url(b.jpeg);
        background-size: cover;
        height: 100px;

    }
    .menu
    {
       background: rgb(0, 100,0);
       text-align: center;
       
    }
 .menu ul {
       display: inline-flex;
        list-style-type: none;
        position: fixed;
        padding: 0;
        margin: 25px 18px;
        margin-top: -4px ;
        size: 100%;
       
        
      }
       .menu ul li
      {
           
          width: 120px;
          height: 45px;
          opacity: .8;
          margin: 0px;
          padding: 0px;
          line-height: 20px;
          text-align: left;
      }

      
     ul li a{
        display: block;
        float: left;
        color: rgb(1, 14, 92); 
        padding: 14px 12px;
        text-decoration: none;
        margin-top: -8px;
        height: -100px;
      }
      
      ul li a:hover {
        background-color:rgb(252, 231, 41);
        z-index:100px;
      }
      ul li ul li{
          display: none;
      }
      ul li ul li a {
          display: block;
      }
      </style>              
<body> 
    <form action="POST">
    <header> 
        <div class="menu">
        <ul>
            <li><a href="">service</a></li>
            <li><a href="medcin.php"> medcine</a> </li>
            <li><a href="sp.php">specialite</a> </li>
            <li><a href="patie.php">rendez_vous</a> </li>
            <li><a href="secr.php">secretaire</a> </li>
        </ul>
    </div>
    </header>
    </form>
</body>
</html>