<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/logup.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/information.css">
    <link rel="stylesheet" href="./css/user_manager.css">
    <title>HCC</title>
</head>
<body>
<div class="main">
<!-- -----------------------header----------------------- -->
   <?php include("./header/header.php");  ?>
    <!-- ----------------------main----------------------------- -->
    <div class="body">
            <?php
                   if(isset($_GET['danhmuc'])){
                    $a=$_GET['danhmuc'];
                    switch($a)
                    {
                        case 'trangchu': include('./controller/home.php'); break;
                        case 'giohang': include('./controller/cart.php'); break;
                        case 'sanpham' :include('./controller/product.php');  break;
                        case 'tintuc': include('./controller/information.php');  break;
                       
                        
                        case 'dangxuat':include('./controller/log_out.php'); break;
                        case 'dangki':include('./controller/log_up.php'); break;
                        case 'taikhoan':include('./controller/user_manager.php'); break;
                        
                    }
           
                }
                else{
                    include('./controller/home.php');
                }
                
           
            ?>
    </div>
    <!-- ---------------------------footer--------------------------- -->
   <?php include("./footer/footer.php"); ?>
</div>
</body>
<script src="./js/log_up.js"></script>
<script src="./js/information.js"></script>
<script src="./js/product.js"></script>
</html>