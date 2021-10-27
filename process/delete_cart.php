<?php
  $conn1=mysqli_connect("localhost","root","","web");
  mysqli_set_charset($conn1, 'UTF8');
  if(isset($_GET['id_order']))
  { echo "1";
                  $id_order=$_GET['id_order'];
                  $sql6="DELETE FROM orders WHERE orders.id_orders=$id_order";
                  mysqli_query($conn1,$sql6);
                  header('location:http://localhost/hcc/index.php?danhmuc=giohang');
                 
                  

  }
  else{echo "abc";}

                ?>