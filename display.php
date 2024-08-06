<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
        </script>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
      * {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
    
      }
      .container{
        width: 75%;
        height: 30rem;
      }
      body  {
        /* height: 100vh;
        background-color: #6482ad;
        flex-direction: column; */
      }
      #container{
        position: relative;
        height: 100vh;
        background-color: #6482ad;
        flex-direction: column;
        padding:0 7%;
      }
      a {
        text-decoration: none;
      }
      h2 {
        font-weight: 600;
        display:inline-block;
      }
      #mainDiv {
        padding:0 1rem;
        width: 75%;
        height: 30rem;
        border-radius: 20px;
        /* border: 1px solid black; */
        /* display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center; */
        /* background-color: rgba(255, 255, 255, 0.4); */
        /* background-color: rgba(255, 255, 255, 0.4); */
        /* backdrop-filter: blur(5px); */
        /* position: relative; */
      }
      .input {
        width: 20rem;
      }
      /* thead{
        border:1px solid black;
      }
      table{
        /* border:1px solid black; */
        /* border-radius:100px; */
      /* } */ 
      #new{  
        width:100%;
    /* top: 0rem; */
    /* left: 65rem; */
    /* position: sticky; */
    /* left: 84rem; */
      }
      #newdiv{
        width: 70%;
      }
 
    </style>
</head>
<body>
    
<?php
// !user data 
// session_start();
// $_SESSION['UserName'] = $_POST['LogInName'];
//  $_SESSION['logName']= $_REQUEST['LogName'];  //!no issue here
//  $_SESSION['logPass']= $_REQUEST['logPass'];
// echo $_GET['LogName'];
// $UName=$_SESSION['UserName'];



$logName= $_SESSION['logName'];
$logPass=$_SESSION['logPass'];
$conn=mysqli_connect("localhost","root","","passwordmanager");
$UserConnection=mysqli_connect("localhost","root","","userpassworddata");
// echo $logName;
// echo $logPass;
if($conn){
// var_dump( $conn);
    $view="select * from `$logName`";
    $q=mysqli_query($conn,$view);
    $query=mysqli_fetch_array($q);

    
    if($query['UserName']==$logName&&$query['passwords']==$logPass){
      
$UserConnection;
        // echo "succesfull";
        ?>

       
<!-- html section -->
 <body >

<div class="d-flex justify-content-center align-items-center" id="container">



    <h2>Manage Your Password   </h2>
     <div class="d-flex justify-content-end align-items-center" id="newdiv">
         <a href="insert.html" >
              
         <button  id="new" class="btn btn-primary mb-3 mt-3"><i class="fa-solid fa-plus"></i> New</button>
              </a>  

     </div>
            

     

    
    
    <div class="container table-responsive" id="mainDiv">

    
    <table class="table table-striped table-hover ">
      <thead class="table-dark">
        <tr>
          <th>Sr no. </th>
          <th>Account Name </th>
          <th>User Name </th>
          <th>Password </th>
          <th>Update </th>
          <th>Delete </th>
        </tr>

      </thead>
      <tbody>
        <?php
        $userDataView="select * from `$logName`";
        $data=mysqli_query($UserConnection,$userDataView);

        while ($result=mysqli_fetch_array($data)) {

        
        ?>
        <tr>
        <td>
            <?php echo  $result['id'];?>
          </td>
          <td>
            <?php echo  $result['accountname'];?>
          </td>
          <td>
            <?php echo $result['UserName']?>
          </td>
          <td>
          <?php echo $result['passwords']?>
          </td>
          <td>
            <a href="update.php?AccName=<?php echo $result['accountname'];?>& UserName=<?php  echo $result['UserName'];?> & YourPassword=<?php echo $result['passwords']?> &id=<?php echo $result['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
          </td>
          <td>
          <a href="delete.php?Account=<?php echo $result['accountname'];?>& username=<?php  echo $result['UserName'];?> & pass=<?php echo $result['passwords']?>"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
       
     <?php }?>
      </tbody>
</table>
        </div>
        
    </div>


   


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
<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
</body>
</html>