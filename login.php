<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body >
    
<section   class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Đăng Nhập</h2>
              <p>    </p>
         <form  method="POST" onsubmit="return login()">
         <?php
include('./config/db.php');
      if(isset($_POST['name']))
      {
        $name=$_POST['name'];
        $pasword=$_POST['password'];
        $sql="SELECT * FROM users";
       $result=excute($sql);
       foreach($result as $row)
        {
              if($name==$row['name_user'] && $pasword=$row['password_user'])
              {
               $id=$row['id_user'];
                header("location:http://localhost:8080/hcc/index.php?danhmuc=trangchu&id=$id");
              }
              else{
                $errorname=" Tên đăng nhập hoặc mật khẩu chưa đúng";
                
              }
        }

      }

?>
             
              <div class="form-outline form-white mb-4">
         <p style="color:red;"><?php
         if(!empty($errorname)){
         echo $errorname;}?></p>    
                <input type="text" placeholder="Tên đăng nhập" name="name" id="typeEmailX" class="form-control form-control-lg" />
               
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" placeholder="Password" name="password" id="typePasswordX" class="form-control form-control-lg" />
                
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Quên mật khẩu?</a></p>

              <button type="submit"  id="login_button" class="btn btn-outline-light btn-lg px-5" > Đăng nhập </button>
              </form>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Anh chưa có mật khẩu? <a href="./page/register.php" class="text-white-50 fw-bold">Đăng kí</a></p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>
<script src="./js/login.js"></script>
</html>