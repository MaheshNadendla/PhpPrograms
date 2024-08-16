



<?php 
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $name=$_POST['nam'];
                $pass=$_POST['pass'];
                $servername="localhost";
                $username="root";
                $password="";
                $database="form";

                $conn=mysqli_connect($servername,$username,$password,$database);

                if(!$conn)
                {
                    die("sorry".mysqli_connect_error());
                }
                else{
                    echo"connected Sucessfully";


                    $sql="INSERT INTO `contact1`Values('$name','$pass')";

                    $x=mysqli_query($conn,$sql);
                    echo $x;


                }

                echo"connected Sucessfully";


            }    
?>

<!DOCTYPE html>
<ht lang="en">


  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
      <link rel="stylesheet" href="styles/LoginPage.css">
  </head>


  <body>
    <div class="login-box">
      <h2>Login</h2>
      <form  action="/PHPPROGRAMS/Hello.php"  method="post"   >

            <label class="user-box" >Username</label>
          <input type="text" name="nam" required=""/>
          
  
          <input type="password" name="pass" required="" />
          <label>Password</label>

        <button> Submit </button>

      </form>


    </div>
  </body>

</ht



