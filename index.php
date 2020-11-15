<?php
	$i=1;

/*	while ($i<=10) {
		echo $i."<br>";
		$i++;
	}*/
/*	do {
		echo $i."<br>";
		$i++;
	} while($i<=10);*/
	/*for($i=0; $i<=10; $i++) {
		echo $i."<br>";
	}*/
/*	$arr["product"]="продукты";
	$arr["water"]="бутылка с водой";*/

	/*echo $arr[1];*/

/*	for ($i=0; $i < count($arr); $i++) { 
		echo $arr[$i]."<br>";
	}*/
/*	$arr = array ("product"=>"продукты", "water"=>"бутылка с водой");*/
	$arr = ["продукты", "бутылка с водой"];
	foreach ($arr as $key => $value) {
		echo "Ключ к массиву ".$key." - Значение массива ".$value."<br>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	Добавлен новый текст. Работа с git.
</body>
</html>

