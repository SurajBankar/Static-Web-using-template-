<?php
include 'my js/connection.php';
?>
<?php
if(isset($_POST['formAddData']))
{
  $name=$_POST['name'];
  $city=$_POST['city'];
  $salary=$_POST['salary'];

  $AddData=mysqli_query($con,"INSERT INTO `employee_data`(`eid`, `name`, `city`, `salary`) VALUES ('','$name','$city','$salary')");
  if($AddData)
  {
    echo "<script>alert('Data Added')</script>";
    echo "<script>document.location='ragistration form.php'</script>";
  }
  else{
    echo "<script>alert('something went wrong, check database connection')</script>";
    echo "<script>document.location='ragistration form.php'</script>";
  }
    
}
else
{
    echo "<script>alert('Something went wrong')</script>";
    echo "<script>document.location='ragistration form.php'</script>";
}



?>