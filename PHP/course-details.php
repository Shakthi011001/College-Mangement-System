<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[course_id])
	{
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 

	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr"><?=$data[course_title]?> Course Details</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<div id="myrow">
					
				<table>
		
						<tr>
							<th>Course Name</th>
							<td><?=$data[course_title]?></td>
						</tr>
						<tr>
							<th>Course Year</th>
							<td><?=$data[course_year]?></td>
						</tr>
						<tr>
							<th>Course Semester</th>
							<td><?=$data[course_semester]?></td>
						</tr>
						<tr>
							<th>Course Fees</th>
							<td><?=$data[course_fees]?></td>
						</tr>
						<tr>
							<th>Course Code</th>
							<td><?=$data[course_code]?></td>
						</tr>
					
					</table>
			</div>
			</div>
		</div>
		<div class="col2">
			<h4 class="heading colr">Course <?=$data['course_title']?></h4>
			<div><img src="<?=$SERVER_PATH.'uploads/'.$data[course_image]?>" style="width: 250px"></div><br>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
