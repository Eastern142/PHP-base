<?
//Задание 2
echo "<br><br> Задание 2 <br><br>";

	$i = 0;
	do {
		if ($i == 0) 
			echo $i . " - это ноль<br>";
		elseif ($i & 1 != 0)
			echo $i . " - не четное число<br>";
		else 
			echo $i . " - четное число<br>";
		$i++;
	} while ($i <= 10);
