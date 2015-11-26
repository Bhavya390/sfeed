<?php error_reporting(0);?>
<?php
require('core/init.php');
$user   = $users->teamdata($_SESSION['id']);
$admin_id = $_SESSION['id'];
if($_SESSION['id']== 0)
{
    header('Location: loginpage.php');
}
$username   = $user['Team'];
$pos_id =$_GET['id'];
if(isset($_GET['id'])){
  $pos_id = $_GET['id'];
  $data = $users->postfetch($admin_id,$pos_id);
}
if(isset($_POST['buttonsave'])){
  $con = mysql_escape_String($_POST['updates']);

  $data = $users->addpost($con,$admin_id);
   //header('Location: updateedit.php');
}
if(isset($_POST['buttonupdate'])){
  $con = mysql_escape_string($_POST['updates']);
  date_default_timezone_set('Asia/Calcutta');

  $date= date('Y-m-d h-i-s'); 
  $data = $users->updatepost($con,$date,$pos_id);
  header('Location: updateedit.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Updates</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css">
  </head>
  <body>
    <header>
  <div class="navbar navbar-inverse" role="navigation">
    
                    <button class="pull-right">
                       <a href="dashboard.php" class="btn btn-default btn-sm">Dashboard</a>
                    <a href="logout.php" class="btn btn-default btn-sm">Log out</a>
                    </button>
                  </div>
               
              
              
</header>
<!-- /.Header end-->
<div class="container breadcrumbs_nav">
  <div class="row">
    <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12"> <a class="pull-right" href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span><?php echo $username;?></a> </div>
  </div>
</div>
  <div class="container" id="form">
    <div class="container-fluid">
      <h1 align="center" style="color: #E88923;">Updates!</h1>
      <br>
    </div>
    <div class="container">
      <form class="updates" action="" method="post" onsubmit = "return validateForm()"   enctype="multipart/form-data" runat="server">
       
        
          <div class="form-group">
                             
                             <div class="col-sm-9">
                          <div class="container">
                        
                            <textarea class="textarea" placeholder="Enter Updates..." style="width: 600px; height: 150px;" id="updates" name="updates" ><?php if(isset($data['PostCont'])){ echo $data['PostCont'] ;} ?></textarea>
                         
                        </div>
                        <?php if(isset($pos_id)){ ?>
             <input id="btnEventupdate" name = 'buttonupdate' type="submit" class="btn btn-primary change" value="Update"/>
             <?php } else {?>

            <input id="btnEventSubmit" name = 'buttonsave' type="submit" class="btn btn-primary change" value="Save"/>
            <?php }?>
                    </div>
                  </div>

        
      </form>
    </div>
  </div>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src="js/wysihtml5-0.3.0.js"></script>
        <script src="js/jquery-1.7.2.min.js"></script>
       
        <script src="js/bootstrap-wysihtml5.js"></script>

        <script>
            $('.textarea').wysihtml5({
                "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
                "emphasis": true, //Italics, bold, etc. Default true
                "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
                "html": false, //Button which allows you to edit the generated HTML. Default false
                "link": false, //Button to insert a link. Default true
                "image": false, //Button to insert an image. Default true,
                "color": true //Button to change color of font  
            });
            
        </script>
  </body>
</html>