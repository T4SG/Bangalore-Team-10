<?php
 $con=mysql_connect("localhost","root","code4good")or die("Error1");
 $s=mysql_select_db("Pratham-Team10")or die("Error2");
 $p1=$_POST["t1"];
 $p2=$_POST["t2"];
 $p3=$_POST["t3"];
 $p4=$_POST["t4"];
 $p5=$_POST["t5"];
 $p6=$_POST["t6"];
$p7=$_POST["t7"];
 $sql=mysql_query("insert into Rating(id,stu_name,date,employer,performance,wel_being,satisfaction) values('$p1','$p2','$p3','$p4','$p5','$p6','$p7');")or die("Error detected");
 echo "1 RECORD CREATED";
 mysql_close($con);

 $time = time();
 while(time()<$time+10);


$query = "select mentor,phone_no from student,Employee where name=mentor";
$result = $conn->query($sql);
if ($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$mentor = $row['mentor'];
	$phone = $row['phone_no'];
}

 //send sms code here
?>
 