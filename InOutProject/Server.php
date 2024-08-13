<?php

    // echo"hello";

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        // $nam=$_POST['person'];
        // $pas=$_POST['pass'];
      
        $server="localhost";
        $username="root";
        $password="";
        $dbname="inout";

        $conn=mysqli_connect($server,$username,$password,$dbname);



        

        // if($conn)
        // {
        //     echo"connected Sucess";
        // }
        // else{

        //     echo"error".mysqli_connect_error();
            
        // }
    }
    
?>