<?php
session_start();  
if(isset($_GET['id'])){
    $id_user=$_GET['id'];
    
    
    $_SESSION['id_user']=$id_user;
    
}

?>


<div class="header">
    <div class="left" style="display: block; margin: auto 0; text-align: center;">
        <img src="logo.png" alt="" width="45%">
    </div>
    <div class="right">
        <div class="top">
            <input class="top-input" type="text" name="" placeholder="  Tìm kiếm" id="">
            <?php
            include("./config/db.php");
            if(isset($_SESSION['id_user'])){
                $id=$_SESSION['id_user'];
                $sql="SELECT * From users where id_user=$id";
                $result=excute($sql);
                foreach($result as $row){
                    ?>
                    <div class="cart-icon">
                     <a href="index.php?danhmuc=giohang"> <i id="icon-cart" class="fa fa-cart-plus" aria-hidden="true"></i></a>
                 </div>               
                 <div class="user">
                     
                     <a href="index.php?danhmuc=taikhoan"> <img class="user-img" src="<?php echo $row['user_img']; ?>" alt=""></a>
                     <p class="user_name"><?php echo $row['name_user']; ?></p>
                     
                 </div>
                 <a class="log-out_button" href="index.php?danhmuc=dangxuat">Đăng xuất</a>
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
            <li class="menu-list"> <a href="index.php?danhmuc=trangchu" class="menu-list_item">Trang Chủ</a></li>
            <li class="menu-list"><a href="index.php?danhmuc=sanpham" class="menu-list_item">Sản Phẩm</a></li>
            <li class="menu-list"><a href="index.php?danhmuc=tintuc" class="menu-list_item">Bảng Tin</a></li>
            
            <li class="menu-list"><a href="http://localhost/hcc/login.php" class="menu-list_item">Đăng Nhập </a></li>
            <li style="border:none;" class="menu-list"><a href="index.php?danhmuc=dangki" class="menu-list_item">Đăng kí</a></li>     
            
        </ul>
    </div>
</div>
</div>