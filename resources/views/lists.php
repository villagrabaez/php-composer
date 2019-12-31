<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Listado de productos</h1>
				<?php 

					foreach ($products as $product) {
						echo "<strong>{$product->name}</strong> - {$product->description} <br>";
					}

				?>

				<hr>

				<p><a href="pdf.php">Exportar en PDF</a></p>
			</div>
		</div>
	</div>
</body>
</html>