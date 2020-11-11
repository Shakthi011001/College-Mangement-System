<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[course_id])
	{
		$SQL="SELECT * FROM course WHERE course_id = $_REQUEST[course_id]";
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
				<h4 class="heading colr"><?=$heading?>Add Course</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/course.php" enctype="multipart/form-data" method="post" name="frm_course">
					<ul class="forms">
						<li class="txt">Course</li>
						<li class="inputfield"><input name="course_title" id="course_title" type="text" class="bar" required value="<?=$data[course_title]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Course Year</li>
						<li class="inputfield"><input name="course_year" id="course_year" type="text" class="bar" required value="<?=$data[course_year]?>"/></li>
					<ul class="forms">
						<li class="txt">Course Semester</li>
						<li class="inputfield"><input name="course_semester" id="course_semester" type="text" class="bar" required value="<?=$data[course_semester]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Course Fees</li>
						<li class="inputfield"><input name="course_fees" id="course_fees" type="text" class="bar" required value="<?=$data[course_fees]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Course Code</li>
						<li class="inputfield"><input name="course_code" id="course_code" type="text" class="bar" required value="<?=$data[course_code]?>"/></li>
					</ul>
					<div style="clear:both"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_course">
					<input type="hidden" name="avail_image" value="<?=$data[course_image]?>">
					<input type="hidden" name="course_id" value="<?=$data[course_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
