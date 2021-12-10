<div class="full_box">
    <div class="sub_box">
        <?php
            $path = "images_small/".$_FILES['photo']['name'];
                if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
                    $show_info =  $_FILES['photo']['name']." успешно загружен!";
                } else $show_info = "Вы не выбрали файл";
                //print_r($_FILES);
        ?>
        <h1 class="server_info"><?= $show_info ?></h1>
        <a class="return" href="<?=$_SERVER['HTTP_REFERER']?>">Далее</a>
    </div>
</div>
<?php
require("index.php");
?>