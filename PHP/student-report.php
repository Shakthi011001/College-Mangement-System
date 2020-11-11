<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `student`, `student_gender`, `student_semester`, `course`, `student_department`, `student_year` WHERE student_semester = semester_id And student_gender = gender_id AND student_course = course_id AND student_department = department_id AND student_year = year_id";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
function delete_student(student_id)
{
	if(confirm("Do you want to delete the student?"))
	{
		this.document.frm_student.student_id.value=student_id;
		this.document.frm_student.act.value="delete_student";
		this.document.frm_student.submit();
	}
}
jQuery(document).ready(function() {
	jQuery('#mydatatable').DataTable();
});
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1" style="width:100%">
		<div class="contact">
			<h4 class="heading colr">Student Report</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_student" action="lib/student.php" method="post">
				<div class="static">
				<table class="table table-striped table-advance table-hover"  id="mydatatable" style="color:#000000">
					<thead>
						<tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Image</td>
						<td scope="col">Student Name</td>
						<td scope="col">Student Gender</td>
						<td scope="col">Student Roll Number</td>
						<td scope="col">Student Course</td>
						<td scope="col">Student Year</td>
						<td scope="col">Student Semester</td>
						<td scope="col">Student Department</td>
						<td scope="col">Email</td>								
						<td scope="col">Action</td>
						</tr>
					</thead>
					<tbody>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td><?=$data[student_id]?></td>
						<td>
						<a href="student-details.php?student_id=<?php echo $data[student_id] ?>"><img src="<?=$SERVER_PATH.'uploads/'.$data[student_image]?>" style="heigh:50px; width:50px"></a></td>
						<td><?=$data[student_name]?></td>
						<td><?=$data[gender_title]?></td>
						<td><?=$data[student_roll]?></td>
						<td><?=$data[course_title]?></td>
						<td><?=$data[year_title]?></td>
						<td><?=$data[semester_title]?></td>
						<td><?=$data[department_title]?></td>
						<td><?=$data[student_email]?></td>
						<td style="text-align:center">
							<a href="student.php?student_id=<?php echo $data[student_id] ?>">Edit</a> | <a href="Javascript:delete_student(<?=$data[student_id]?>)">Delete</a> 
						</td>
						</td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="student_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
