<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login and Register SystemL</title>
  <style>
  *{
    margin: 0;
    padding: 0;

  }
  .image{
    background-image: url("images/Bg.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 100vh;
  }
  .container{
    width:500px;
    height: 400px;
    background: #F8F8FF;
    width: 30%;
    margin: 0px auto;
    border: 1px solid #B0C4DE;
    border-radius: 10px 10px 10px 10px;
    overflow: hidden;
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%,-50%)
  }
   .heading{
    width: 100%;
    background: #5F9EA0;
    text-align: center;
    color: white;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  form{
  padding:20px;
  }
  .input-group {
    margin: 10px 0px 10px 0px;
  }
  .input-group label {
    display: block;
    text-align: left;
    margin: 3px;
  }
  .input-group input {
    height: 40px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
  }
  .btn {
    padding: 15px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
  }
  .error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
  }
  .success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
    }

  </style>
</head>
<body>
  <div class="image">
    <div class="container">
      <div class="heading">
      <h1>Login</h1>
      </div>
      <form method="post" action="login.php">
      	<?php include('errors.php'); ?>
      	<div class="input-group">
      		<label>Username</label>
      		<input type="text" name="username">
      	</div>
      	<div class="input-group">
      		<label>Password</label>
      		<input type="password" name="password">
      	</div>
      	<div class="input-group">
      		<button type="submit" class="btn" name="login_user">Login</button>
      	</div>
      	<p>
      		Not yet a member? <a href="register.php">Sign up</a>
      	</p>
      </form>
        </div>
</div>
</body>
</html>
