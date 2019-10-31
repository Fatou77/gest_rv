<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="" method>
        <p></p>
        <input type="text" name="nom">
        <select name="medcin" id="medcin">
            <option></option>
            <?php 
        while($me=mysqli_fetch_array($cl))
          { ?>
          <option><?=$me['nom']?></option>
         <?php }
     ?>
   
   <option value="Les classes"></option>

        </select>
    </form>
    </div>
</body>
</html>