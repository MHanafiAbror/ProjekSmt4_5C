<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="<?php echo base_url() ?>images/logo-javawebmedia.png" rel="shortcut icon">
<title>Login Page</title>
<link href="<?php echo base_url() ?>assets/AdminLTE/css/style.css" rel="stylesheet">
</head>

<body>
<section class="login">
	<h1>Login Page</h1>
    <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
      <p>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Username">
        
      </p>
      <p>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password">
      </p>
      <p>
        <input type="submit" name="submit" id="submit" value="Log In" class="full">
      </p>
    </form>
   
</section>
</body>
</html>
