<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<title><?= $title ?></title>
	<link rel="stylesheet" href="style.css">
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
		<h3 class="subTitle">Lesson_5</h3>
		<div class="gallery"><?php  
			include("scan.php");
			?>
		</div>
		<form class="form" action="server_small.php" method="post" enctype="multipart/form-data">
     		<p>Загрузить иконку</p>
     		<input class="send" type="file" name="photo">
     		<input class="send" type="submit" value="Загрузить">
		</form>
		<form class="form" action="server_big.php" method="post" enctype="multipart/form-data">
     		<p>Загрузить масштабное изображение</p>
     		<input class="send" type="file" name="photo">
     		<input class="send" type="submit" value="Загрузить">
		</form>
		<div id="footer">
		      <p>Copyright &copy; <em>minimalistica</em> &middot; <?php echo date("Y")?> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
	
</body>
</html>


