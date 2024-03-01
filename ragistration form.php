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
        <a href="employee.php" class="btn btn-primary">Employee Ragistration</a>
<hr>
            
            <div class="row">
            <div class="col-md-6">
                                    <h3 class="center1">Ragistration Form</h3>
                                    <form role="form" >
                                        <div class="form-group">
                                            <label>Employee Name</label>
                                            <input class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" />                  
                                        </div>
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input class="form-control" />                  
                                        </div>
                                        <div class="align-center">
                                        <button type="submit" name="formAddData" class="btn btn-primary center1">Submit</button>
                                        <button type="reset" class="btn btn-default center1">Reset</button>
                                        </div>
                                    </form>                               
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
