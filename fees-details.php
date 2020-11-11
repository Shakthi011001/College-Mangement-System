<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[fees_id])
	{
		$SQL="SELECT * FROM fees, month, student WHERE month_id = fees_month_id AND student_id = fees_student_id AND fees_id = $_REQUEST[fees_id]";
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
				<h4 class="heading colr"><?=$data[fees]?> Fees Details</h4>
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
							<th>Fees Amount</th>
							<td><?=$data[fees_amount]?></td>
						</tr>
						<tr>
							<th>Month</th>
							<td><?=$data[month_title]?></td>
						</tr>
						<tr>
							<th>Date</th>
							<td><?=$data[fees_date]?></td>
						</tr>
						<tr>
							<th>Description</th>
							<td><?=$data[fees_description]?></td>
						</tr>
					
					</table>
			</div>
			</div>
		</div>
		<div class="col2">
			<h4 class="heading colr">Fees <?=$data['fees_id']?></h4>
			<div><img src="<?=$SERVER_PATH.'uploads/'.$data[fees_image]?>" style="width: 250px"></div><br>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
