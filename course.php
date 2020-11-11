<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_course")
	{
		save_course();
		exit;
	}
	if($_REQUEST[act]=="delete_course")
	{
		delete_course();
		exit;
	}
	
	###Code for save course#####
	function save_course()
	{
		global $con;
		$R=$_REQUEST;		
		/////////////////////////////////////
		$image_name = $_FILES[course_image][name];
		$location = $_FILES[course_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}				
		if($R[course_id])
		{
			$statement = "UPDATE `course` SET";
			$cond = "WHERE `course_id` = '$R[course_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `course` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`course_title` = '$R[course_title]', 
				`course_year` = '$R[course_year]', 
				`course_semester` = '$R[course_semester]', 
				`course_fees` = '$R[course_fees]',  
				`course_code` = '$R[course_code]'".
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../course-report.php?msg=$msg");
	}
#########Function for delete course##########3
function delete_course()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM course WHERE course_id = $_REQUEST[course_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../course-report.php?msg=Deleted Successfully.");
}
?>
