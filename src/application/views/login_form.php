<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
  <div id="login">
    <h2>Login Form</h2>
    <hr/>

        <form class="form my-2 my-lg-0" style="width:200px;margin:auto;" action="/user_auth/user_login_process" method="post">
    <?php
    echo "<div class='error_msg'>";
    if (isset($error_message)) {
      echo $error_message;
    }
    echo validation_errors();
    echo "</div>";
    ?>

      <input class="form-control mr-sm-2" style="margin-bottom:10px;" type="text" name="username" id="name" placeholder="Login" aria-label="Login">
      <input class="form-control mr-sm-2" style="margin-bottom:10px;" type="password" name="password" id="password" placeholder="Password" aria-label="Password">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
    </form>

    <?php echo form_close(); ?>
  </div>
</div>
</body>
</html>
