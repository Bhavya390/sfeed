
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
    <title>ViewScoreBoard</title>
     
    <link rel="stylesheet" href="css/bootstrap.css?v=1.0001"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet"/>

    <script src="js/jquery.all.js" type="text/javascript"></script>
    <script src="js/spt.all.js?v=1.0001" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
           
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

    <div class="container breadcrumbs_nav">
        <div class="row">
            <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12">
                <a href="#" class="pull-right"><span class="glyphicon glyphicon-circle-arrow-right">
                    </span>   <?php echo $username ;?>
                </a>
            </div>
        </div>
    </div>
                
        







<div class="container containerbox">
    <div class="row">
        <div class="section_cover">
                <div class="col-sm-2 col-md-2 col-xs-12 heading">
                    <h4>
                           <span class="glyphicon glyphicon-list"></span>
                            Scoreboard
                    </h4>
                </div>

                  <div id="divmsg" style="display: none;" class="col-sm-7 col-md-5 col-xs-12 col-md-offset-2 hidden-xs">
                    <p class="text-success">
                        <img src="images/successmsg.png"  />Scoredetails Was successfully created</p>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6 pull-right create_task text-right" id="createClass" >
                    <a href="scoreboard.php">Add a New ScoreDetails</a>
                </div>
            </div>
        
    </div>
    
   
    <div class="row tab-content" id="myTabContent">
        <div id="home" class="tab-pane fade in active">
            <div id="no-more-tables">
                <table class="table table-striped tab-text">
                         <thead>
                         <tr class="list-header" style="background:#E88923">
                              <th>TeamA</th>
                              <th>ScoreA</th>
                              <th>TeamB</th>
                              <th>ScoreB</th>
                              <th>Action</th>
                        </tr>
                    </thead>
                        <tbody id="divClassListing">

                            <?php
                           
                                $data = $users->scoreshow($admin_id);
                                foreach($data as $reach)
                                {
                            ?>
                            <tr>
                                <td data-title="teama">&nbsp;<?php echo $reach['TeamAname'];?></td>
                                <td data-title="scorea">&nbsp;<?php echo $reach['TeamAscore'] ;?></td>
                                <td data-title="teamb">&nbsp;<?php echo $reach['TeamBname'];?></td>
                                <td data-title="scoreb">&nbsp;<?php echo $reach['TeamBscore'];?></td>
                                
                                
                                <td data-title="Action">
                                    
                                    <?php echo"<a href='scoreboard.php?id=".$reach['score_id']."' class='edit' id='11'> edit</a>";?>
                                    <?php echo"<a href='deletescore.php?id=".$reach['score_id']."' class='delete' id='11'> delete</a>";?>
                                    
                                </td>
                            </tr>
                            <?php  }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div id="divClassGridPager" class="col-sm-12 col-md-12 col-xs-12 pagi"></div>
     <input type="hidden" id="hdnFormMode"/>
    <input type="hidden" value="True" id="hdnIsAcademicYearSet" />
</div>

<script language="javascript" type="text/javascript">

    $.getScript("/js/view.class.js?v=1.0001", function () {
        new spt.viewclass();
    });
   

</script>


</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        
        $("#UserName").click(function () {
            $('#userNamedialogBox').slideToggle("fast");
        });
        
        $("#page_logout").click(function () {
            $.ajax({
                type: 'POST',
                url: "/Home/Signout",
                data: {},
                success: function (data) {
                    window.location.href = "/login";
                }
            });
        });
    });

    var currenturl = window.location.href;
    $(".top_navigation li").removeClass();
    $(".top_navigation li a").each(function () {

        if (currenturl.indexOf($(this).attr("href")) != -1) {
            $(this).parent().removeClass().addClass("active");
            return false;
        }
    });

    var bodyTag = $("body");
    bodyTag.on("click", "#full_screen", function () {

        var el = $("#full-screen-content");
        if (el.attr('data-value') == 'small') {
            el.removeClass('container');
            el.addClass('container-fluid');
            el.attr('data-value', 'big');
            el.attr('data-original-title', 'FullScreen');

        }

        else if (el.attr('data-value') == 'big') {
            el.addClass('container');
            el.removeClass('container-fluid');
            el.attr('data-value', 'small');
            el.attr("data-original-title", "FullScreen");
        }
    });

    //bodyTag.find("[data-toggle='tooltip']").tooltip();

    
    
</script>


