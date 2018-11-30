<?php
$json_source = file_get_contents('data.txt');
$json_data = json_decode($json_source);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
	<meta charset="utf-8">
	<title>Thermomètre</title>
</head>
<body>
<h1>Température</h1>
<p>Il fait <?php echo $json_data->temperature ; ?>°C avec <?php echo $json_data->humidite ; ?>% d'humidité.</br></p>
<div id="thermometer"> <div id="bargraph"></div> </div>
</body>
</html>