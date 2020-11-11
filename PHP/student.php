<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[student_id])
	{
		$SQL="SELECT * FROM student WHERE student_id = $_REQUEST[student_id]";
		$rs=mysqli_query($con,$SQL) or die(mysqli_error($con));
		$data=mysqli_fetch_assoc($rs);
	}
?> 
<script>
jQuery(function() {
	jQuery( "#student_dob" ).datepicker({
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
				<h4 class="heading colr"><?=$heading?>Add Student</h4>
				<?php
				if($_REQUEST['msg']) { 
				?>
				<div class="msg"><?=$_REQUEST['msg']?></div>
				<?php
				}
				?>
				<form action="lib/student.php" enctype="multipart/form-data" method="post" name="frm_student">
					<ul class="forms">
						<li class="txt">Student Name</li>
						<li class="inputfield"><input name="student_name" id="student_name" type="text" class="bar" required value="<?=$data[student_name]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Roll Number</li>
						<li class="inputfield"><input name="student_roll" id="student_roll" type="text" class="bar" required value="<?=$data[student_roll]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Gender</li>
						<li class="inputfield">
							<select name="student_gender" class="bar" required/>
								<?php echo get_new_optionlist("student_gender","gender_id","gender_title",$data[student_gender]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Course</li>
						<li class="inputfield">
							<select name="student_course" class="bar" required/>
								<?php echo get_new_optionlist("course","course_id","course_title",$data[student_course]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Year</li>
						<li class="inputfield">
							<select name="student_year" class="bar" required/>
								<?php echo get_new_optionlist("student_year","year_id","year_title",$data[student_year]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Semester</li>
						<li class="inputfield">
							<select name="student_semester" class="bar" required/>
								<?php echo get_new_optionlist("student_semester","semester_id","semester_title",$data[student_semester]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Department</li>
						<li class="inputfield">
							<select name="student_department" class="bar" required/>
								<?php echo get_new_optionlist("student_department","department_id","department_title",$data[student_department]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Email</li>
						<li class="inputfield"><input name="student_email" id="student_email" type="text" class="bar" required value="<?=$data[student_email]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Father Name</li>
						<li class="inputfield"><input name="student_father_name" id="student_father_name" type="text" class="bar" required value="<?=$data[student_father_name]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Mother Name</li>
						<li class="inputfield"><input name="student_mother_name" id="student_mother_name" type="text" class="bar" required value="<?=$data[student_mother_name]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Family Phone Number</li>
						<li class="inputfield"><input name="student_family_phone" id="student_family_phone" type="text" class="bar" required value="<?=$data[student_family_phone]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Student Phone Number</li>
						<li class="inputfield"><input name="student_phone" id="student_phone" type="text" class="bar" required value="<?=$data[student_phone]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Student Date of Birth</li>
						<li class="inputfield"><input name="student_dob" id="student_dob" type="text" class="bar" required value="<?=$data[student_dob]?>"/></li>
					</ul>
                    <ul class="forms">
						<li class="txt">City</li>
						<li class="inputfield">
							<select name="student_city" class="bar" required/>
								<?php echo get_new_optionlist("city","city_id","city_name",$data[student_city]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">State</li>
						<li class="inputfield">
							<select name="student_state" class="bar" required/>
								<?php echo get_new_optionlist("state","state_id","state_name",$data[student_state]); ?>
							</select>
						</li>
					</ul>
					<ul class="forms">
						<li class="txt">Student Address</li>
						<li class="inputfield"><input name="student_address" id="student_address" type="text" class="bar" required value="<?=$data[student_address]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Student Pin Code</li>
						<li class="inputfield"><input name="student_pincode" id="student_pincode" type="text" class="bar" required value="<?=$data[student_pincode]?>"/></li>
					</ul>
					<ul class="forms">
						<li class="txt">Image</li>
						<li class="inputfield"><input name="student_image" type="file" class="bar"/></li>
					</ul>
					<div style="clear:both"></div>
					<ul class="forms">
						<li class="txt">&nbsp;</li>
						<li class="textfield"><input type="submit" value="Submit" class="simplebtn"></li>
						<li class="textfield"><input type="reset" value="Reset" class="resetbtn"></li>
					</ul>
					<input type="hidden" name="act" value="save_student">
					<input type="hidden" name="avail_image" value="<?=$data[student_image]?>">
					<input type="hidden" name="student_id" value="<?=$data[student_id]?>">
				</form>
			</div>
		</div>
		<div class="col2">
			<?php include_once("includes/sidebar.php"); ?> 
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
