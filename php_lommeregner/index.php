<!DOCTYPE html>
<html>
<head>
	<title>Regnemaskine</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<style>
	
	body {
		background-color: #ddd;
		text-align: center;
	}

	h1{
		margin-bottom: 100px;
	}

	

</style>

</style>
</head>
<body>


	<div class="container" style="margin-top: 50px">
		<h1>Regnemaskine</h1>
		
		<!-- Her er formen som er regnemaskinen man ser fysisk  -->
		<form method="post" action="regnemaskine.php">
			<input name="nummer1" type="text" class="form-control" style="width: 150px; display: inline" type="number" placeholder="Indsæt tal" />
			<select name="operation">
				<option value="plus">Plus</option>
				<option value="minus">Minus</option>
				<option value="gange">Gange</option>
				<option value="divideret med">Divideret med</option>
			</select>
			<input name="nummer2" type="text" class="form-control" style="width: 150px; display: inline" type="number" placeholder="Indsæt tal"/>
			<input name="submit" type="submit" value="Regn" class="btn btn-primary" />
		</form>
		
		<?php

				// Når submit knappen er trykket på kør denne statement
		if(isset($_POST['submit']))
		{
					// Tjekker om det er tal
			if(is_numeric($_POST['nummer1']) && is_numeric($_POST['nummer2']))
			{
					// Her her kører den, den valgte operation med nummer1 og nummer2
				if($_POST['operation'] == 'plus')
				{
					$total = $_POST['nummer1'] + $_POST['nummer2'];	
				}
				if($_POST['operation'] == 'minus')
				{
					$total = $_POST['nummer1'] - $_POST['nummer2'];	
				}
				if($_POST['operation'] == 'gange')
				{
					$total = $_POST['nummer1'] * $_POST['nummer2'];	
				}
				if($_POST['operation'] == 'divideret med')
				{
					$total = $_POST['nummer1'] / $_POST['nummer2'];	
				}

						// Her udskriver den totalen
				echo "<h2>{$_POST['nummer1']} {$_POST['operation']} {$_POST['nummer2']} = {$total}</h2>";

			} else {

						// Udskriver denne tekst hvis der ikke er udfyldt noget tal eller tekst er sat Indsæt
				echo 'Indsæt tal i boksen';

			}
		}

		?>

		

	</div>
	
</body>
</html>