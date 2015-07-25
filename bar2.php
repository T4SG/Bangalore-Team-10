<?php
echo "hello ";
$con=mysql_connect("localhost","root","") or die("Failed to connect with database!!!!");
mysql_select_db("Pratham-Team10", $con); 
$sth = mysql_query("SELECT *from Performance p,student s where p.id=s.id");
$rows = array();
$flag = true;
$table = array();
$table['cols'] = array(

    array('label' => 'test1', 'type' => 'number'),
    array('label' => 'test2', 'type' => 'number'),
    array('label' => 'final', 'type' => 'number'),
	array('label' => 'vocal', 'type' => 'number')
);
$rows=array();
while($r=mysql_fetch_assoc($sth)){
	$temp = array();
    $temp[] = array('v' => (int) $r['test1']); 
    $temp[] = array('v' => (int) $r['test2']); 
    $temp[] = array('v' => (int) $r['final']); 
    $temp[] = array('v' => (int) $r['vocal']); 
    $rows[] = array('c' => $temp);
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);
?>
<html>
  <head>
   
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">
     google.load('visualization', '1', {'packages':['corechart']});
 google.setOnLoadCallback(drawChart);

    function drawChart() {
		var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
           title: 'My Performance',
          is3D: 'true',
          width: 400,
          height: 300
        }
		 
		;
		var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>
</head>


  <body>
    
    <div id="chart_div"></div>
  </body>
</html>
