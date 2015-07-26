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
 $p8=$_POST["t8"];
 $p9=$_POST["t9"];
 $p10=$_POST["t10"];
$p10=$_POST["t11"];
 $sql=mysql_query("insert into Student(name,phone_no,DOR,DOC,DOB,center,certified,mentor,fees,performance,id) values('$p1','$p2','$p3','$p4','$p5','$p6','$p7','$p8','$p9','$p10','$p11');")or die("Error detected");
 echo "1 RECORD CREATED";
 mysql_close($con);
echo"hello";
?>
 