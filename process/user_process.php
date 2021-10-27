<?php

include('./db.php');
    
    if(isset($_POST['name']))
    {
        $id=$_GET['id'];
       echo $_POST['name'];
        $ten=$_POST['name'];
        $phone=$_POST['phone'];
        echo $phone;
        $ngaysinh=$_POST['ngaysinh'];
        echo $ngaysinh;
        $gioitinh=$_POST['gioitinh'];
        echo $gioitinh;
        $matkhau=$_POST['password'];
        echo $matkhau;
        $target_dir = "./img/";
$target_file = $target_dir . basename($_FILES['img']['name']);
move_uploaded_file($_FILES["img"]["tmp_name"], '../img/'.basename($_FILES["img"]["name"]));
      
        $sql1="UPDATE users SET name_user='$ten',password_user='$matkhau',user_img='$target_file',phone='$phone',birthday='$ngaysinh',gender='$gioitinh' where id_user=$id";
       
       implement($sql1);
        echo "đã xong";
        header('location:http://localhost/hcc/index.php?danhmuc=taikhoan');
    }

   else echo "không";     

?>