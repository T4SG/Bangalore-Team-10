<?php

$name = $_GET['name'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$query = "select * from student where name='$name'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$name = $row['name'];
	$phone_no = $row['phone_no'];
	$DOR =  $row['DOR'];
	$DOC =  $row['DOC'];
	$DOB =  $row['DOB'];
	$center = $row['center'];
	$certified = $row['certified'];
	$mentor = $row['mentor'];
	$fees = $row['fees'];
	$performance= $row['performance'];
}

$query = "select * from performance where id='id'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$course = $row['course'];
	$test1 = $row['test1'];
	$test2 =  $row['test2'];
	$final =  $row['final'];
	$vocal = $row['vocal'];

$jobs=array();
$query = "select * from rating where stu_name='$name'";
if ($result->num_rows > 0){
	$i=0;
	while($row = $result->fetch_assoc())
	{
		$jobs[i] = array("date"=>$row['date'], "employer"=>$row['employer'], "performance"=>$row['performance'],"well_being"=>$row['well_being'],"satisfaction"=>row['satisfaction']);
	}
}



$conn->close();



?>
