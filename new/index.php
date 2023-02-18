<html>
<head>
	<title>Dicas de PHP</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php
	echo '<kbd>';
	echo 'Seráse';
	echo '</kbd></br>';

	for ($cont=0; $cont <=100; $cont++)
	{
		if ($cont % 2 == 0){echo "$cont PHP <br>";}
	}

?>

</body>
</html>