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
       
<hr>           
            <div class="row">
            <div class="col-md-6">

                                    <h3 class="center1">VIEW</h3>
                                    <?php
                                    if(isset($_POST['view']))
                                    {
include 'my js/connection.php';
$id=$_POST['view'];
$data=mysqli_query($con,"SELECT * FROM `employee_data` WHERE `eid`=$id");
$row=mysqli_num_rows($data);
while($row=mysqli_fetch_array($data))
{



                                        ?>


                                    <form action="#" method="post">
                                    <div class="form-group">
                                            <label>ID</label>
                                            <input  value="<?php echo $row['eid']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Employee Catagory</label>
                                            <input  value="<?php echo $row['category']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input  value="<?php echo $row['name']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Employee IMG</label>
                                            <img src="<?php echo $row['img']  ?>" alt="error" srcset="">               
                                        </div>
                                        <div class="form-group">
                                            <label>Employee UID</label>
                                            <input  value="<?php echo $row['uid']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input  value="<?php echo $row['city']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input  value="<?php echo $row['salary']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Present days</label>
                                            <input  value="<?php echo $row['presentDays']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Payment</label>
                                            <input  value="<?php echo $row['payment']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="align-center">
                                        <a href="employee.php" class="btn btn-primary">back to Employee</a>
                                        </div>
                                    </form>  
                                    <?php
}
                                    }
                                    ?>
    </div>
      
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
          
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <?php
include "./Links/footerLinks.php";

?>
    
   
</body>
</html>
