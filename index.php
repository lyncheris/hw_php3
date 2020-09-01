<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


	<?php 
	
		// hw3

		//1

		echo "<p><strong>Task 1</strong></p>";

		function get_cub($a) {
			$b = $a ** 3;
			return $b;
		}

		echo get_cub(5);

		//2

		echo "<hr/><p><strong>Task 2</strong></p>";

		function get_sum($a, $b) {
			$c = $a + $b;
			return $c;
		}

		echo get_sum(5, 9);

		//3

		echo "<hr/><p><strong>Task 3</strong></p>";

		function day_of_week($a = "") {
			if(!is_numeric($a)) return "Введите параметром число от 1 до 7";

			// if(!is_numeric($a)) {
			// 	echo "Странный у тебя день недили";
			// } elseif($a < 1) {
			// 	echo "Не лезь в прошлое, оно тебя сожрет?!";
			// } elseif($a > 7) {
			// 	echo "Взгляни вокруг" . "<br/>" . "Оглянись назад," . "<br/>" . "Гуси с тобой связаться хотят";
			// } else {

				switch($a) {
					case 1:
						$day = "Понедельник";
					break;
					case 2:
						$day = "Вторник";
					break;
					case 3:
						$day = "Среда";
					break;
					case 4:
						$day = "Четверг";
					break;
					case 5:
						$day = "Пятница";
					break;
					case 6:
						$day = "Суббота";
					break;
					case 7:
						$day = "Воскресенье";
					break;
					case $a < 1:
						$day = "Не лезь в прошлое, оно тебя сожрет?!";
					break;
					case $a > 7:
						$day = "Взгляни вокруг" . "<br/>" . "Оглянись назад," . "<br/>" . "Гуси с тобой связаться хотят!";
					break;
					// case (!is_numeric($a)):
					// 	$day = "Странный у тебя день недили";
					// break;
				// }
			}
			return $day;
		}

		echo day_of_week(8);

		//4

		echo "<hr/><p><strong>Task 4</strong></p>";

		function check($a) {
			return ($a < 0) ? True : False;
		}

		$b = check(-1);
		var_dump($b);

		//5

		echo "<hr/><p><strong>Task 5</strong></p>";

		function getDigitsSum($a) {
			$b = (string) $a;
			$c = 0;

			for ($i = 0; ; $i++) {
				if (empty($b[$i])) break;
				$c += (int)$b[$i];
			}
			return $c;
		}
		echo getDigitsSum(854353);

		//6

		echo "<hr/><p><strong>Task 6</strong></p>";

		function yearSumm() {
			$b = 0;
			for ($i = 0; $i <= 2020; $i++) {
				if (getDigitsSum($i) == 13) $b++;
			}
			return $b;
		}
		echo yearSumm();

		//7

		echo "<hr/><p><strong>Task 7</strong></p>";

		function isEven($a) {
			return is_int($a) && fmod($a, 2) == 0 && $a > 0 ? "True" : "False";
		}
		echo isEven(6);

		//8

		echo "<hr/><p><strong>Task 8</strong></p>";

		function translit($a) {
			$arrRus = ['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я',' ', '!'];
			$arrEng = ['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','sh','`','y','``','e`','yu','ya',' ', '!'];
			
			if (!is_string($a)) return 'Введите строку в качестве параметра функции!';
	
			for ($i = 0; $i < strlen($a); $i++) {
				$string = mb_substr($a, $i, 1);
				for ($j = 0; $j < count($arrRus); $j++) {
					if ($string == $arrRus[$j]) echo $arrEng[$j];
				}
			}
		}
		translit('просто текст');
	
		//9

		echo "<hr/><p><strong>Task 9</strong></p>";

		function apple($a = 0, $b ,$c, $d) {
			$str = (string)$a;
			$strLength = strlen($str)-1;
			if ($a <= 20) {
				if ($a == 0) return $a . ' ' . $d;
				if ($a == 1) return $a . ' ' . $b;
				if ($a >= 2 && $a <= 4) return $a . ' ' . $c;
				if ($a >= 5 && $a <= 20) return $a . ' ' . $d;
			} else {
				if ($str[$strLength] == 1) return $a . ' ' . $b;
				if ($str[$strLength] >= 2 && $str[$strLength] <= 4) return $a . ' ' . $c;
				if ($str[$strLength] >= 5 && $str[$strLength] <= 20) return $a . ' ' . $d;
			}
		}
		echo apple(77, 'яблоко', 'яблока', 'яблок');

	
		//10

		echo "<hr/><p><strong>Task 10</strong></p>";

		function arr($i) {
			$arr = [1,2,3,4,5,6,7,8,9,10];
			if (!empty($arr[$i])) {
				echo $arr[$i] . ' ';
				$i += 1;
				arr($i);
			}
		}
		arr(0);

	
		//11

		echo "<hr/><p><strong>Task 11</strong></p>";
		
		function summ($a) {
			$sum = getDigitsSum($a);
			if ($sum > 9) {
				return summ($sum);
			}
			return $sum;
		}
		echo summ(666669);

	
		//12

		echo "<hr/><p><strong>Task 12</strong></p>";

		function speed($s, $t) {
			return 'Скорость автомобиля равна: ' . ($s / $t) . 'км/ч. Или ' . round(($s / $t / 3.6), 1) . 'м/с.';
		}
		echo speed(200, 2);

		//15

		echo "<hr/><p><strong>Task 15</strong></p>";

		function tableMultiply() {
			echo "<table border=\"1\">";

			for ($i = 1; $i <= 10; $i++) {
				echo "<tr>";
				for ($j = 1; $j <= 10; $j++) {
					echo "<td>$j х $i = " . ($i*$j) . "</td>";
				}
				echo "<tr>";
			}
			echo "<table>";
		}
		tableMultiply();

		//17

		echo "<hr/><p><strong>Task 17</strong></p>";

		function definition() {
			$a = 0;
			$b = implode(range(1, 100));
			for($i = 0; $i < strlen($b); $i++){
				if ($b[$i] == "1") {
					$a++;
				}
			}
			return $a;
		}
		echo definition();

	?>
</body>
</html>