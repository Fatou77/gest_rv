<?php
	include_once "fonction.php";
	$conn=connect();
	$sql="SELECT * FROM medcin ";
	$exe=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style>
.cn-table
{
	border-collapse: collapse;
	margin: 10px 0;
	font-size:0.4cm;
                min-width: 400px;
                border-radius: 10px 15px 0 0;
                overflow: hidden;
                box-shadow: 0 0 4px rgba(0, 0, 0, 15);
}
.cn-table thead tr
{
	          background-color: rgb(32, 226, 226);
               color: rgb(0, 0, 0);
               text-align: left;
               font-weight: 100px;
}
.cn-table th,
.cn-table td
{
	padding: 12px 10px;
}
.cn-table  tbody tr:nth-of-type(even)
            {
                background-color: silver
            }
			.cn-table tbody tr
			{
				border-bottom: 1px solid white;
			}
			.cn-table td button
			{
				border: none;
          outline: none;
          height: 30px;
          width: 90px;
          color: rgb(8, 8, 1);
          font-size: 16px;
          background: #0bfaee;
          cursor: pointer;
          border-radius: 15px;
			}
			button a
			{
				border: none;
          outline: none;
          height: 30px;
          width: 80px;
          color: rgb(8, 8, 1);
          font-size: 16px;
          cursor: pointer;
          border-radius: 15px;
			}

</style>
<body>
	
    <form method="POST">
        <h1>liste des medcin</h1>
        <table class="cn-table">
			<thead class="theade">
            <tr>
			    <th>N°</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>specialite</th>
				<th>action</th>
			</tr>
		</thead>
            <?php
	if ($exe) {
		if ($exe->num_rows > 0) {
		
			while ($m = mysqli_fetch_array($exe)) {
			?>
			<tbody class="tbody">
			<tr>
					 <td>
						 <?=$m['idmed'];?>
					</td>
                 	 <td>
						  <?=$m['nom'];?>
						</td>
                 	 <td>
						  <?= $m['prenom'];?>
						</td>
                 	 <td>
						  <?php echo $m['email'];?>
						</td>
                 	 <td>
						  <?php echo $m['idsp'];?>
						</td>
                         <td><button name="bnaj">Ajouter</button></td>
					  </tr>
					</tbody>
                 	 <?php

			}
		
	}
}
	else{
		echo "erreur server";
	}
	?>

		</table>
		<button><a href="medcin.php">Nouveau medcin</a>
		</button>
    </form>
</body>
</html>