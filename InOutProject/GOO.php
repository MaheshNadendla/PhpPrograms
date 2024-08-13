<?php

    require 'Server.php';

    $booroll=$_POST['GirlsOutingOutRoll'];
    $booplace=$_POST['GirlsOutingOutPlace'];

    
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



        $sql = "SELECT * FROM totalgirls";
        $result1 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result1) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result1)) 
            {

                if($row[0]==$booroll)
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
    

                    if($row[0]==$booroll)
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
                    

                    if($row[0]==$booroll)
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
                    

                    if($row[0]==$booroll)
                    {
                        $flag4=1;
                        break;
                    }
                }
            }

        } 

        require 'TableStyle.html';
        echo'<div class="heading">Boys Outing List</div>';


        if($flag1==0)
        {
            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Id not Found
                </div>
                </div>";
        }
        elseif($flag1==1 && $flag2==0  && $flag3==1  && $flag4==0 )
        {
            
            echo "<div class='Error-Messages'> <div class='MessageBox' > Sent Out Sucessfully
                </div>
                </div>";


            $sql="INSERT INTO `girlsoutingout` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', '$booplace', '-' , current_timestamp(), 'out');";
            $x=mysqli_query($conn,$sql);

            $sql="INSERT INTO `girlsoutinghistory` (`id`, `name`, `phone`, `place`, `intime`, `outime`, `status`) VALUES ('$id', '$name', '$phone', '$booplace', '-', current_timestamp(), 'out');";
            $x=mysqli_query($conn,$sql);

            $sql="DELETE FROM `girlscollegein` WHERE `id` = '$id'";
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
        elseif($flag1==1 && $flag2==1  && $flag3==0  && $flag4==0 )
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Already At Out <br> Can't Send Out
                </div>
                </div>";
        }
        elseif($flag1==1 && $flag2==0  && $flag3==0  && $flag4==1 )
        {
            

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
           
           He Is At home <br> Can't Send Out
                </div>
                </div>";

            
        }


        echo" $flag1 $flag2 $flag3 $flag4";


        
    }
    else{

            echo"error".mysqli_connect_error();
            
    }

    

?>