<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM `attendance`, `month`, `student` WHERE student_id = attendance_student_id And month_id = attendance_month_id";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
function delete_attendance(attendance_id)
{
	if(confirm("Do you want to delete the attendance?"))
	{
		this.document.frm_attendance.attendance_id.value=attendance_id;
		this.document.frm_attendance.act.value="delete_attendance";
		this.document.frm_attendance.submit();
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
			<h4 class="heading colr">Attendance Report</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_attendance" action="lib/attendance.php" method="post">
				<div class="static">
				<table class="table table-striped table-advance table-hover"  id="mydatatable" style="color:#000000">
					<thead>
						<tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Student</td>
						<td scope="col">Attendance Month</td>
						<td scope="col">Attendance Date</td>
						<td scope="col">Attendance In Time</td>
						<td scope="col">Attendance Out Time </td>
						<td scope="col">Attendance Description</td>								
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
						<td><?=$data[attendance_id]?></td>
						<td><?=$data[student_name]?></td>
						<td><?=$data[month_title]?></td>
						<td><?=$data[attendance_date]?></td>
						<td><?=$data[attendance_intime]?></td>
						<td><?=$data[attendance_outtime]?></td>
						<td><?=$data[attendance_description]?></td>
						<td style="text-align:center">
							<a href="attendance.php?attendance_id=<?php echo $data[attendance_id] ?>">Edit</a> | <a href="Javascript:delete_attendance(<?=$data[attendance_id]?>)">Delete</a> 
						</td>
						</td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="attendance_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
