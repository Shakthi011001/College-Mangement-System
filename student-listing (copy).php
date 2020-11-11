<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `student`, `course`, `student_year`, `student_semester`, `student_department` WHERE student_course = course_id AND student_year = year_id AND student_department = department_id AND student_semester = semester_id";
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
			<h4 class="heading colr">All Students</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_student" action="lib/student.php" method="post">
				<div class="static">
				
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					<div style="float:left; border:1px solid; margin:8px; padding:8px">
						<a href="student-details.php?student_id=<?php echo $data[student_id] ?>">
							<img src="<?=$SERVER_PATH.'uploads/'.$data[student_image]?>" style="height:180px; width:150px">
						</a><br>
						<div style="text-align:center; border-top:2px solid; padding: 5px 0px; font-weight:bold; font-size:14px;"><?=$data[student_name]?></div>
					</div>
					<?php } ?>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="student_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
