<?php 
echo $_REQUEST['Account'];
echo $_REQUEST['username'];
echo $_REQUEST['pass'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
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
      /* body  { */
        /* height: 100vh;
        background-color: #6482ad;
        flex-direction: column; */
      /* } */
      #container{
        position: relative;
        height: 100vh;
        background-color: #6482ad;
        flex-direction: column;
        padding:0 14%;
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
        width: 50%;
        height: 30rem;
        border-radius: 20px;
        /* border: 1px solid black; */
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.4);
        /* background-color: rgba(255, 255, 255, 0.4); */
        backdrop-filter: blur(5px);
        /* position: relative; */
        min-width: 90%;
        max-width: 50%;
      }
      .input {
        width: 25rem;
      }
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
      form{
       min-width:70%;
      }
    </style>
</head>
<body>
    

       
<!-- html section -->
 <body >

<div class="d-flex justify-content-center align-items-center" id="container">



    <h2 class="mb-5 text-center">update username and password </h2>
    
    <div class="container" id="mainDiv">
      <form action="insert.php" method="post">
   <div class="form-floating mb-3">
    <input
              type="text"
              class="form-control"
              id="floatingInput"
              placeholder="Enter your User name"
              name="AccName"
            />
           
            <label for="floatingInput"
              >Account Name  <i class="fa-solid fa-user-secret"></i
            ></label>
   </div>
  
   
    <div class="form-floating mb-3">
          <input
            type="text"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            name="UserName"
          />
          <label for="floatingPassword"
            >Username <i class="fa-solid fa-user"></i
          ></label>
    </div>

    <div class="form-floating">
          <input
            type="password"
            class="form-control"
            id="floatingPassword"
            placeholder="Password"
            name="YourPassword"
          />
          <label for="floatingPassword"
            >Password <i class="fa-solid fa-lock"></i
          ></label>
     </div>
    
        
     <button class="btn btn-primary mt-3">Update</button>
    <!-- </div> -->
        
   

    </form>
            

    </div>
   
</div>



<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
</body>
</html>





