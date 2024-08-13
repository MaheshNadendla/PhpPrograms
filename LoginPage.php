
<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $nam=$_POST['person'];
        $pas=$_POST['pass'];

        $server="localhost";
        $username="root";
        $password="";
        $dbname="form";

        $conn=mysqli_connect($server,$username,$password,$dbname);

        if(!$conn)
        {
            echo"error".mysqli_connect_error();
        }
        else
        {

            // $sql="select * from `contact1`";

            // $x=mysqli_query($conn,$sql);

            
            

            
            // while($row=mysqli_fetch_assoc($x))
            // {
            //     foreach($row as $k)
            //     {
            //         echo $k."  ";
            //     }
            //     echo"<br/>";
            // }


            // $sql="select * from `contact1`";


            $sql="INSERT INTO `contact1` VALUES ('$nam', '$pas');";

            $x=mysqli_query($conn,$sql);

            echo var_dump($x);

            
            
            
            
            // while($row=mysqli_fetch_assoc($x))
            // {
            //     foreach($row as $k)
            //     {
            //         echo $k."  ";
            //     }
            //     echo"<br/>";
            // }
             

        
        }



    }





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="styles/log.css"> -->



    <style>
        .screen {
            height: 100vh;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            width: 100vw;

        }

        .Main {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 65vh;
            background-color: green;
            width: 400px;
            border-radius: 10px;
            font-size: larger;
        }

        .Main :nth-child(2),
        .Main :nth-child(3),
        .Main :nth-child(4),
        .Main :nth-child(5),
        .Main :nth-child(6) {
            margin-top: 15px;

        }

        .Heading {
            font-size: xx-large;
            font-weight: 900;
            position: relative;
            bottom: 30px;
        }

        input {
            height: 25px;
            width: 220px;
            border-radius: 3px;
            ;
        }

        .Lab1 {
            position: relative;
            right: 65px;
            top: 10px;
        }

        .Lab2 {
            position: relative;
            right: 69px;
            top: 10px;

        }

        .submit {


            padding: 5px;
            font-size: large;
            position: relative;
            left: 70px;
            top: 50px;
            /* cursor:pointer; */

        }
        .Main button:focus
        {

            background-color:blue;
            cursor:pointer;

        }

        .Main button:hover
        {

            background-color:blue;
            cursor:pointer;

        }


        .DbBtn{

            background-color:blue;
            margin-top:20px;
            cursor: pointer;
            padding: 5px;
            font-size: large;

        }

        .Lat button :focus
        {

            background-color:green;
            cursor:pointer;

        }

        .Lat button :hover
        {

            background-color:blue;
            cursor:pointer;

        }
     
     </style>



</head>

<body>

    <div class="screen">
        <form action="http://localhost/PHPPROGRAMS/LoginPage.php" method="post">

            <div class="Main">
                <label class="Heading" for="">Sign Up</label>

                <label class="Lab1" for="">UserName</label>
                <input type="text" name="person">

                <label class="Lab2" for="">Password</label>
                <input type="text" name="pass">

                <button class="submit">
                    submit
                </button>

            </div>

            

        </form>

        

            <form action="http://localhost/PHPPROGRAMS/print.php" method="post">
            <div class="Lat">

                <button class="DbBtn">Show Data in DATABASE </button>

            </div>

            </form>
        

            


    </div>

</body>

</html>