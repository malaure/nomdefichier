<?php
	$client = $_POST['client'];
	$project = $_POST['project'];
	$dimensions = $_POST['dimensions'];
	$current_month = date('m');
	$current_year = date('Y');

	$filename = $client . '_' . $project . '_' . $dimensions . '_' . $current_month . '_' . $current_year . '.pdf';

	echo 'Le nom de fichier généré est : ' . $filename;
?>
