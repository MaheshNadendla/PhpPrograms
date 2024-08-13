<?php

    require 'Server.php';

    $bhi=$_POST['VID'];
    $vname=$_POST['VName'];

    echo"$bhi";
    $conn=mysqli_connect($server,$username,$password,$dbname);

    

    if($conn)
    {
        $flag1=0;
        $flag2=0;
        $flag3=0;


            $sql = "SELECT * FROM visitorsin";
            $result1 = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result1) > 0)
            {

                while ($row = mysqli_fetch_row($result1)) 
                {


                    if($row[0]==$bhi && $row[1]==$vname  &&  $row[6]=="in")
                    {
                        $flag1=1;

                        $sql_update1 = "UPDATE `visitorshistory` SET `outime`= current_timestamp() WHERE `status` = 'in' ";

                        $sql_update = "UPDATE `visitorshistory` SET `status` = 'in-out' WHERE id = $bhi ";


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


                        break;

                       
                    }
                }
            }

        echo'<div class="heading">Visitors Out List</div>';
        require 'TableStyle.html';

        if($flag1==0)
        {

            echo "<div class='Error-Messages'> <div class='MessageBox' > 
            Id not Found
                </div>
                </div>";

        }
        elseif($flag1==1)
        {


            echo "<div class='Error-Messages'> 
                        <div class='MessageBox' > 
                            Sent Out Sucessfully
                        </div>
                </div>";




            $sql="DELETE FROM `visitorsin` WHERE `id` = '$bhi'";
            $y=mysqli_query($conn,$sql);



            if($y)
            {
                echo"inserted SucessFully";
            }
            else{ 

                echo"alredy in college";

            }


        }
      


        echo" $flag1 ";


    }
    else{

            echo"error".mysqli_connect_error();
            
    }

    


?>