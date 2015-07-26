<!DOCTYPE html>
<html lang="en">
  <head>

  </head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <body>
   <?php
     $con=mysql_connect("localhost","root","code4good") or die("Failed to connect with database!!!!");
     $s=mysql_select_db("Pratham-Team10", $con);
	 if($s=0){echo "true";} else {echo "false";}
	 //$sid=$_post['id'];
	 $query="select * from student where id=1";
	 $result=mysql_query($query);	
	 
	 ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pratham Org .</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Alumni Network</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <!-- <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li> -->
            <li class="active"><a href="http://ec2-54-169-72-135.ap-southeast-1.compute.amazonaws.com/studentprofile.php"> Reports</a></li>
            <li><a href="http://ec2-54-169-72-135.ap-southeast-1.compute.amazonaws.com/line2.php"> performance Analytics</a></li>
            <li><a href="http://ec2-54-169-72-135.ap-southeast-1.compute.amazonaws.com/bar2.php">Working Analysis</a></li>
          </ul>
          
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Profile</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>

          <h2 class="sub-header">Data</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th>Student Id</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>fees</th>
                </tr>
				
              </thead>
              <tbody>
                <tr>
				
				  <td>1</td>
				  
				 <td>ramesh </td>
				 <td>waiter </td>
				 <td>5000 </td>
				  
				 </tr>
				 <tr>
				 <td>2</td>
				  
				 <td>suresh</td>
				 <td>Driver</td>
				 <td>6000</td>
				 </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  
  </body>
</html>
