


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ViewForm</title>
     
    <link rel="stylesheet" href="css/bootstrap.css?v=1.0001"/>
    <link rel="stylesheet" href="css/custom.css?v=1.0001"/>
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet"/>

    <script src="js/jquery.all.js" type="text/javascript"></script>
    <script src="js/spt.all.js?v=1.0001" type="text/javascript"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(function(){
        $("#re").hide();
        //alert("r");
        $('#del').click(function(){
           // alert("wanna delete");
           $('#del').hide();
            $('#re').show();


           
        });
        $('#re #cancle').click(function(){
           // alert("wanna delete");
           $('#del').show();
            $('#re').hide();


           
        });
        
    })

    </script>
           
</head>
<body>

 

    

<header>
  <div class="navbar navbar-inverse" role="navigation">
    
                    <button class="pull-right">
                    <a href="#" class="btn btn-default btn-sm">Log out</a>
                    </button>
                  </div>
               
              
              
</header>
    <div class="container breadcrumbs_nav">
        <div class="row">
            <div class="col-md-3 col-md-offset-9 col-sm-12 col-xs-12">
                <a href="#" class="pull-right"><span class="glyphicon glyphicon-circle-arrow-right">
                    </span>   dav
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
                            MemberDetails
                    </h4>
                </div>

                 

                <div class="col-md-3 col-sm-3 col-xs-6 pull-right create_task text-right" id="createClass" >
                    <a href="javascript:void(0)">Add A New Member</a>
                </div>
            </div>
        
    </div>
   
    <!--tab Nav-->
   
    <div class="row tab-content" id="myTabContent">
        <div id="home" class="tab-pane fade in active">
            <div id="no-more-tables">
                <table class="table table-striped tab-text">
                         <thead>
                         <tr class="list-header">
                              <th>Class Name</th>
                              <th>Class Teacher</th>
                              <th>Class Monitor</th>
                              <th>Total Students</th>
                              <th>Action</th>
                        </tr>
                    </thead>
                        <tbody id="divClassListing">
                            <tr>
                                <td data-title="Class Name">&nbsp;Ninth B</td>
                                <td data-title="Class Teacher">&nbsp;</td>
                                <td data-title="Class Monitor">&nbsp;</td>

                                <td data-title="Action">
                                    <a href="javascript:void(0)" class="edit" id="11">edit</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="assignroll" id="11">Assign Roll No</a>
                                    &nbsp;&nbsp;&nbsp;
                                     <a href="javascript:void(0)" class="assignroll" name ="del" id="del">delete</a>
                                  <p id ="re">Do you really want to <strong>delete ?</strong>... <a href="javascript:void(0)" class="assignroll" id="11">Delete</a>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" class="assignroll" id="cancle" name="cancle">Cancle</a></p>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Class Name">&nbsp;Seventh A</td>
                                <td data-title="Class Teacher">&nbsp;Nidhi  Sharma</td>
                                <td data-title="Class Monitor">&nbsp;</td>
                                <td data-title="Total Students">
                                    <a href="javascript:void(0)" id="10"><strong>1</strong></a>
                                </td>
                                <td data-title="Action">
                                    <a href="javascript:void(0)" class="edit" id="10">edit</a> &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="assignroll" id="10">Assign Roll No</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="delete" id="10">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Class Name">&nbsp;Second </td>
                                <td data-title="Class Teacher">&nbsp;faheem Ahmmad</td>
                                <td data-title="Class Monitor">&nbsp;Rahul </td>
                                <td data-title="Total Students">
                                    <a href="javascript:void(0)" id="4"><strong>1</strong></a>
                                </td>
                                <td data-title="Action">
                                    <a href="javascript:void(0)" class="edit" id="4">edit</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="assignroll" id="4">Assign Roll No</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="delete" id="4">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td data-title="Class Name">&nbsp;First A</td>
                                <td data-title="Class Teacher">&nbsp;davadmin davadmin</td>
                                <td data-title="Class Monitor">&nbsp;Abhishek Kumar</td>
                                <td data-title="Total Students">
                                    <a href="javascript:void(0)" id="1"><strong>1</strong></a>
                                    
                                </td>
                                <td data-title="Action">
                                    <a href="javascript:void(0)" class="edit" id="1">edit</a> &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="assignroll" id="1">Assign Roll No</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0)" class="delete" id="1">Delete</a>
                                </td>
                            </tr>
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


