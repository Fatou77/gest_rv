<?php
define("server","localhost");
define("user","fatou");
define("passeword","1234");
define("date_basse","Gestion_de_rendez_vous");
function connect(){
        $conn=mysqli_connect(server,user,passeword,date_basse) or die(mysqli_error ($conn));
        return $conn;
}




?>