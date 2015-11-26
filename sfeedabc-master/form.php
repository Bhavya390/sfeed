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
  $data = $users->memberedit($admin_id,$pos_id);
}

if(isset($_POST['buttonsave']))
{
    //echo "rtretr";
    $membername=mysql_escape_String($_POST['member_name']);
    $dept=mysql_escape_String($_POST['department']);
    $rollno=mysql_escape_String($_POST['rollno']);
    $postion=mysql_escape_String($_POST['position']);
    $aboutme=mysql_escape_string($_POST['aboutme']);
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);  
    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);

    $data = $users->addmember($admin_id,$membername,$rollno,$dept,$postion,$aboutme,$target_file);
}

if(isset($_POST['buttonupdate'])){

    $membername=mysql_escape_String($_POST['member_name']);
    $dept=mysql_escape_String($_POST['department']);
    $rollno=mysql_escape_String($_POST['rollno']);
    $postion=mysql_escape_String($_POST['position']);
    $aboutme=mysql_escape_string($_POST['aboutme']);
    $prevpicture = mysql_escape_string($_POST['prevpic']);
    $target_dir = "images/";
    $t = basename($_FILES["pic"]["name"]);
    $target_file = $target_dir . basename($_FILES["pic"]["name"]);  
    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
    if(trim($t)){
    $data = $users->updatemembers($pos_id,$membername,$rollno,$dept,$postion,$aboutme,$target_file);
    } else{
      $data = $users->updatemembers($pos_id,$membername,$rollno,$dept,$postion,$aboutme,$prevpicture);
    }
    header('Location: formedit.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
       <script type="text/javascript" src="js/jquery.min.js"></script>
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
    <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12"> <a class="pull-right" href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span> <?php echo $username ;?></a> </div>
  </div>
</div>
  <div class="container" id="form">
    <div class="container-fluid">
      <h1 align="center" style="color: #E88923;">Now it's your turn to talk!</h1>
      <br>
    </div>
    <div class="container">
      <form id="member" class="memberdetails" action="" method="post" onsubmit = "return validateForm()"   enctype="multipart/form-data" runat="server">
        <div class="form-group">
          <label for="inputName" style="color: #E88923;">Spell out your Name!</label>
          <input type="text" class="form-control" name = "member_name" id="member_name" placeholder="John Doe or Jane Doe" value="<?php if(isset($data['membername'])) { echo $data['membername'] ;} ?>">
            <small id="errormessage"><span id="errname" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="inputdept" style="color: #E88923;">Which clan do you belong to?</label>
          <input type="text" class="form-control" name = "department" id="department" placeholder="Department" value="<?php if(isset($data['dept'])) { echo $data['dept'] ;} ?>">
            <small id="errormessage"><span id="errdept" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="inputrollno" style="color: #E88923;">Can I have your number ;)</label>
          <input type="number" class="form-control" name= "rollno" id="rollno" placeholder="Roll Number" value="<?php if(isset($data['rollno'])){echo $data['rollno'];} ?>">
            <small id="errormessage"><span id="errnumber" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="inputposition" style="color: #E88923;">What is that you do for your team...</label>
          <input type="text" class="form-control" name= "position" id="position" placeholder="Position" value="<?php if(isset($data['pos'])){echo $data['pos'] ;} ?>">
            <small id="errormessage"><span id="errpos" class="error_msg"></span></small>
        </div>` 
        <div class="form-group">
          <label for="inputaboutme" style="color: #E88923;">Go on! Brag about yourself</label>
          <textarea class="form-control" rows="7" name= "aboutme" id="aboutme" placeholder="About Me" ><?php if(isset($data['aboutme'])){ echo $data['aboutme'] ;} ?></textarea>
            <small id="errormessage"><span id="erraboutme" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="image" style="color: #E88923;">Let's see that million dollar face!</label>
          <input type="file" name = "pic" class="upload" id="pic" value="" />
          <input type = "hidden" name= "prevpic" id = "prevpic" value="<?php if(isset($data['file_name'])){echo $data['file_name'] ;} ?>">                
          <img id="show" src="#" class ="pic" style="background-image:url(<?php if(isset($data['file_name'])){echo $data['file_name'];}?>)"  height="300" width="400"/>
          <p><br>Upload a recent image here</p>
        </div>
        <input type="hidden" id="hdnEventId" name="hdnEventId" value="0">
                     <input type="hidden" id="hdnEventType">
                     <div class="bottom-section col-sm-12 col-md-12 col-xs-12">
            <!--button-->
            <?php if(isset($pos_id)){ ?>
             <input id="btnEventupdate" name = 'buttonupdate' type="submit" class="btn btn-primary change" value="Update"/>
             <?php } else {?>

            <input id="btnEventSubmit" name = 'buttonsave' type="submit" class="btn btn-primary change" value="Save"/>
            <?php }?>
            <button id="btnEventReset" type="reset" class="btn btn-default" >Reset</button>
            <button id="btnEventCancel" type="button" class="btn btn-default" style="display: none">Cancel</button>
            <img id="imgLoader" src="images/cc_loader.gif" style="display: none">
     
      </form>
    </div>
  </div>

  
  <script type="text/javascript">
  function validateForm() {

    var flag = true;

    var x = document.forms["member"]["member_name"].value;
    if (x == null || x == "" ) {
      document.getElementById("errname").innerHTML = "Please fill the name";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errname").innerHTML = ""
      //return false;
  
    var c = document.forms["member"]["department"].value;
    if (c == null || c == "") {
      document.getElementById("errdept").innerHTML = "Please fill the department";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errdept").innerHTML = ""

    var c = document.forms["member"]["position"].value;
    if (c == null || c == "") {
      document.getElementById("errpos").innerHTML = "Please fill position";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errpos").innerHTML = ""
    
var c = document.forms["member"]["aboutme"].value;
    if (c == null || c == "") {
      document.getElementById("erraboutme").innerHTML = "Fill about yourself";
      flag = false;
      //return false;
    }
    else
      document.getElementById("erraboutme").innerHTML = ""
    var c = document.forms["member"]["rollno"].value;
    if (c < 0 || c == "") {
      document.getElementById("errnumber").innerHTML = "Please Enter valid number";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errnumber").innerHTML = ""
   
    return flag;
  }

  function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#show').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#pic").change(function(){
        readURL(this);
    });
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>