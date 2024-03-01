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

                                    <h3 class="center1">UPDATE</h3>
                                    <?php
                                    if(isset($_POST['update']))
                                    {
include 'my js/connection.php';
$id=$_POST['update'];
$data=mysqli_query($con,"SELECT * FROM `employee_data` WHERE `eid`=$id");
$row=mysqli_num_rows($data);

while($row=mysqli_fetch_array($data))
{

                                        ?>

                                    <form action="calculations.php" method="post">                                  
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input name="name" value="<?php echo $row['name']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input name="city" value="<?php echo $row['city']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input name="salary" value="<?php echo $row['salary']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Present days</label>
                                            <input  name="presentDays" value="<?php echo $row['presentDays']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Payment</label>
                                            <input name="payment" value="<?php echo $row['payment']  ?>" class="form-control" />                  
                                        </div>
                                        <div class="align-center">
                                        <button type="submit" name="update" value="<?php echo $row['eid']  ?>" class="btn btn-primary"><i class="fa fa-pencil"></i> Update</button></td>

                                        <button type="reset" class="btn btn-default"><i class="fa fa-pencil"></i> Reset</button></td>

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
