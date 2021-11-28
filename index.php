<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<title><?= $title ?></title>
	<style>
		*{margin:0;padding:0;}
body { font: .8em Georgia, "Times New Roman", Serif; background: #fff; color: #777; }
a { color: #D40000; text-decoration: none; }
	a:hover { color: #8F0000; }
p { line-height: 1.7em; margin: 0 0 15px; }
.x { clear: both; }

h1 { float: left; font-size: 2em; font-weight: normal; font-style: italic; padding: 0 0 25px 10px; margin: 0 0 10px; }
h2 { font-weight: normal; font-size: 2.6em; padding: 0 0 10px; margin: 0 0 15px; }
h3 { font-size: 1.7em; font-weight: normal; margin: 0 0 20px; }
	h3 a { color: #222; }

.subTitle{margin: 32px auto 16px;}
.box{margin: 32px auto 16px;}
.answer{color: #000;}
	
#content { width: 960px; margin: 40px auto; }

#menu { float: right; margin: 10px 10px 0 0; }
	#menu li { display: inline; list-style: none; }
	#menu li a { float: left; margin: 0 0 0 20px; color: #888; }
		#menu li a:hover { color: #555; }

.post { clear: both; padding: 30px 10px; border-top: 1px solid #ddd; border-bottom: 1px solid #ddd; margin: 0 0 40px; }
	.post .details { float: left; width: 250px; }
	.post .details .info { font-size: .9em; color: #999; }
		.post .details .info a { color: #777; border-bottom: 1px dotted #999; padding: 3px 1px; }
	.post .body { float: right; width: 618px; padding: 0 0 0 30px; border-left: 1px solid #ddd; }
	
.col { width: 290px; margin: 0 40px 30px 0; float: left; font-size: .9em; }
	.col.last { margin-right: 0; }
		
#footer { clear: both; border-top: 1px solid #ddd; padding: 20px 0; font-size: .9em; color: #999; }
	</style>
</head>
<body>
	<?php
	$title = "Welcome";
	$subTitleMain = "Nunc commodo euismod massa quis vestibulum";
	$content = "Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. 
	Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. 
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. 
	Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. 
	Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. 
	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
	Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. 
	Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, 
	fermentum a eleifend non, luctus non augue. 
	Quisque scelerisque purus quis eros sollicitudin gravida. 
	Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.";
	$moreAbout = "read more";
	$infoText = "Quisque consectetur odio ut sem semper commodo. 
	Maecenas iaculis leo a ligula euismod condimentum. 
	Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
	Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. 
	Duis iaculis urna vel massa ultricies suscipit. 
	Phasellus diam sapien, fermentum a eleifend non, luctus non augue. 
	Quisque scelerisque purus quis eros sollicitudin gravida. 
	Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.";
	?>
	<div id="content">
		<h1><?php 
		echo $title; //4.
		?></h1>
		
		<ul id="menu">
			<li><a href="#">home</a></li>
			<li><a href="#">archive</a></li>
			<li><a href="#">contact</a></li>
		</ul>
	
		<div class="post">
			<div class="details">
				<h2><a href="#"><?php echo $subTitleMain ?></a></h2>
				<p class="info">posted 3 hours ago in <a href="#">general</a></p>
			
			</div>
			<div class="body">
				<p><?php
					echo $content;
					?></p>
			</div>
			<div class="x"></div>
		</div>
		
		<div class="col">
			<h3><a href="#">Ut enim risus rhoncus</a></h3>
			<p><?php echo $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p><?php echo $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p><?php echo $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<h3 class="subTitle">Lesson_2</h3>
		<p class="box">1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</p>
		<p>если $a и $b положительные, вывести их разность;</p>
		<p>если $а и $b отрицательные, вывести их произведение;</p>
		<p>если $а и $b разных знаков, вывести их сумму;</p>
		<?php
			$a = rand(-10, 10);
			$b = rand(-10, 10);
			
			if($a >= 0 && $b >= 0){
				$textRez = "a - b = ";
				$rez = $a - $b;
			}elseif($a < 0 && $b < 0){
				$textRez = "a * b = ";
				$rez = $a * $b;
			}elseif($a < 0 && $b >= 0 || $a >= 0 && $b < 0){
				$textRez = "a + b = ";
				$rez = $a + $b;
			}

		?>
		<p class="answer"><?php echo "a = ".$a?></p>
		<p class="answer"><?php echo "b = ".$b?></p>
		<p class="answer"><?php echo $textRez.$rez?></p>
		<p class="answer"></p>
		<p class="box">2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.</p>
		<?php
			$a = rand(0, 15);
		?>
		<p class="answer"><?php echo "a = ".$a?></p>
		<p class="answer"><?php
			switch($a){
				case 0:
					echo "0<br>";
				case 1:
					echo "1<br>";
				case 2:
					echo "2<br>";
				case 3:
					echo "3<br>";
				case 4:
					echo "4<br>";
				case 5:
					echo "5<br>";
				case 6:
					echo "6<br>";
				case 7:
					echo "7<br>";
				case 8:
					echo "8<br>";
				case 9:
					echo "9<br>";
				case 10:
					echo "10<br>";
				case 11:
					echo "11<br>";
				case 12:
					echo "12<br>";
				case 13:
					echo "13<br>";
				case 14:
					echo "14<br>";
				case 15:
					echo "15<br>";
					break;
				default:
					echo "ERROR<br>";
			}
		?></p>
		<p class="box">3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.</p>
		<?php
			$a = rand(0, 10);
			$b = rand(1, 10);
		?>
		<p class="answer"><?php echo "a = ".$a?></p>
		<p class="answer"><?php echo "b = ".$b?></p>
		<?php
			function sum($a, $b){
				return $a + $b;
			}
			function sub($a, $b){
				return $a - $b;
			}
			function mult($a, $b){
				return $a * $b;
			}
			function split($a, $b){
				return $a / $b;
			}
		?>
		<p class="answer"><?php echo "Сумма = ".sum($a, $b)?></p>
		<p class="answer"><?php echo "Разность = ".sub($a, $b)?></p>
		<p class="answer"><?php echo "Умножение = ".mult($a, $b)?></p>
		<p class="answer"><?php echo "Деление = ".split($a, $b)?></p>
		<p class="box">4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
			В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>
		<?php
			$arg1 = rand(0, 10);
			$arg2 = rand(1, 10);
			$arr = ["+","-","*","/"];
			$operation = $arr[rand(0,3)];
			function mathOperation($arg1, $arg2, $operation){
				switch($operation){
					case "+":
						return sum($arg1, $arg2);
					case "-":
						return sub($arg1, $arg2);
					case "*":
						return mult($arg1, $arg2);
					case "/":
						return split($arg1, $arg2);
					default:
						echo "ERROR<br>";
				}
			}
		?>	
		<p class="answer"><?php echo "Аргумент №1 = ".$arg1?></p>
		<p class="answer"><?php echo "Аргумент №2 = ".$arg2?></p>
		<p class="answer"><?php echo "Математическое действие: ".$operation?></p>
		<p class="answer"><?php echo "a ".$operation." b = ".mathOperation($arg1, $arg2, $operation)?></p>
		<p class="box">5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML-шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</p>
		<p class="answer"><?php echo date("Y")?></p>
		<p class="box">6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.</p>
		<p class="answer"><?php
			$val = rand(0, 10);
			$pow = rand(2, 4);
			function power($val, $pow){
				$rez = pow($val, $pow);
				echo $rez."<br>";
				if($rez < 1000000 && $rez != 1 && $rez != 0){
					power($rez, $pow);
				}
			}
		?></p>	
		<p class="answer"><?php echo "Результат возведения числа $val в степень $pow равно:"?></p>
		<p class="answer"><?php power($val, $pow)?></p>
		<p class="box">7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями:</p>
		<p class="answer"><?php 
		function superTime(){
			$h = date("H");
			$m = date("i");
			if($h > 20){
				$h_ex = $h - 20;
			} else $h_ex = $h;

			switch($m){
				case $m > 20 && $m < 30:
					$m_ex = $m - 20;
					break;
				case $m > 30 && $m < 40:
					$m_ex = $m - 30;
					break;
				case $m > 40 && $m < 50:
					$m_ex = $m - 40;
					break;
				case $m > 50 && $m < 60:
					$m_ex = $m - 50;
					break;
				default:
					$m_ex = $m;
			}

			switch($h_ex){
				case 1:
					$h_text = "час";
					break;
				case 2:
					$h_text = "часа";
					break;
				case 3:
					$h_text = "часа";
					break;
				case 4:
					$h_text = "часа";
					break;
				default:
					$h_text = "часов";
			}
			switch($m_ex){
				case 1:
					$m_text = "минута";
					break;
				case 2:
					$m_text = "минуты";
					break;
				case 3:
					$m_text = "минуты";
					break;
				case 4:
					$m_text = "минуты";
					break;
				default:
					$m_text = "минут";
			} return "$h $h_text - $m $m_text";
		}
		
		
		?></p>
		<p class="answer"><?php echo superTime()?></p>
		<div id="footer">
		      <p>Copyright &copy; <em>minimalistica</em> &middot; <?php echo date("Y")?> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
</body>
</html>