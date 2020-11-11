<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
	$SQL="SELECT * FROM course";
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>
<script>
function delete_course(course_id)
{
	if(confirm("Do you want to delete the course?"))
	{
		this.document.frm_course.course_id.value=course_id;
		this.document.frm_course.act.value="delete_course";
		this.document.frm_course.submit();
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
			<h4 class="heading colr">Course Report</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_course" action="lib/course.php" method="post">
				<div class="static">
				<table class="table table-striped table-advance table-hover"  id="mydatatable" style="color:#000000">
					<thead>
						<tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Course Name</td>
						<td scope="col">Course Year</td>
						<td scope="col">Course Semester</td>
						<td scope="col">Course Fees</td>
						<td scope="col">Course Code</td>								
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
						<td><?=$data[course_id]?></td>
						<td><?=$data[course_title]?></td>
						<td><?=$data[course_year]?></td>
						<td><?=$data[course_semester]?></td>
						<td><?=$data[course_fees]?></td>
						<td><?=$data[course_code]?></td>
						<td style="text-align:center">
							<a href="course.php?course_id=<?php echo $data[course_id] ?>">Edit</a> | <a href="Javascript:delete_course(<?=$data[course_id]?>)">Delete</a> 
						</td>
						</td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="course_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
