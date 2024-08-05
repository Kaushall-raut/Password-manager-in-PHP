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
    <?php
$UserName =$_REQUEST['userName'];
$password= $_REQUEST['password'];
$confirmPassword= $_REQUEST['confirmPassword'];



if(isset($_POST['SignUpBtn'])){
    // echo "$UserName";
include "connection.php";

if($password===$confirmPassword){

        if($conn==true){
        // echo "connected";

        // !    creating a database for login page and inserting user password and name so he can login by using her username and password

          $cmd="CREATE TABLE $UserName (
             UserName varchar(20) ,
             passwords varchar(20)  )";

            $userConn=mysqli_connect("localhost","root","","userpassworddata");

            if($userConn){

                // ! this section creates a user table so he can insert his/her data in that table 

                $UserCmd="CREATE TABLE $UserName (
                    accountname varchar(30),
                    UserName varchar(20) ,
                    passwords varchar(20)  )";
        
                    if(mysqli_query($userConn,$UserCmd)){

                    echo "<script>";
                    ?>
                     Swal.fire("User successfully sign up ");
                    <?php
                    echo "</script>";
                    }else{
                        echo "error";
                    }
                 echo " <A href='signUp.html'>go back</A>";
                 echo "</script>";
            }else{

                    echo "something went wrong plz try again";

            }

            if($query=mysqli_query($conn,$cmd)){
            // echo "successfully log in" ;
                $insert="INSERT INTO `$UserName`( `Username`, `passwords`) VALUES ('$UserName','$password')";
                mysqli_query($conn,$insert);

            echo "<script>";
            ?>
            Swal.fire("User successfully sign up ");
            <?php
             echo " <A href='signUp.html'>go back</A>";
            echo "</script>";
             }else{
            // echo "something went wrong try again";
            echo "<script>";
            ?>
           Swal.fire("Username already exist");
                   
        <?php
        //    header('location:signUp.html');

           echo "</script>";
           echo " <A href='signUp.html'>go back</A>";
            }
        }
     
}else{
   echo "<script>";
   ?>
 Swal.fire("Your password does not match");
   <?php
   echo "</script>";
    // echo "Your password does not match";
    echo " <A href='signUp.html'>go back</A>";
}

}


?>

    </body>
    </html>

