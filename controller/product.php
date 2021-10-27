
<h2 style=" color:red; margin-top:40px; margin-left: 13%; margin-right: 13%;">Sản phẩm của HCC</h2>
<div class="product">
      <div class="product-menu">
          <!-- <h2>Sản phẩm của HCC</h2> -->
          <?php
            $sql="SELECT * from menucha";
            $result= excute($sql);
            foreach($result as $value){
          ?>
        <div class="product-menu_block">
                   <p style="font-size:20px; padding-bottom:5px;"> <?php echo $value['ten_cha']; ?></p>
                    <ul class="product-menu_list">
                    <?php
                            $id_cha=$value['id_cha'];
                            $sql1="SELECT * from menucon,menucha where menucha.id_cha=menucon.id_cha and menucha.id_cha=$id_cha";
                            $re=excute($sql1);
                            foreach($re as $row){
                    ?>
                    
                        <li onclick="product(<?php echo $row['id_con']; ?>)" class="product-list_item"> <?php echo $row['ten_con']; ?></li>
                        <?php
                            }
                    ?>
                    </ul>
                    

                        </div>
        <?php
            }
        ?>
      
      </div>
      <div class="product1-content">
      <?php
      
     
            $sql2="SELECT id_product,img_product,content_img,price,unit,ten_con FROM product,menucon
            WHERE product.id_con=menucon.id_con AND product.id_product%2=0";
            $ketqua=excute($sql2);
            foreach($ketqua as $row2)
            {
            ?>
            <div class="product-content_block">
                    <img src="<?php  echo $row2['img_product']; ?>" alt="" class="product-block_img">
                    <p class="product-block_content"><?php  echo $row2['content_img']; ?></p>
                    <p class="product-block_price"> <?php  echo $row2['price']; ?><?php  echo $row2['unit']; ?></p>
                    <a href="./process/product_detail.php?id_product=<?php echo $row2['id_product']; ?>" class="product-buy">Chọn mua</a>
                </div>
            <?php
            }
            ?>
      </div>
      <div class="product-content">
      </div>
  </div>