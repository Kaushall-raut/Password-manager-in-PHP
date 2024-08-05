<?php
session_start();
// ! User data 
$Uname=$_SESSION['logName'];  //?this is user name data

// echo $_REQUEST['APass'];
 $_SESSION['AccountName']=$_REQUEST['AccName'];

 $_SESSION['UserName']=$_REQUEST['UserName'];

 $_SESSION['Pass']=$_REQUEST['YourPassword'];
 
 
 echo $AccName= $_SESSION['AccountName'];
//  echo $_SESSION['Password'];
 echo $username= $_SESSION['UserName'];
 
 $Pass= $_SESSION['Pass'];
echo $Pass;


 

//  $logName= $_POST['LogInName'];
// ! Connecting to database

 $InsertConn=mysqli_connect("localhost","root","","userpassworddata");
 if($InsertConn){
   // session_start();
   // echo "$Uname";
echo "connected";

$InsertCmd="insert into `$Uname` (`accountname`, `UserName`, `passwords`) values('$AccName','$username','$Pass') ";

mysqli_query($InsertConn,$InsertCmd);
// session_destroy();
header("location:logIn.php");
 }else{
    echo "something went wrong" ;
 }

?>