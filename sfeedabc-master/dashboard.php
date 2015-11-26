
<?php
require('core/init.php');
$user   = $users->teamdata($_SESSION['id']);
$admin_id = $_SESSION['id'];
if($_SESSION['id']== 0)
{
    header('Location: loginpage.php');
}
$username   = $user['Team'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Header Start-->
<header>
  <div class="navbar navbar-inverse" role="navigation">
    
                    <button class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-sm">Log out</a>
                    </button>
                  </div>
               
              
              
</header>
<!-- /.Header end-->
<div class="container breadcrumbs_nav">
  <div class="row">
    <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12"> <a class="pull-right" href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span><?php echo $username ;?></a> </div>
  </div>
</div>
<!--Dashboard Start-->
<div class="container">
	<div class="row">
    	<div class="col-sm-12 dashboard-menu">
        	<h3>Menu item</h3>
            <div class="box-menu">
            <p>
            	<a href="form.php" title="Member details" class="title-menu"><i class="fa fa-graduation-cap"></i> Member Details</a>
            	 
                <a href="form.php">Add</a>, 
                <a href="formedit.php">Listing</a>
            </p>

            <p>
              <a href="updates.php" title="Latest news" class="title-menu"><i class="fa fa-graduation-cap"></i>Latest News</a>
               
                <a href="updates.php">Add</a>, 
                <a href="updateedit.php">Listing</a>
            </p>

            <p>
              <a href="scoreboard.php" title="Score board" class="title-menu"><i class="fa fa-graduation-cap"></i>Score Board</a>
               
                <a href="scoreboard.php">Add</a>, 
                <a href="scoreedit.php">Listing</a>
            </p>

            <!--<p>
              <a href="blog.php" title="Blog" class="title-menu"><i class="fa fa-graduation-cap"></i>Blog</a>
               
                <a href="blog.php">Add</a>, 
                <a href="blogedit.php">Listing</a>
            </p>-->
           
            </div>
        </div>
      	
            
            
  			
              
  			


<!-- / .Dashboard End-->
<!-- Footer-->

<!-- / .Footer End-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
<script>
	$( document ).ready(function() {
		$( "#full_screen" ).click(function() {
			if($("#full-screen-content").attr('data-value')=='small')
			{
			$( "#full-screen-content" ).removeClass('container');
			$( "#full-screen-content" ).addClass('container-fluid');
			$("#full-screen-content").attr('data-value','big');
			}  
			else if($("#full-screen-content").attr('data-value')=='big')
			{
			$( "#full-screen-content" ).addClass('container');
			$( "#full-screen-content" ).removeClass('container-fluid');
			$("#full-screen-content").attr('data-value','small');
			}
		});
	});
	</script>
<script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
</body>
</html>
