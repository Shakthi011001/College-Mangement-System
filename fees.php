<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_fees")
	{
		save_fees();
		exit;
	}
	if($_REQUEST[act]=="delete_fees")
	{
		delete_fees();
		exit;
	}
	
	###Code for save fees#####
	function save_fees()
	{
		global $con;
		$R=$_REQUEST;		
		/////////////////////////////////////
		$image_name = $_FILES[fees_image][name];
		$location = $_FILES[fees_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}				
		if($R[fees_id])
		{
			$statement = "UPDATE `fees` SET";
			$cond = "WHERE `fees_id` = '$R[fees_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `fees` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`fees_student_id` = '$R[fees_student_id]', 
				`fees_amount` = '$R[fees_amount]', 
				`fees_month_id` = '$R[fees_month_id]', 
				`fees_date` = '$R[fees_date]',  
				`fees_description` = '$R[fees_description]'".
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../fees-report.php?msg=$msg");
	}
#########Function for delete fees##########3
function delete_fees()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM fees WHERE fees_id = $_REQUEST[fees_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../fees-report.php?msg=Deleted Successfully.");
}
?>
