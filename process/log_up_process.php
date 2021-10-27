<?php
        if(isset($_GET['ten'])){
            $name=$_GET['ten'];
            $password=$_GET['matkhau'];
            $phone=$_GET['sodienthoai'];
            $date=$_GET['ngaysinh'];
            $img='./img/t.png';
            $gender=$_GET['gioitinh'];
            include("./db.php");
            $sql="INSERT INTO users(id_user,name_user,user_img,password_user,phone,birthday,gender) VALUES(' ','$name','$img','$password','$phone','$date','$gender')";
            implement($sql);
            echo "a";
        }

?>