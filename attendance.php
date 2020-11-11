<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_attendance")
	{
		save_attendance();
		exit;
	}
	if($_REQUEST[act]=="delete_attendance")
	{
		delete_attendance();
		exit;
	}
	
	###Code for save attendance#####
	function save_attendance()
	{
		global $con;
		$R=$_REQUEST;		
		/////////////////////////////////////
		$image_name = $_FILES[attendance_image][name];
		$location = $_FILES[attendance_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}				
		if($R[attendance_id])
		{
			$statement = "UPDATE `attendance` SET";
			$cond = "WHERE `attendance_id` = '$R[attendance_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `attendance` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`attendance_student_id` = '$R[attendance_student_id]',  
				`attendance_month_id` = '$R[attendance_month_id]', 
				`attendance_date` = '$R[attendance_date]',
				`attendance_intime` = '$R[attendance_intime]',
				`attendance_outtime` = '$R[attendance_outtime]',  
				`attendance_description` = '$R[attendance_description]'".
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../attendance-report.php?msg=$msg");
	}
#########Function for delete attendance##########3
function delete_attendance()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM attendance WHERE attendance_id = $_REQUEST[attendance_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../attendance-report.php?msg=Deleted Successfully.");
}
?>
