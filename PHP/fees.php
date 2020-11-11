<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[fees_id])
	{
		$SQL="SELECT * FROM fees WHERE fees_id = $_REQUEST[fees_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 
<script>
jQuery(function() {
	jQuery( "#fees_date" ).datepicker({
	  changeMonth: true,
	  changeYear: true,
	   yearRange: "-25:-10",
	   dateFormat: 'd MM,yy'
	});
});
</script>
	<div class="crumb">
    </div>
    <div class="clear"></div>
	<div id="content_sec">
		<div class="col1">
			<div class="contact">
				<h4 class="heading colr"><?=$heading?>Add Fees</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/fees.php" enctype="multipart/form-data" method="post" name="frm_fees">
					<ul class="forms">
						<li class="txt">Select Student</li>
						<li class="inputfield">
							<select name="fees_student_id" class="bar" required/>
								<?php echo get_new_optionlist("student","student_id","student_name",$data[fees_student_id]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Fees Amount</li>
						<li class="inputfield"><input name="fees_amount" id="fees_amount" type="text" class="bar" required value="<?=$data[fees_amount]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Fees Months</li>
						<li class="inputfield">
							<select name="fees_month_id" class="bar" required/>
								<?php echo get_new_optionlist("month","month_id","month_title",$data[fees_month_id]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Fees Date</li>
						<li class="inputfield"><input name="fees_date" id="fees_date" type="text" class="bar" required value="<?=$data[fees_date]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Fees Description</li>
						<li class="textfield"><textarea name="fees_description" cols="" rows="4" required style="width:300px; height:70px"><?=$data[fees_description]?></textarea></li>
					</ul>
					<div style="clear:both"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_fees">
					<input type="hidden" name="avail_image" value="<?=$data[fees_image]?>">
					<input type="hidden" name="fees_id" value="<?=$data[fees_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
