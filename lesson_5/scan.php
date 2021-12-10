<?php
include "config.php";

$sql = "SELECT * FROM gallery ORDER BY views DESC";
$res = mysqli_query($connect,$sql);
//$data - ассоциативный массив, содержащий информацию о каждой ячейке в таблице. Название ключа
//это название столбца
while($data = mysqli_fetch_assoc($res)){?>
    <div class="photo_box">
    <a href="fullImage.php?img=<?= $data['name']?>&views=<?= $data['views']?>&likes=<?= $data['likes']?>&dislikes=<?= $data['dislikes']?>&id=<?= $data['id']?>"><img class="gallery_img" src="images_small/<?= $data['name']?>" alt="image"></a>
    <div class="about_box">
    <div class="about">
        <img class="about_img" src="picto/v.jpg" alt="image">
        <p class="about_p"><?= $data['views']?></p>
    </div>
    <div class="about">
        <img class="about_img" src="picto/l.jpg" alt="image">
        <p class="about_p"><?= $data['likes']?></p>
    </div>
    <div class="about">
        <img class="about_img" src="picto/dl.jpg" alt="image">
        <p class="about_p"><?= $data['dislikes']?></p>
    </div>
    
</div>
</div>
<?php
    }

    
?>
