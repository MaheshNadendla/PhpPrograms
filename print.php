
<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $server="localhost";
        $username="root";
        $password="";
        $dbname="form";

        $po="";

        $conn=mysqli_connect($server,$username,$password,$dbname);

        if(!$conn)
        {
            echo"error".mysqli_connect_error();
        }
        else
        {


            echo'<div class="heading">Details</div>';

                $sql = "SELECT * FROM `contact1`";
                $x = mysqli_query($conn, $sql);

                $po = '<table border="1" class="tab">';
                $po .= '<tr><th>Names</th><th>Roll No</th></tr>';

                // Fetch data from the database and insert it into the HTML table
                while ($row = mysqli_fetch_assoc($x)) {
                $po .= '<tr>';
                foreach ($row as $value) {
                $po .= '<td>' . $value . '</td>';
                }
                $po .= '</tr>';
                }

                $po .= '</table>';


                echo "<div class='jin'>$po</div>";


            

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

    .jin{
            
            min-height:90vh;
            background-color:red;
            display: flex;
            justify-content: center;
            align-items: center;

        }

    .heading
    {

        
            height:10vh;
            background-color:blue;
            display: flex;
            justify-content: center;
            align-items: center;

    }

    .tab{
        margin:30px;
        background-color:white;
        display:flex;
        justify-content:center;
        align-items:center;
        text-align:center;
    }
    td,th{
        
        padding-left: 20px;
        padding-right: 20px;
        padding-top:5px;
        padding-bottom:5px;

    }

    </style>
</head>
<body>
    
</body>
</html>