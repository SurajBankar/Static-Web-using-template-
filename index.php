<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
<?php
include "./Links/headerLink.php";
?>
</head>
<body>
    <div id="wrapper">
    <?php
include "./common components/leftNavbar.php";
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>KrishnaSagar Dashboard</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <?php
include 'my js/connection.php';
$data=mysqli_query($con,"SELECT * FROM `employee_data`");
$row=mysqli_num_rows($data);
$total=0;
$paid=0;
$remaining=0;
while($row=mysqli_fetch_array($data))
{
    $total=$total+1;
    $a=$row['payment'];
    if($a==0){
        $remaining=$remaining+1; 
    }
    else
    {
        $paid=$paid+1;
    }
}
?>
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-primary set-icon">
                <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $total  ?></p><br>
                    <p class="text-muted"><a href="employee.php" class="btn btn-lg btn-primary">Total Employees</a></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-success set-icon">
                <i class="fa fa-check-circle" aria-hidden="true"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $paid  ?></p><br>
                    <p class="text-muted"><a href="records.php" class="btn btn-lg btn-success">Paid Employees</a></p>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-danger set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo $remaining  ?></p><br>
                    <p class="text-muted"><a href="salary.php" class="btn btn-lg btn-warning">Remaining Employees</a></p>
                </div>
             </div>
		     </div>
                   
			</div>
                 <!-- /. ROW  -->
                <hr />                
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <?php
include "./Links/footerLinks.php";

?>
    
   
</body>
</html>
