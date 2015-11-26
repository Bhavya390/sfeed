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
  $data = $users->scoretext($admin_id,$pos_id);
}
if(isset($_POST['buttonsave'])){
  $teamA = mysql_escape_String($_POST['TeamA']);
  $scoreA = mysql_escape_String($_POST['ScoreA']);
  $teamB = mysql_escape_String($_POST['TeamB']);
  $scoreB = mysql_escape_String($_POST['ScoreB']);
  $data = $users->score($teamA,$scoreA,$teamB,$scoreB,$admin_id);
  header('Location:scoreboard.php');
}
if(isset($_POST['buttonupdate'])){
  $teamA = mysql_escape_String($_POST['TeamA']);
  $scoreA = mysql_escape_String($_POST['ScoreA']);
  $teamB = mysql_escape_String($_POST['TeamB']);
  $scoreB = mysql_escape_String($_POST['ScoreB']);
  $data = $users->updatescore($teamA,$scoreA,$teamB,$scoreB,$admin_id,$pos_id);
  header('Location:scoreedit.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Scoreboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

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
    <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12"> <a class="pull-right" href="#"><span class="glyphicon glyphicon-circle-arrow-right"></span> <?php echo $username; ?></a> </div>
  </div>
</div>
  <div class="container" id="form">
    <div class="container-fluid">
      <h1 align="center" style="color: #E88923;">Score Board!</h1>
      <br>
    </div>
    <div class="container">
      <form id="score" class="scoredetails" action="" method="post" onsubmit = "return validateForm()"   enctype="multipart/form-data" runat="server">
        <div class="form-group">
          <label for="teamNameA" style="color: #E88923;">Spell out your Team A Name!</label>
          <input type="text" class="form-control" id="TeamA" name="TeamA" placeholder="" value="<?php if(isset($data['TeamAname'])){ echo $data['TeamAname'];} ?>">
          <small id="errormessage"><span id="errname" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="ScoreA" style="color: #E88923;">TeamA score</label>
          <input type="text" class="form-control" id="ScoreA"  name = "ScoreA" placeholder="" value="<?php if(isset($data['TeamAscore'])){ echo $data['TeamAscore'];} ?>">
          <small id="errormessage"><span id="errscore" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="teamNameB" style="color: #E88923;">Spell out your Team B Name!</label>
          <input type="text" class="form-control" id="TeamB" name="TeamB" placeholder="" value="<?php if(isset($data['TeamBname'])){ echo $data['TeamBname'] ;} ?>">
          <small id="errormessage"><span id="errnameb" class="error_msg"></span></small>
        </div>
        <div class="form-group">
          <label for="ScoreB" style="color: #E88923;">TeamB score</label>
          <input type="text" class="form-control" id="ScoreB" name="ScoreB" placeholder="" value="<?php if(isset($data['TeamBscore'])){echo $data['TeamBscore'] ;} ?>">
          <small id="errormessage"><span id="errscoreb" class="error_msg"></span></small>
        </div>
        
        
        <?php if(isset($pos_id)){ ?>
             <input id="btnEventupdate" name = 'buttonupdate' type="submit" class="btn btn-primary change" value="Update"/>
             <?php } else {?>

            <input id="btnEventSubmit" name = 'buttonsave' type="submit" class="btn btn-primary change" value="Save"/>
            <?php }?>
      </form>
    </div>
  </div>
  <script type="text/javascript">
  function validateForm() {

    var flag = true;

    var x = document.forms["score"]["TeamA"].value;
    if (x == null || x == "" ) {
      document.getElementById("errname").innerHTML = "Please fill the TeamAName";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errname").innerHTML = ""

    var x = document.forms["score"]["ScoreA"].value;
    if(x == NULL || x = ""){
      document.getElementById("errsocre").innerHTML = "Please enter the teamA score";
      flag = false;
    }
    else
      document.getElementById("errsocre").innerHTML= ""

    var x = document.forms["score"]["TeamB"].value;
    if (x == null || x == "" ) {
      document.getElementById("errnameb").innerHTML = "Please fill the TeamBName";
      flag = false;
      //return false;
    }
    else
      document.getElementById("errnameb").innerHTML = ""

    var x = document.forms["score"]["ScoreB"].value;
    if(x == NULL || x = ""){
      document.getElementById("errsocreb").innerHTML = "Please enter the teamB score";
      flag = false;
    }
    else
      document.getElementById("errsocreb").innerHTML= ""
      return flag;
    }
      </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>