<?php

    require 'Server.php';

    $boi=$_POST['GirlsOutingIn'];

    echo"$boi";
    $conn=mysqli_connect($server,$username,$password,$dbname);

    
        $id;
        $name;
        $phone;
        $place;
        $intime;
        $outime;
        $status;


    if($conn)
    {
        $flag1=0;
        $flag2=0;
        $flag3=0;
        $flag4=0;
        $flag5=0;

        



        $sql = "SELECT * FROM totalgirls";
        $result1 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result1) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result1)) 
            {
                // Output each row as an array

                if($row[0]==$boi)
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


            $sql = "SELECT * FROM girlsoutingout";
            $result2 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result2) > 0) 
            {

                while ($row = mysqli_fetch_row($result2)) 
                {
                    // Output each row as an array

                    if($row[0]==$boi)
                    {
                        $flag2=1;
                        break;
                    }
                }
            }


            $sql = "SELECT * FROM girlscollegein";
            $result3 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result3) > 0)
            {

                

                while ($row = mysqli_fetch_row($result3)) 
                {
                    // Output each row as an array

                    if($row[0]==$boi)
                    {
                        $flag3=1;

                        break;
                    }
                }
            }


            $sql = "SELECT * FROM girlshomeout";
            $result4 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result4) > 0)
            {

                while ($row = mysqli_fetch_row($result4)) 
                {
                    // Output each row as an array
        

                    if($row[0]==$boi)
                    {
                        $flag4=1;
                        break;
                    }
                }
            }


            $sql = "SELECT * FROM girlsoutinghistory";
            $result5 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result5) > 0)
            {

                while ($row = mysqli_fetch_row($result5)) 
                {
                    // Output each row as an array
                    

                    if($row[0]==$boi  &&  $row[6]=="out")
                    {
                        

                        $sql_update1 = "UPDATE `girlsoutinghistory` SET `intime`= current_timestamp() WHERE `status` = 'out' ";

                        $sql_update = "UPDATE `girlsoutinghistory` SET `status` = 'out-in'  WHERE id = $boi ";


                        if(mysqli_query($conn, $sql_update1))
                        {
                            echo "Updated time successfully!";
                        }
                        else
                        {
                            echo "time Error updating record: " . mysqli_error($conn);
                        }


                        if(mysqli_query($conn, $sql_update))
                        {
                            echo "Updated successfully!";
                        }
                        else
                        {
                            echo "Error updating record: " . mysqli_error($conn);
                        }

                        

                        $flag5=1;

                        break;

                       
                    }
                }
            }
        } 

        // if($flag5==1)
        // {

        //         $sql="INSERT INTO `boysoutinghistory` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', '$place', current_timestamp(), current_timestamp(), 'out-in');";
        //         $x=mysqli_query($conn,$sql);

        // }

        require 'TableStyle.html';
        echo'<div class="heading">Girls In List</div>';


        if($flag1==0)
        {
            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Id not Found
                </div>
                </div>";
        }
        elseif($flag1==1 && $flag2==1  && $flag3==0  && $flag4==0 )
        {
            echo "<div class='Error-Messages'> <div class='MessageBox' > Sent In Sucessfully
            </div>
            </div>";


            $sql="INSERT INTO `girlscollegein` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', 'Clg', current_timestamp(), '$outime', 'in');";
            $x=mysqli_query($conn,$sql);


            $sql="DELETE FROM `girlsoutingout` WHERE `id` = '$id'";
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
        elseif($flag1==1 && $flag2==0  && $flag3==1  && $flag4==0 )
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            She is Already In the College <br>     Cant Send In Again
            </div>
            </div>";

        }
        elseif($flag1==1 && $flag2==0  && $flag3==0  && $flag4==1 )
        {


            

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            She is At the Home <br> Come in Home In List
            </div>
            </div>";


        }


        echo" $flag1 $flag2 $flag3 $flag4";






        

        
    }
    else{

            echo"error".mysqli_connect_error();
            
    }

    


?>