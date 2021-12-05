<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="author" content="Luka Cvrk (www.solucija.com)" />
	<title><?= $title ?></title>
	<style>
		*{margin:0;padding:0;}
body { font: .8em Georgia, "Times New Roman", Serif; background: #fff; color: #777; position: relative;}
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
.gallery {display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; width: 100%;}
.gallery_img{max-width: 200px; height: auto; margin: 0px 0px 50px; position: cover;}
	.gallery_img:hover{box-shadow: 0px 0px 20px #555; border-radius: 4px; transition: all 0.3s;}	
.full_box{position: absolute; width: 100vw; height: 100vh; z-index: 5; display: flex; justify-content: center; align-items: center; background-color: rgba(0, 0, 0, 0.850);}
	.sub_box{position: relative; display: flex; flex-direction: column;}
	.full_img{margin: auto; width: auto; height: 450px;}
	.full_svg_box{box-sizing: border-box; padding: 40px; position: absolute; top: -40px; right: -80px;}
		.full_svg{}
	.full_svg_box:hover .full_svg{fill: rgb(180, 0, 0);}
.server_info{font-size: 36px;}
.return{box-sizing: border-box; padding: 15px 30px; background-color: #111; width: max-content; align-self: center; border-radius: 5px; color: #777;}
.return:hover{color: #555; background-color: #222; box-shadow: 0px 0px 20px #000;}
.form{margin: 20px auto; width: max-content; box-sizing: border-box; padding: 20px; background-color: rgb(230, 230, 230);}
.send{box-sizing: border-box; padding: 10px; color: #777;}
#footer { clear: both; border-top: 1px solid #ddd; padding: 20px 0; font-size: .9em; color: #999; display: flex; justify-content: center;}
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
		<h3 class="subTitle">Lesson_4</h3>
		<div class="gallery"><?php  
			require("scan.php");
			?>
		</div>
		<form class="form" action="server.php" method="post" enctype="multipart/form-data">
     		<p>Загрузить изображение</p>
     		<input class="send" type="file" name="photo">
     		<input class="send" type="submit" value="Загрузить">
		</form>
		<div id="footer">
		      <p>Copyright &copy; <em>minimalistica</em> &middot; <?php echo date("Y")?> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a></p>
		</div>	
	</div>
	
</body>
</html>


