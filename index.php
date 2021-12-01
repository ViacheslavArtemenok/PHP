<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
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

#menu { display: flex; justify-content: space-between; margin: 10px 10px 0 0; }
	#menu ul {list-style: none; }
	#menu ul a {margin: 0 0 0 60px; color: #888; position: relative;}
		#menu ul a:hover { color: #555; }
.ul_add {display: flex; flex-direction: column;}
.subList {list-style-type: none; color: #888; align-self: center;}
.subList:hover { color: #555; }
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
		<?php $menu = [
				"<ul class=\"ul_add\"><a href=\"#\">home</a>" => ["<li class=\"subList\"><a class=\"subList\" href=\"#\">men</a></li>", 
																	"<li class=\"subList\"><a class=\"subList\" href=\"#\">women</a></li>", 
																	"<li class=\"subList\"><a class=\"subList\" href=\"#\">kids</a></li>"],
				"<ul class=\"ul_add\"><a href=\"#\">arhive</a>" => ["<li class=\"subList\"><a class=\"subList\" href=\"#\">article_1</a></li>", 
																	"<li class=\"subList\"><a class=\"subList\" href=\"#\">article_2</a></li>", 
																	"<li class=\"subList\"><a class=\"subList\" href=\"#\">article_3</a></li>"],
				"<ul class=\"ul_add\"><a href=\"#\">contact</a>" => ["<li class=\"subList\"><a class=\"subList\" href=\"#\">about us</a></li>", 
																	"<li class=\"subList\"><a class=\"subList\" href=\"#\">adress</a></li>", 
																	"<li class=\"subList\"><a class=\"subList\" href=\"#\">rights</a></li>"]
			];
			
			foreach($menu as $item => $subItem){
					echo $item;
					foreach($subItem as $item){
						echo $item;
					}
					echo "</ul>";
				}
			?>
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
			<p><?= $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<div class="col">
			<h3><a href="#">Maecenas iaculis leo</a></h3>
			<p><?= $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<div class="col last">
			<h3><a href="#">Quisque consectetur odio</a></h3>
			<p><?= $infoText ?></p>
			<p>&not; <a href="#"><?php echo $moreAbout ?></a></p>
		</div>
		<h3 class="subTitle">Lesson_3</h3>
		<p class="box">1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.</p>
		<p class="answer">
		<?php
			$i = 0;
			while($i <= 100){
				if($i % 3 == 0){
					echo "$i<br>";
				}
				$i++;
			}

		?></p>
		<p class="answer"></p>
		<p class="box">2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
			0 – ноль.
			1 – нечетное число.
			2 – четное число.
			3 – нечетное число.
			…
			10 – четное число.</p>
			<p class="answer"><?php
			$a = 0;
			do{
				if($a == 0){
					echo "$a - ноль.<br>";
				}
				elseif($a % 2 == 0 && $a != 0){
					echo "$a - четное число.<br>";
				}
				else echo "$a - нечетное число.<br>";
				$a++;
			} while($a <= 10);
		?></p>
	
		<p class="box">3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. 
			Вывести в цикле значения массива, чтобы результат был таким:</p>
			<p>Московская область:</p>
			<p>Москва, Зеленоград, Клин;</p>
			<p>Ленинградская область:</p>
			<p>Санкт-Петербург, Всеволожск, Павловск, Кронштадт;</p>
			<p>Рязанская область … (названия городов можно найти на maps.yandex.ru).</p>
			<p class="answer"><?php
			$arr = [
				"Московская область" => ["Балашиха", "Видное", "Домодедово"],
				"Ленинградская область" => ["Выборг", "Кудрово", "Приозерск"],
				"Новосибирская область" => ["Барабинск", "Бердск", "Искитим"]
			];
			foreach($arr as $index => $city){
				echo "$index:<br>";
				echo implode(", ", $city).";<br>";
			}
		?></p>

		<p class="box">4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания 
			(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
			Написать функцию транслитерации строк.</p>
		<?php
			function translit($value){
				$converter = array(
					'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
					'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
					'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
					'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
					'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
					'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
					
					'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
					'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
					'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
					'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
					'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
					'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
					'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
					'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
				);
 				$value = strtr($value, $converter);
				return $value;
			}
		?>	
		<p class="answer"><?= translit("Москва, ул.Краснобогатырская, дом 79")?></p>
		
		<p class="box">5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</p>
		<?php
			function someReplace($value){
				//$value = strtr($value, [" " => "_"]);
				$value = str_replace(" ", "_", $value);
				return $value;
			}
			?>
			<p class="answer"><?= "ivanov ivan 1990@mail.ru"?></p>
			<p class="answer"><?= someReplace("ivanov ivan 1990@mail.ru")?></p>
		<p class="box">6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
			Необходимо представить пункты меню как элементы массива и вывести их циклом. 
			Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.</p>
			<p class="answer"><?= "См. меню в шапке"?></p>
		
		<p class="box">7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла.</p>
		<p class="answer"><?php 
		for($i = 0; $i < 10; print $i++."<br>"){}
		?></p>
		
		<p class="box">8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».</p>
		<p class="answer"><?php 
		$arr = [
			"Московская область" => ["Балашиха", "Видное", "Королев"],
			"Ленинградская область" => ["Выборг", "Кудрово", "Приозерск"],
			"Новосибирская область" => ["Барабинск", "Бердск", "Искитим"]
		];
		foreach($arr as $index => $cities){
				echo "$index:<br>";
				foreach($cities as $city){
					$check = mb_substr($city,0,1,'UTF-8');
					if($check == "К"){
						echo "$city<br>";
					} 
				}
			}

		?></p>

		<p class="box">9. *Объединить две ранее написанные функции в одну, 
			которая получает строку на русском языке, 
			производит транслитерацию и замену пробелов на подчеркивания 
			(аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).</p>
		<p class="answer"><?php 
		$str = "Привет всем трудящимся из Москвы!";
		
		function multiFoo($str){
			return someReplace(translit($str));			
		}

		echo multiFoo($str);
		?></p>
		<div id="footer">
		      <p>Copyright &copy; <em>minimalistica</em> &middot; <?php echo date("Y")?> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
	
</body>
</html>


