<div class="cart">
   
<?php
        if(empty($_SESSION['id_user']))
        {
                header('location:login.php');
        }
       ?>
    <h1>Giỏ hàng </h1>
    
                <table border="1" >
                        <tr>
                                 <th>Ảnh sản phẩm</th>
                                <th>Thông tin sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Thành tiền</th>
                                <th></th>

                        </tr>
                        <?php
                      
                                if(isset($_SESSION['id_user'])){
                                        $user=$_SESSION['id_user'];
                                        $sql5="SELECT * FROM orders,product WHERE id_user=$user AND orders.id_product=product.id_product";
                                       $re=excute($sql5);
                                        $total=0;
                                       foreach($re as $row5){
                                            $total+=(double)$row5['total_money'];
                                           
                                            

                        ?>
                        <tr>
                                    <td><img src="<?php echo $row5['img_product']; ?>" alt="" ></td>
                                    <td><?php echo $row5['content_img']; ?></td>
                                    <td><?php echo $row5['quantity']; ?></td>
                                    <td><?php echo $row5['price']; ?></td>
                                    <td><?php echo $row5['total_money']; ?></td>
                                    <td><a href="./process/delete_cart.php?id_order=<?php echo $row5['id_orders'] ?>">Xóa</a></td>

                        </tr>
                        <?php
                                }
                            }
                            $total3=number_format($total,3);
                        ?>
                       
                        <tr>
                                            <td colspan="4">Tổng tiền</td>
                                            <td><?php echo $total3.".000";  ?></td>
                                            <td></td>

                        </tr>


                </table>


</div>
