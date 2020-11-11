<?php 
	include_once("includes/header.php"); 
	if($_REQUEST[student_id])
	{
		$SQL="SELECT * FROM student, student_semester, student_gender, city, course, student_department, student_year WHERE student_gender = gender_id AND student_course = course_id AND student_department = department_id AND student_year = year_id AND student_semester = semester_id AND student_city = city_id AND student_id = $_REQUEST[student_id]";
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
				<h4 class="heading colr"><?=$data[student_name]?> Student Details</h4>
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
							<th>Student Name</th>
							<td><?=$data[student_name]?></td>
						</tr>
						<tr>
							<th>Student Gender</th>
							<td><?=$data[gender_title]?></td>
						</tr>
						<tr>
							<th>Course</th>
							<td><?=$data[course_title]?></td>
						</tr>
						<tr>
							<th>Department</th>
							<td><?=$data[department_title]?></td>
						</tr>
						<tr>
							<th>Year</th>
							<td><?=$data[year_title]?></td>
						</tr>
						<tr>
						<tr>
							<th>Semester</th>
							<td><?=$data[semester_title]?></td>
						</tr>
						<tr>	
							<th>Roll Number</th>
							<td><?=$data[student_roll]?></td>
						</tr>
						<tr>
							<th>Student Email</th>
							<td><?=$data[student_email]?></td>
						</tr>
						<tr>
							<th>Phone</th>
							<td><?=$data[student_phone]?></td>
						</tr>
						<tr>
							<th>City</th>
							<td><?=$data[city_name]?></td>
						</tr>
					
					</table>
			</div>
			</div>
		</div>
		<div class="col2">
			<h4 class="heading colr">Student <?=$data['student_name']?></h4>
			<div><img src="<?=$SERVER_PATH.'uploads/'.$data[student_image]?>" style="width: 250px"></div><br>
		</div>
	</div>
<?php include_once("includes/footer.php"); ?> 
