<?php
    function  excute($sql){
     $conn=mysqli_connect("localhost","root","","web");
     mysqli_set_charset($conn, 'UTF8');
        $result=mysqli_query($conn,$sql);
        $list=[];
        while($row=mysqli_fetch_assoc($result)){
            $list []=$row;
        }
        return $list;
    }
?>