<?php
	
	session_start();
	include("./includes/constants.php");

	$baseurl=BASE_URL;
	$localpath=LOCALPATH;
	$templatepath="{$localpath}/template";

	if(!isset($_GET['sport']))
	{
		$_GET['sport']='Football';
	}

	$sport=$_GET['sport'];

	switch($sport)
	{
		case 'Football':
			include("./includes/Football.homecontent.php");
			break;
		case 'Cricket':
			include("./includes/Cricket.homecontent.php");
			break;
		case 'Badminton':
			include("./includes/Badminton.homecontent.php");
			break;
		case 'Athletics':
			include("./includes/Athletics.homecontent.php");
			break;
		case 'Indoor':
			include("./includes/Indoor.homecontent.php");
			break;
		default:
			$flag404=TRUE;
			break;
	}

	if(!isset($flag404))
	{
		require_once("../$templatepath/squad.php");
	}
	else
	{
		
	}
	


?>