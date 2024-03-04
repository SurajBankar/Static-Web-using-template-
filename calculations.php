<?php
include 'my js/connection.php';
?>


<?php
//ragistration form page => database
if(isset($_POST['formAddData']))
{
  $name=$_POST['name'];
  $city=$_POST['city'];
  $salary=$_POST['salary'];
  $uid=$_POST['uid'];
  $category=$_POST['category'];
 

  $AddData=mysqli_query($con,"INSERT INTO `employee_data`(`eid`, `category`, `name`, `city`, `salary`, `uid`) VALUES ('','$category','$name','$city','$salary','$uid')");
  if($AddData)
  {
    echo "<script>alert('Data Added')</script>";
    echo "<script>document.location='ragistration form.php'</script>";
  }
  else{
    echo "<script>alert('something went wrong, check insert query')</script>";
    echo "<script>document.location='ragistration form.php'</script>";
  }
    
}

?>



<?php
//update page => database
if(isset($_POST['update']))
{
  $name=$_POST['name'];
  $city=$_POST['city'];
  $salary=$_POST['salary'];
  $presentDays=$_POST['presentDays'];
  $payment=$_POST['payment'];
  $id=$_POST['update'];

  $UpdateData=mysqli_query($con,"UPDATE `employee_data` SET `name`='$name',`city`='$city',`salary`='$salary',`presentDays`='$presentDays',`payment`='$payment' WHERE `eid`=$id");
  if($UpdateData)
  {
    echo "<script>alert('Data Updated')</script>";
    echo "<script>document.location='employee.php'</script>";
  }
  else{
    echo "<script>alert('something went wrong, check update Query')</script>";
    echo "<script>document.location='update.php'</script>";
  }
    
}

?>



<?php
//delete page => database
if(isset($_POST['delete']))
{
  $id=$_POST['delete'];

  $DeleteData=mysqli_query($con,"DELETE FROM `employee_data` WHERE `eid`=$id");
  if($DeleteData)
  {
    echo "<script>alert('Data Deleted')</script>";
    echo "<script>document.location='employee.php'</script>";
  }
  else{
    echo "<script>alert('something went wrong, check delete Query')</script>";
    echo "<script>document.location='employee.php'</script>";
  }
    
}

?>

<?php
//delete page => database
if(isset($_POST['add']))
{
  $id=$_POST['add'];
  $salary=$_POST['salary'];
  $presentDays=$_POST['presentDays'];
  $payment=$_POST['payment'];

  $update=mysqli_query($con,"UPDATE `employee_data` SET `presentDays`=' $presentDays',`payment`='$payment' WHERE `eid`=$id");
  if($update)
  {
    echo "<script>alert('payment added')</script>";
    echo "<script>document.location='salary.php'</script>";
  }
  else{
    echo "<script>alert('something went wrong, check update Query')</script>";
    echo "<script>document.location='salary.php'</script>";
  }
    
}

?>
