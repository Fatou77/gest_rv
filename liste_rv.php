<?php
	include_once "fonction.php";
	$conn=connect();
	$sql="SELECT * FROM rendez_vous ";
	$exe=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	?>
<html>
<head>
<title></title>
</head>
<style>
.cnt-table
{
	border-collapse: collapse;
	margin: 10px 0;
	font-size:0.4cm;
                min-width: 400px;
                border-radius: 10px 15px 0 0;
                overflow: hidden;
                box-shadow: 0 0 4px rgba(0, 0, 0, 15);
}
.cnt-table thead tr
{
	          background-color: rgb(6, 113, 214);
               color: rgb(0, 0, 0);
               text-align: left;
               font-weight: 100px;
}
.cnt-table th,
.cnt-table td
{
	padding: 12px 10px;
}
.cnt-table  tbody tr:nth-of-type(even)
            {
                background-color: silver
            }
			.cnt-table tbody tr
			{
				border-bottom: 1px solid white;
			}

</style>
<body>
    <form action="" method="POST">
    <table class="cnt-table">
       <thead class="thead">
    <tr>
    <th>N°</th>
    <th>nom</th>
    <th>prenom</th>
    <th>civilite</th>
    <th>age</th>
    <th>jour</th>
    <th>heur rv</th>
    <th>medcien</th>
    <th></th>
    </tr>
    </thead>
    <?php
	if ($exe) {
		
			while ($m = mysqli_fetch_array($exe)) {
            ?>
             <tbody class="tbody">
			<tr>
                     <td><?=$m['idrv'];?></td>
                 	 <td><?=$m['nom'];?></td>
                 	 <td><?php echo $m['prenom'];?></td>
                 	 <td><?=$m['civilite'];?></td>
                      <td><?=$m['age'];?></td>
                      <td><?=$m['jour'];?></td>
                      <td><?=$m['heur'];?></td>

                      </tr>
                      </tbody>
                 	 <?php

			}
		
	}
	else{
		echo "erreur server";
	}
	?>
    </table>
    </form>
</body>
</html>