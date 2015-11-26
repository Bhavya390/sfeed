<?php
require ('core/init.php');

if (empty($_POST) === false) {
 
	$accessKey = trim($_POST['key']);
	
 
	if (empty($accessKey) === true ) {
		$errors[] = 'Sorry, but we need your access key for team.';
	} else {
 
		$login = $users->login($accessKey);
		if ($login === false) {
			$errors[] = 'Sorry, that accessKey is invalid';
		}else {
			
 
 			$_SESSION['id'] =  $login;   
			echo $_SESSION['id'];
			if(isset($_SESSION['id']))
			{
			#Redirect the user team to home.php.
			header('Location: dashboard.php');
			}
			else
			{
				echo "cannot open without login";
			} 
			exit();
		}
	}
} 
?>
<html>
<head>
<title>
Login Page
</title>
<style>
 
.logincss
{
	padding-top:50;
	padding-left:100;
	padding-right:100; 
   margin-left: 300;
   border:3px solid;
   margin-right: 300;
   margin-top: -100;
   box-shadow: 5px 5px 5px #888888;
}
#login_id
{
	margin-left: 100;
}

</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" href="./css/homepagecss.css">-->
<link rel="stylesheet" href="css/loginadmin.css">
<div id="heading">	
</div>
<body>

<div id="banner_l">SPORTS FEED</div>
<div id="banner">NATIONAL INSTITUTE OF TECHNOLOGY, TRICHY</div>

<div id="banner_m" style="margin-top:2vw;">ADMIN LOGIN</div>

<div id="admin_login_div">
<form id="login" action="" method="post" accept-charset="utf-8">
	<?php if(empty($errors)==false)
	{
		echo '<p style="color:red">'.implode('</p><p>',$errors).'</p>';
	}
	else
	{
		echo '<br>';
	} ?> 
	
	<br>
	<p>Access Key : <input type="password" id="accesskey" name="key"/><input type="submit" value="Login" id="login_id" name="login"></p>
	
</form>
</div>

</body>
</head>
</html> 