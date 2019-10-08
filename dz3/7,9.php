<?
	//Задание 7
	echo "<br><br> Задание 7 <br><br>";

	for ($i=0; $i < 10; print $i++);

	//Задание 9
	echo "<br><br> Задание 9 <br><br>";

	function replace_str($str) {
		$res = translit($str);
		$res = probel($res);
		echo $res;
	}

echo replace_str("Текст текст текст");