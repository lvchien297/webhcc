<h2 class="information-title">Tin tức mới nhất về HCC</h2>
<div class="information">
    <?php
        $sql=" SELECT * from information where note=0 ";
        $result=excute($sql);
        foreach($result as $value)
        {
    ?>
        <div class="information-block">
            <a onclick="information(<?php echo $value['infor_id']; ?>)" href="#" class="information-link">
            <img src="<?php echo $value['infor_img']; ?>" alt="" class="information-block_img">
            <p class="information-block_title"><?php echo $value['infor_title']; ?></p>
            </a>
        </div>
        <?php
        }
        ?>
        

</div>
<h2 class="information-highlight">Các tin tức nổi bật </h2>
<div style="border:none;" class="information">
<?php
        $sql=" SELECT * from information where note=1 ";
        $result=excute($sql);
        foreach($result as $value)
        {
    ?>
        <div class="information-block">
            <a onclick="information(<?php echo $value['infor_id']; ?>)" href="" class="information-link">
            <img src="<?php echo $value['infor_img']; ?>" alt="" class="information-block_img">
            <p class="information-block_title"><?php echo $value['infor_title']; ?></p>
            </a>
        </div>
        <?php
        }
        ?>
        
       

</div>
<div class="content">

</div>