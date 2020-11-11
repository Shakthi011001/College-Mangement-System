<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `student`, `city`, `course`, `student_year` WHERE student_course = course_id AND student_year = year_id AND student_city = city_id";
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
					<table>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					<tr>
						<td><a href="student-details.php?student_id=<?php echo $data[student_id] ?>"><img src="<?=$SERVER_PATH.'uploads/'.$data[student_image]?>" style="height:170px; width:150px"></a></td>
						<td style="vertical-align:top">
							<table border="0">
								<tr>
									<td class="tdheading">Name</th>
									<td><?=$data[student_name]?></td>
								</tr>
								<tr>
									<td class="tdheading">Student Course</th>
									<td><?=$data[course_title]?></td>
								</tr>
								<tr>
									<td class="tdheading">Course Year</th>
									<td><?=$data[student_phone]?></td>
								</tr>
								<tr>
									<td class="tdheading">City</th>
									<td><?=$data[city_name]?></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align:center; padding:12px;">
										<a href="student-details.php?student_id=<?php echo $data[student_id] ?>" class="button-link">View Details</a>
										<a href="fees-listing.php?student_id=<?php echo $data[student_id] ?>" class="button-link">View Fees</a>
										<a href="attendance-listing.php?student_id=<?php echo $data[student_id] ?>" class="button-link">View Attendance</a>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<?php } ?>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="student_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
