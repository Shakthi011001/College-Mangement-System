<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[attendance_id])
	{
		$SQL="SELECT * FROM attendance, month, student WHERE month_id = attendance_month_id AND student_id = attendance_student_id AND attendance_id = $_REQUEST[attendance_id]";
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
				<h4 class="heading colr"><?=$data[attendance]?> Attendance Details</h4>
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
							<th>Student</th>
							<td><?=$data[student_name]?></td>
						</tr>
						<tr>
							<th>Month</th>
							<td><?=$data[month_title]?></td>
						</tr>
						<tr>
							<th>Date</th>
							<td><?=$data[attendance_date]?></td>
						</tr>
						<tr>
							<th>Attendance In Time</th>
							<td><?=$data[attendance_intime]?></td>
						</tr>
						<tr>
							<th>Attendance Out Time</th>
							<td><?=$data[attendance_outtime]?></td>
						</tr>
						<tr>
							<th>Description</th>
							<td><?=$data[attendance_description]?></td>
						</tr>
					
					</table>
			</div>
			</div>
		</div>
		<div class="col2">
			<h4 class="heading colr">Attendance <?=$data['attendance_id']?></h4>
			<div><img src="<?=$SERVER_PATH.'uploads/'.$data[attendance_image]?>" style="width: 250px"></div><br>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
