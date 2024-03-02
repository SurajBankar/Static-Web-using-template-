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
                     <h2 class="a">Salary</h2>   
                        <h5 class="a">Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading text-end">
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>SR</th>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Salary</th>
                                            <th>Present Days</th>
                                            <th>Payment</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
include 'my js/connection.php';
$data=mysqli_query($con,"SELECT * FROM `employee_data`");
$row=mysqli_num_rows($data);
$count=1;
while($row=mysqli_fetch_array($data))
{
    $a=$row["payment"];
    if($a==0)
    {
                                        ?>
                                        <tr class="odd gradeX">     
                                        <form action="calculations.php" method="post">                                    
                                            <td><?php echo $count  ?></td>
                                            <td><?php echo $row['name']  ?></td>
                                            <td><?php echo $row['city']  ?></td>
                                            <td class="center "  > <input class="salary" name="salary" type="text" value="<?php echo $row['salary']  ?>"></td>
                                            <td><input class="presentDays" name="presentDays" onkeyup="calculatePayment()" type="text"></td>
                                            <td><input class="payment" name="payment" type="text"></td>
                                            <td class="center align-center"> 
                                           
                                            <button type="submit" name="add" value="<?php echo $row['eid']  ?>" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i>ADD</button>
                                           
                                            
											<button type="submit" name="delete" value="<?php echo $row['eid']  ?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button></td>
                                            </form>
                                            
                                        </tr>
                                        <?php
$count=$count+1;
}
}
                                        ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
