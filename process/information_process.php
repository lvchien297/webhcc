<?php
        if(isset($_GET['a']))
        {
            $a=$_GET['a'];
            include("./db.php");
            $sql="SELECT * FROM information where infor_id=$a";
            $result=excute($sql);
            foreach($result as $value)
            {
                ?>
                    <h2 class="title"><?php echo $value['infor_title']; ?></h2>
                    <img class="img_title" src="<?php echo $value['infor_img']; ?>" alt="">
                    <p class="title-content"><?php echo $value['infor_content']; ?></p>
                <?php


            }

        }
        else echo "không có";

?>