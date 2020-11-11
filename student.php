<?php
	include_once("../includes/db_connect.php");
	include_once("../includes/functions.php");
	if($_REQUEST[act]=="save_student")
	{
		save_student();
		exit;
	}
	if($_REQUEST[act]=="delete_student")
	{
		delete_student();
		exit;
	}
	
	###Code for save student#####
	function save_student()
	{
		global $con;
		$R=$_REQUEST;		
		/////////////////////////////////////
		$image_name = $_FILES[student_image][name];
		$location = $_FILES[student_image][tmp_name];
		if($image_name!="")
		{
			move_uploaded_file($location,"../uploads/".$image_name);
		}
		else
		{
			$image_name = $R[avail_image];
		}				
		if($R[student_id])
		{
			$statement = "UPDATE `student` SET";
			$cond = "WHERE `student_id` = '$R[student_id]'";
			$msg = "Data Updated Successfully.";
		}
		else
		{
			$statement = "INSERT INTO `student` SET";
			$cond = "";
			$msg="Data saved successfully.";
		}
		$SQL=   $statement." 
				`student_name` = '$R[student_name]',
				`student_gender` = '$R[student_gender]',
				`student_course` = '$R[student_course]', 
				`student_year` = '$R[student_year]', 
				`student_semester` = '$R[student_semester]', 
				`student_department` = '$R[student_department]', 
				`student_roll` = '$R[student_roll]', 
				`student_email` = '$R[student_email]',
				`student_phone` = '$R[student_phone]',
				`student_father_name` = '$R[student_father_name]',
				`student_mother_name` = '$R[student_mother_name]',
				`student_family_phone` = '$R[student_family_phone]', 
				`student_image` = '$image_name',
				`student_pincode` = '$R[student_pincode]', 
				`student_address` = '$R[student_address]',
				`student_dob` = '$R[student_dob]', 
				`student_city` = '$R[student_city]', 
				`student_state` = '$R[student_state]'".
				 $cond;
		$rs = mysqli_query($con,$SQL) or die(mysqli_error($con));
		header("Location:../student-report.php?msg=$msg");
	}
#########Function for delete student##########3
function delete_student()
{	
	global $con;
	/////////Delete the record//////////
	$SQL="DELETE FROM student WHERE student_id = $_REQUEST[student_id]";
	mysqli_query($con,$SQL) or die(mysqli_error($con));
	header("Location:../student-report.php?msg=Deleted Successfully.");
}
?>
