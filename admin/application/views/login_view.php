<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?= base_url(); ?>/public/css/customcss.css">
</head>
<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Sign In </h2>
      
      <div class="fadeIn first">
        <img src="../logo.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form action="login/checkLogin" method="post">
        <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <h3>For admin</h3>
      </div>

    </div>
  </div>
</body>
</html>