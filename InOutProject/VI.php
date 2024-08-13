<?php

    require 'Server.php';

    

        $bhi=$_POST['VisitorID'];
        $vname=$_POST['NAME'];
        $vphone=$_POST['PHONE'];
        $vplace=$_POST['PLACE'];

    echo"$bhi";
    $conn=mysqli_connect($server,$username,$password,$dbname);

    

    if($conn)
    {
        $flag1=0;
        $flag2=0;
        $flag3=0;
        



        $sql = "SELECT * FROM totalboys";
        $result1 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result1) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result1)) 
            {

                    if($row[0]==$bhi)
                    {
                        $flag1=1;
                        break;
                    }
            }

        }


            $sql = "SELECT * FROM totalgirls";
            $result2 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result2) > 0) 
            {

                while ($row = mysqli_fetch_row($result2)) 
                {

                    if($row[0]==$bhi)
                    {
                        $flag2=1;
                        break;
                    }
                }
            }


            
            require 'TableStyle.html';
            echo'<div class="heading">Visitors In List</div>';


            if($flag1==0 && $flag2==0  )
            {

                echo "<div class='Error-Messages'> <div class='MessageBox' > 
                Id not Found
                </div>
                </div>";

            }
            elseif($flag1 || $flag2)
            {

                echo "<div class='Error-Messages'> <div class='MessageBox' > 
                Sent In Sucessfully 
                </div>
                </div>";

    
                $sql="INSERT INTO `visitorsin` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$bhi', '$vname', '$vphone', '$vplace',current_timestamp(),'-', 'in');";
                $x=mysqli_query($conn,$sql);

                $sql="INSERT INTO `visitorshistory` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$bhi', '$vname', '$vphone', '$vplace',current_timestamp(),'-', 'in');";

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

        echo" $flag1 $flag2 ";






        

        
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