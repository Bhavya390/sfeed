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
	$q = $users->delete($pos_id,$admin_id);

}



?>
<!DOCTYPE html>
<html lang="en">
<div id="deleteform" style="display:none;">
	<?php
	$p = $data['postID'];
	echo htmlspecialchars($p);
	?>
</div>
<script>
var div = document.getElementById("deleteform");
var mydata = div.textContent;
alert(mydata+" record is being deleted");
<?php 
if($q){
	header('location:updateedit.php');
			}
			else
			{
				echo mysql_error();
			}

?>
</script>

</html>