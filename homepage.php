<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<style>
*{
  margin: 0;
  padding: 0;

}
.image{
  background-image:  url("images/hello.jpg");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  height: 100vh;

}
.container{
  width:300px;
  height: 135px;
  background: #F8F8FF;
  width: 30%;
  margin: 0px auto;
  border: 1px solid #B0C4DE;
  border-radius: 10px 10px 10px 10px;
  overflow: hidden;
  position: absolute;
  top: 50%;
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
.content {
 width: 100%;
 margin: 0px auto;
 padding: 20px;
 border: 1px solid #B0C4DE;
 background: white;
 border-radius: 0px 0px 10px 10px;
 overflow: hidden;
}
</style>
</head>
<body>
  <div class="image">
<div class="container">
<div class="heading">
  <a href="mainpage.php">

	<h2>Home Page</h2></a>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <b><?php echo $_SESSION['username']; ?></b></p>
    <?php endif ?>
</div>
</div>
</div>
</body>
</html>
