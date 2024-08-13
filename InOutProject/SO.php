<?php

    require 'Server.php';

    $bhoroll=$_POST['StaffOutRoll'];
    $bhoplace=$_POST['StaffOutPlace'];

    
    $conn=mysqli_connect($server,$username,$password,$dbname);

    

    if($conn)
    {
        $flag1=0;
        $flag2=0;
        $flag3=0;
        $flag4=0;

        $id;
        $name;
        $phone;
        $place;
        $intime;
        $outime;
        $status;



        $sql = "SELECT * FROM totalstaff";
        $result1 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result1) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result1)) 
            {
                // Output each row as an array
                print_r($row[0]);
                echo "<br>";

                if($row[0]==$bhoroll)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $intime=$row[4];
                    $outime=$row[5];
                    $status=$row[6];

                    $flag1=1;
                    break;
                }
            }


            $sql = "SELECT * FROM staffhomeout";
            $result2 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result2) > 0) 
            {

                while ($row = mysqli_fetch_row($result2)) 
                {
                    // Output each row as an array
                    print_r($row[0]);
                    echo "<br>";

                    if($row[0]==$bhoroll)
                    {
                        $flag2=1;
                        break;
                    }
                }
            }


            $sql = "SELECT * FROM staffcollegein";
            $result3 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result3) > 0)
            {

                

                while ($row = mysqli_fetch_row($result3)) 
                {
                    // Output each row as an array
                    print_r($row[0]);
                    echo "<br>";

                    if($row[0]==$bhoroll)
                    {
                        $flag3=1;

                        break;
                    }
                }
            }



        } 


        require 'TableStyle.html';
            

        echo'<div class="heading">Staff Home List</div>';


        if($flag1==0)
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Id not Found
                </div>
                </div>";

        }
        elseif($flag1==1 && $flag2==0  && $flag3==1)
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > Sent Home Sucessfully
                </div>
                </div>";


            $sql="INSERT INTO `staffhomeout` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', '$bhoplace','-', current_timestamp(), 'out');";
            $x=mysqli_query($conn,$sql);

            $sql="INSERT INTO `staffhistory` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', '$bhoplace', '-' , current_timestamp(), 'out');";
            $x=mysqli_query($conn,$sql);

            $sql="DELETE FROM `staffcollegein` WHERE `id` = '$id'";
            $y=mysqli_query($conn,$sql); 

            

            if($x)
            {
                echo"inserted SucessFully";
                echo"$y";
            }
            else{

                echo"error in database";

            }


        }
        elseif($flag1==1 && $flag2==1  && $flag3==0 )
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
           
           Staff Is At home <br> Can't Send Home
                </div>
                </div>";

        }
       


        echo" $flag1 $flag2 $flag3";






        

        
    }
    else{

            echo"error".mysqli_connect_error();
            
    }

    // $po="";
    // echo'<div class="heading">Details</div>';

    // $sql = "SELECT * FROM `boysoutingin`";
    // $x = mysqli_query($conn, $sql);

    // $po = '<table border="1" class="tab">';
    // $po .= '<tr><th>Names</th><th>Roll No</th></tr>';

    // // Fetch data from the database and insert it into the HTML table
    // while ($row = mysqli_fetch_assoc($x)) 
    // {
    //     $po .= '<tr>';
    //     foreach ($row as $value) 
    //     {
    //         $po .= '<td>' . $value . '</td>';
    //     }
    //     $po .= '</tr>';
    // }

    // $po .= '</table>';

    // echo "<div class='jin'>$po</div>";


?>