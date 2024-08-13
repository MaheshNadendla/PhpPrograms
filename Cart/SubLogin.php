<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

       
    
        $server="localhost";
        $username="root";
        $password="";
        $dbname="cartdata";

        $conn=mysqli_connect($server,$username,$password,$dbname);



        $flag=0;

        if($conn)
        {
            $name=$_POST['Name'];
            $pass=$_POST['Pass'];

            $conn=mysqli_connect($server,$username,$password,$dbname);


            $sql = "SELECT * FROM `signups`";
            $x = mysqli_query($conn, $sql);



            if (mysqli_num_rows($x) > 0)
            {
    
                
    
                // Fetch each row as an indexed array
                while ($row = mysqli_fetch_row($x)) 
                {
    
            
                    if( $row[0]==$name && $row[2]==$pass)
                    {
                        $flag=1;
                        header('Location: Buy.html');
                        // exit(); //
                        echo"hello";
                    }
                    
                }

                if(!$flag)
                {
                    echo"Invalid UserName or Password";
                }
            }
        }
        else{

            echo"error".mysqli_connect_error();
            
        }
    }

    


?>