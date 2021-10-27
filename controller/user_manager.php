<div class="manager">
<?php
    if(isset($_SESSION['id_user'])){
        $id =$_SESSION['id_user'];
        $sql="SELECT * from users where id_user =$id";
        $re=excute($sql);
        foreach($re as $value)
        {
    ?>
<form action="./process/user_process.php?id=<?php echo $id;  ?>" id="form-manager  " method="post" enctype="multipart/form-data">
   
     <h2 style="padding-left:70px;">Thông tin tài khoản của <span style="color: red;"><?php echo $value['name_user']; ?></span></h2>
  <input class="form-manager_name" type="text" placeholder="Tên :<?php echo $value['name_user']; ?>" name="name" ><br>
  <input class="form-manager_password" type="text" placeholder="Mật khẩu:<?php echo $value['password_user']; ?>"  name="password" ><br>
  <img class="form-manager_img" src="<?php echo $value['user_img']; ?>" alt=""><br>
  <input class="form-manager_file"  type="file" name="img" id=""><br>
  <input class="form-manager_phone" type="text" placeholder="Số điện thoại:<?php echo $value['phone']; ?>" name="phone" ><br>
  
  <input class="form-manager_date" type="date" value="<?php echo $value['birthday']; ?>" name="ngaysinh" id=""><br>
                    <select class="form-manager_gender"  name="gioitinh" id=""><br><br>
                       <option value="nam">Nam</option>
                         <option value="nu">Nữ</option>
  
                   </select><br>
                   <?php
        }
    }
                   ?>
  <input type="submit" class="form-manager_button" value="Cập nhật">
</form> 
</div>