<?php 
	include_once("includes/header.php"); 
	include_once("includes/db_connect.php"); 
    $SQL="SELECT * FROM `fees`, `month`, `student` WHERE student_id = fees_student_id AND month_id = fees_month_id";
    if($_REQUEST[student_id])
	{
		$SQL="SELECT * FROM `fees`, `month`, `student` WHERE student_id = fees_student_id AND month_id = fees_month_id AND student_id = $_REQUEST[student_id]";
	}
	$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
?>	

<script>
function delete_fees(fees_id)
{
	if(confirm("Do you want to delete the fees?"))
	{
		this.document.frm_fees.fees_id.value=fees_id;
		this.document.frm_fees.act.value="delete_fees";
		this.document.frm_fees.submit();
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
			<h4 class="heading colr">Fees</h4>
			<?php
			if($_REQUEST['msg']) { 
			?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
			<?php
			}
			?>
			<form name="frm_fees" action="lib/fees.php" method="post">
				<div class="static">
				<table class="table table-striped table-advance table-hover"  id="mydatatable" style="color:#000000">
					<thead>
						<tr class="tablehead bold">
						<td scope="col">ID</td>
						<td scope="col">Student</td>	
						<td scope="col">Fees Amount</td>
						<td scope="col">Fees Month</td>
						<td scope="col">Fees Date</td>
						<td scope="col">Description</td>							
						</tr>
					</thead>
					<tbody>
					<?php 
					$sr_no=1;
					while($data = mysqli_fetch_assoc($rs))
					{
					?>
					  <tr>
						<td><?=$data[fees_id]?></td>
						<td><?=$data[student_name]?></td>
						<td><?=$data[fees_amount]?></td>
						<td><?=$data[month_title]?></td>
						<td><?=$data[fees_date]?></td>
						<td><?=$data[fees_description]?></td>
					  </tr>
					<?php } ?>
					</tbody>
					</table>
				</div>
				<input type="hidden" name="act" />
				<input type="hidden" name="fees_id" />
			</form>
		</div>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?>
