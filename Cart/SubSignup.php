<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

       
    
        $server="localhost";
        $username="root";
        $password="";
        $dbname="cartdata";

        $conn=mysqli_connect($server,$username,$password,$dbname);



        

        if($conn)
        {
            
            $name=$_POST['Name'];
            $email=$_POST['Email'];
            $pass=$_POST['Pass'];

            $conn=mysqli_connect($server,$username,$password,$dbname);

            $sql="INSERT INTO `signups` VALUES ('$name', '$email','$pass');";

            $x=mysqli_query($conn,$sql);

            echo"SignUp Sucess Login";
        }
        else{

            echo"error".mysqli_connect_error();
            
        }
    }

    


?>