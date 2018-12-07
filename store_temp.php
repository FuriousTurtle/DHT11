<?php  

$docTemp = 'data.json';


if(isset($_POST['temperature'])){
	$fileCheck = file_put_contents($docTemp, $_POST['temperature']);
	if (! $fileCheck) {
		echo "Erreur du fichier";
	}
} else {
	echo "Erreur de données";
}







?>