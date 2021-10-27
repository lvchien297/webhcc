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
           <?php
    $id=$_GET['id_product'];
     $_SESSION['id_pay']=$id;
            $sql="SELECT id_product,img_product,content_img,price,unit FROM product WHERE id_product=$id ";
            $re=excute($sql);
            foreach($re as $row)
            {

      

?>
       
                 <div class="cart">
                    <img src="<?php echo $row['img_product']; ?>" alt="" class="img-cart">
                   <div class="detail-content">
                   <p class="content-product"><?php echo $row['content_img']; ?></p>
                    <p class="price-produt"><?php echo $row['price']; echo $row['unit']; ?></p>
                    <form action="./pay.php" method="get" onsubmit="return showpay()">
                    <label class="label-cart" for="">Chọn số lượng cần mua  </label><br>
                    <input type="number" name="number" min="1" max="9" id="number"><br>
                   
                    <button type="submit"    class="order-product"> Đặt hàng </button>
                    </form>
                   </div>
                    

                   </div>
                   
                   
                   <?php
                   }
                   if(empty($_SESSION['id_user']))
                   {
                    header('location:../login.php');
                   }
                   ?>

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
</html>