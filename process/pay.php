<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/logup.css">
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/detail.css">
    <link rel="stylesheet" href="../css/pay.css">
    <link rel="stylesheet" href="../css/information.css">
    <link rel="stylesheet" href="../css/user_manager.css">
    <title>HCC</title>
</head>
<body>
<div class="main">
<!-- -----------------------header----------------------- -->
<?php
session_start();  
       if(isset($_GET['id'])){
        $id_user=$_GET['id'];
        
        
        $_SESSION['id_user']=$id_user;
       
       }
     
?>


<div class="header">
        <div class="left">
            <p class="logo-content">HCC</p>
        </div>
        <div class="right">
        <div class="top">
                <input class="top-input" type="text" name="" placeholder="Tìm kiếm" id="">
                <?php
                        include("../config/db.php");
                        if(isset($_SESSION['id_user'])){
                            $id=$_SESSION['id_user'];
                        $sql="SELECT * From users where id_user=$id";
                        $result=excute($sql);
                        foreach($result as $row){
                    ?>
                <div class="cart-icon">
               <a href="../index.php?danhmuc=giohang"> <i id="icon-cart" class="fa fa-cart-plus" aria-hidden="true"></i></a>
                </div>
               
                <div class="user">
                   
                   <a href="../index.php?danhmuc=taikhoan"> <img class="user-img" src=".<?php echo $row['user_img']; ?>" alt=""></a>
                    <p class="user_name"><?php echo $row['name_user']; ?></p>
                   
                </div>
                <a class="log-out_button" href="../index.php?danhmuc=dangxuat">Đăng xuất</a>
                <?php
                        }
                    }
                //   else{
                //   <div class="user">
                   
                //   <img class="user-img" src="./img/t.png" alt="">
                //     <p class="user_name"></p>
                   
                // </div>
                //   <?php -->

                //   }
                    ?>
                
                

        </div>
        <div class="bottom">
                        <ul class="menu">
                            <li class="menu-list"> <a href="../index.php?danhmuc=trangchu" class="menu-list_item">Trang Chủ</a></li>
                            <li class="menu-list"><a href="../index.php?danhmuc=sanpham" class="menu-list_item">Sản Phẩm</a></li>
                            <li class="menu-list"><a href="../index.php?danhmuc=tintuc" class="menu-list_item">Tin Tức</a></li>
                            
                            <li class="menu-list"><a href="http://localhost/hcc/login.php" class="menu-list_item">Đăng Nhập </a></li>
                            <li style="border:none;" class="menu-list"><a href="../index.php?danhmuc=dangki" class="menu-list_item">Đăng kí</a></li>     
                           
                        </ul>
        </div>
        </div>
    </div>
    <!-- ----------------------main----------------------------- -->
    <div class="body">
    <div class="pay">
                            <table border="1" cellspacing="0" cellpadding="" >
                                <tr >
                                    <th style="padding:10px" >Ảnh sản phẩm</th>
                                    <th style="padding:10px"> Số lượng</th>
                                    <th style="padding:10px"> Giá </th>
                                    <th  style="padding:10px"> Thành tiền</th>
                                </tr>
                                <?php
                                 
                                 if(isset($_SESSION['id_pay'])){
                                 $id=$_SESSION['id_pay'];
                                 if(isset($_GET['number'])){
                                 $number=(int)$_GET['number'];
                                 $_SESSION['number_pay']=$number;}
                                        $sql="SELECT id_product,img_product,content_img,price,unit FROM product
                                        WHERE id_product=$id ";
                                        $re=excute($sql);
                                        foreach($re as $row)
                                        {
                                            
                                            ?>
                                             <?php
        if(isset($_SESSION['id_user']))
        {
           
            
            if(isset($_GET['name']))
            {
                $id_product=$row['id_product'];
                $price=(double)$row['price'].".000";
                $quantity= $_SESSION['number_pay'];
                $a=number_format($price*$quantity, 3);
                $total1=$a.".000";
               
                $name1=$_GET['name'];
                $sdt=$_GET['sdt'];
                $address=$_GET['address'];
                $id_user=$_SESSION['id_user'];
                $conn=mysqli_connect("localhost","root","","web");
                mysqli_set_charset($conn, 'UTF8');
                $sql="INSERT INTO orders(id_product,quantity,price,total_money,id_user,name_user,phone,address_order) VALUES ('$id_product','$quantity','$price','$total1','$id_user','$name1','$sdt','$address')  ";
                mysqli_query($conn,$sql);
              
                header('location:http://localhost/hcc/index.php?danhmuc=sanpham');
            }
           

        }
       
      
       
       

?>
                                       
                                <tr >
                                    <td style="text-align:center;"><img id="img-td" src="<?php echo $row['img_product'];?>" alt=""></td>
                                    <td style="text-align:center;"><?php echo $_SESSION['number_pay'];?></td>
                                    <td style="text-align:center;"><?php echo $row['price']; ?></td>
                                    <td style="text-align:center;"><?php $price=(double)$row['price']; echo $price*$_SESSION['number_pay'].".000"; ?></td>
                                   

                                </tr>
                               
                            </table>
                            <div class="infor-user">
                                <form action="./pay.php" method="get" onsubmit=" return movepay()">
                                <label for="">Họ tên khách hàng </label><br>
                                <input type="text" name="name" id="name"><br>
                                <label for="">Số điện thoại </label><br>
                                <input type="text" name="sdt" id="sdt"><br>
                                <label for="">Địa chỉ </label><br>
                                <input type="text" name="address" id="address"><br>
                                <button  type="submit"  class="button-pay">Mua</button>
                                </form>
                            </div>
                           
                            <?php
                                        }
                                    }
                                ?>



</div>
</div>
    </div>
    <!-- ---------------------------footer--------------------------- -->
   <?php include("../footer/footer.php"); ?>
</div>
</body>
<script src="../js/log_up.js"></script>
<script src="../js/information.js"></script>
<script src="../js/product.js"></script>
<script src="../js/detail.js"></script>
<script src="../js/pay.js"></script>
</html>