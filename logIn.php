<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
         </script>
     
</head>
<body>
  
</body>
</html>
<?php
// !user data 
// session_start();
// $_SESSION['UserName'] = $_POST['LogInName'];
 $_SESSION['logName']= $_REQUEST['LogName'];  //!no issue here
 $_SESSION['logPass']= $_REQUEST['logPass'];
// echo $_GET['LogName'];
// $UName=$_SESSION['UserName'];



$logName= $_SESSION['logName'];
$logPass=$_SESSION['logPass'];
$conn=mysqli_connect("localhost","root","","passwordmanager");
$UserConnection=mysqli_connect("localhost","root","","userpassworddata");
echo $logName;
echo $logPass;
if($conn){
// var_dump( $conn);
    $view="select * from `$logName`";
    $q=mysqli_query($conn,$view);
    $query=mysqli_fetch_array($q);

    
    if($query['UserName']==$logName&&$query['passwords']==$logPass){
      
// $UserConnection;
        // echo "succesfull";
        echo "<script>";
        ?>
        Swal.fire('succesfully log in ')
      <?php
      echo "</script>";
        header("refresh:4 ;url=display.php");
        ?>



   


<?php
    }else{
        echo "<script>";
?>
        <!-- echo "user not found"; -->
        Swal.fire("User not found check your username and password ");
<?php
    echo "</script>";
    }
  }else{
    echo "<script>";
    echo "testing";
?>
<!-- echo "Something went wrong"; -->
Swal.fire("somethin went wrong try again ");
<?php
echo "</script>";
}

?>



