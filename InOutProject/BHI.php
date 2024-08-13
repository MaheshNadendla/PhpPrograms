<?php

    require 'Server.php';

    $bhi=$_POST['BoysHomeIn'];

    echo"$bhi";
    $conn=mysqli_connect($server,$username,$password,$dbname);

    

    if($conn)
    {
        $flag1=0;
        $flag2=0;
        $flag3=0;
        $flag4=0;
        $flag5=0;

        $id;
        $name;
        $phone;
        $place;
        $intime;
        $outime;
        $status;



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


            $sql = "SELECT * FROM boysoutingout";
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


            $sql = "SELECT * FROM boyscollegein";
            $result3 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result3) > 0)
            {

                

                while ($row = mysqli_fetch_row($result3)) 
                {

                    if($row[0]==$bhi)
                    {
                        $flag3=1;

                        break;
                    }
                }
            }


            $sql = "SELECT * FROM boyshomeout";
            $result4 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result4) > 0)
            {

                while ($row = mysqli_fetch_row($result4)) 
                {
                    if($row[0]==$bhi)
                    {
                        $flag4=1;
                        break;
                    }
                }
            }


            $sql = "SELECT * FROM boyshomehistory";
            $result5 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result5) > 0)
            {

                while ($row = mysqli_fetch_row($result5)) 
                {
                    

                    if($row[0]==$bhi  &&  $row[6]=="out")
                    {

                        $sql_update1 = "UPDATE `boyshomehistory` SET `intime`= current_timestamp() WHERE `status` = 'out' ";

                        $sql_update = "UPDATE `boyshomehistory` SET `status` = 'out-in' WHERE id = $bhi ";


                        if(mysqli_query($conn, $sql_update1))
                        {
                            echo "Updated successfully!";
                        }
                        else
                        {
                            echo "Error updating record: " . mysqli_error($conn);
                        }

                        if(mysqli_query($conn, $sql_update))
                        {
                            echo "Updated time successfully!";
                        }
                        else
                        {
                            echo "time Error updating record: " . mysqli_error($conn);
                        }

                        $flag5=1;

                        echo"flag5"."$flag5";

                        break;

                       
                    }
                }
            }
        } 



        require 'TableStyle.html';
        echo'<div class="heading">Boys In List</div>';


        if($flag1==0)
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Id not Found
                </div>
                </div>";

        }
        elseif($flag1==1 && $flag2==0  && $flag3==0  && $flag4==1 )
        {


            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Sent In Sucessfully 
            </div>
            </div>";


            $sql="INSERT INTO `boyscollegein` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', 'Clg', current_timestamp(),'$outime' , 'in');";
            $x=mysqli_query($conn,$sql);


            $sql="DELETE FROM `boyshomeout` WHERE `id` = '$id'";
            $y=mysqli_query($conn,$sql);



            if($x)
            {
                echo"inserted SucessFully";
                echo"$y";
            }
            else{

                echo"alredy in college";

            }


        }
        elseif($flag1==1 && $flag2==1  && $flag3==0  && $flag4==0 )
        {


            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            He is At Outing <br> Come in Outing In List
            </div>
            </div>";


        }
        elseif($flag1==1 && $flag2==0  && $flag3==1  && $flag4==0 )
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Already In College <br> Can't Send In
            </div>
            </div>";


        }


        echo" $flag1 $flag2 $flag3 $flag4";






        

        
    }
    else{

            echo"error".mysqli_connect_error();
            
    }

    

?>