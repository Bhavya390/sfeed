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
  $data = $users->blogselect($admin_id,$pos_id);
}
if(isset($_POST['buttonsave'])){
	$con = mysql_escape_String($_POST['txtEditor']);
	$data = $users->addmess($admin_id,$con);
}
if(isset($_POST['buttonupdate'])){
	$con = mysql_escape_String($_POST['txtEditor']);
	$data = $users->updatemess($admin_id,$pos_id,$con);
	header('Location: blogedit.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<script src="//code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="js/jquery.all.js" type="text/javascript"></script>
<script src="js/spt.all.js?v=1.0001" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
<script src="js/editor.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/editor.css" type="text/css" rel="stylesheet"/>
<title>Blog</title>
<style>

</style>
<!--<script type="text/javascript">
        $(document).ready( function() {
            
         $("#txtEditor").Editor();                    
         
    });
  </script>-->
  
</head>

<body>
<div class="container-fluid">
<div class="row">
    <form id="blog" class="blogdetails" action="" method="post" onsubmit = "return validateForm()" enctype="multipart/form-data" runat="server">
<div class="form-group">
                             
                             <div class="col-sm-9">
                          <div class="container">
                        
                            <textarea class="textarea" placeholder="Enter Updates..." style="width: 600px; height: 150px;" id="updates" name="updates" ><?php if(isset($data['postCont'])){ echo $data['postCont'] ;} ?></textarea>
                         
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
<script type="text/javascript">
function validateForm() {

    var flag = true;

    var x = document.forms["blog"]["txtEditor"].value;
    alert(x);
    if (x == null || x == "" ) {
      document.getElementById("errname").innerHTML = "Please fill the TeamAName";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errname").innerHTML = ""
    return flag;
  }
    </script>
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