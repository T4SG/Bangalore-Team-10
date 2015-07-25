 <?php
$con=mysql_connect("localhost","root","code4good") or die("Failed to connect with database!!!!");
mysql_select_db("Pratham_Team10", $con); 
$sth = mysql_query("SELECT * FROM Rating");
$rows = array();
$flag = true;
$table = array();
$table['cols'] = array(

    array('label' => 'wellbeing', 'type' => 'number'),
    array('label' => 'performance', 'type' => 'number'),
	 array('label' => 'satisfaction', 'type' => 'number')

);
$rows=array();
while($r=mysql_fetch_assoc($sth)){
	$temp = array();
    $temp[] = array('v' => (int) $r['performance']); 
    $temp[] = array('v' => (int) $r['well_being']); 
    $temp[] = array('v' => (int) $r['satisfaction']); 
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
           title: 'My Profile',
          is3D: 'true',
          width: 400,
          height: 300
        };
		var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>
</head>


  <body>
    
    <div id="chart_div"></div>
  </body>
</html>

	
	
	
	
