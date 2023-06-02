<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>circulos</title>
	<style type="text/css">
		.circulo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: darkblue;
            margin: 10px;
            display: inline-block;
        }
	</style>
</head>
<body>
	<?php

		$Circulos =rand(1,5);
		$Total = 0;
		if ($Circulos == 1) {
			echo "<h2>$Circulos circulo</h2>\n";
		}else{
			echo "<h2>$Circulos circulos</h2>\n";
		}

		for($i=0;$i<$Circulos;$i++){
	
	echo '<div class="circulo"></div>';
}

	?>

</body>
</html>