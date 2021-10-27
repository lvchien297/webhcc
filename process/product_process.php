<?php
        if(isset($_GET['m']))
        {
           
            $a=$_GET['m'];
            include("./db.php");
            $sql="SELECT * FROM product where id_con=$a";
            $result=excute($sql);
            foreach($result as $value)
            {
                ?>
                     <div class="product-content_block">
                    <img src="<?php  echo $value['img_product']; ?>" alt="" class="product-block_img">
                    <p class="product-block_content"><?php  echo $value['content_img']; ?></p>
                    <p class="product-block_price"> <?php  echo $value['price']; ?><?php  echo $value['unit']; ?></p>
                    <a href="./process/product_detail.php?id_product=<?php echo $value['id_product']; ?>" class="product-buy">Chọn mua</a>
                </div>
                <?php


            }

        }
       

?>