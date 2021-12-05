<?php
$files = scandir("images");
//print_r($files);
for($i=2;$i < count($files);$i++){?>
    <a href="fullImage.php?img=<?= $files[$i]?>"><img class="gallery_img" src="images/<?= $files[$i]?>" alt="image"></a>
<?php
}