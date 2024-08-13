<?php
    $Break=":";
    require 'Server.php';

    $bhi=$_POST['SearchId'];

    // echo"$bhi";
    $conn=mysqli_connect($server,$username,$password,$dbname);


    function FillDetails($x,$y,$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate)
    {
            $Identity=$x;
            $Break=":";
            $CheckPlace=$y;

            echo "
            <div class='Error-Messages'> 

                

                <div class='heading1'>

                    <div class='heading-Details'> 

                    <h1>$name</h1>
                    <h3>Status below</h3> 

                    </div>


                    <div class='headingImages'>  

                        <div class='Img-1'>  

                        <img class='First-Img' src='images/Profile1.png' alt=''>
                                
                        </div>

                        <div class='Img-2'>  

                        <img class='Male-Img' src='images/Male.png' alt=''>
                                
                        </div>


                        <div class='Img-3'>  

                        <img class='Third-Img' src='images/Profile2.png' alt=''>
                                
                        </div>

                    </div>
                
                </div>

                <div class='Main-heading'>  
                    Searching a Person        
                </div>

                <div class='Main-heading2'>  

                    <div class='Profile-circle'>  
                                
                    </div>

                    <div class='Profile-details'>  

                        <div class='Profile-name1'>  
                                Mahesh
                        </div>

                        <div class='Profile-name2'>  
                                3rd year
                        </div>

                                
                    </div>
                                    
                </div>

                <div class='MenuBox'>  
                    <div class='MenuBox-Logo'>  
                        <img class='BothImage' src='images/Both.png' alt=''>     
                    </div>

                    <div class='MenuBoxButtons'> 
                    
                        <button onclick='BasicDetails()' class='MenuTitles Basics'>
                            Basic Information
                        </button>
                        <button onclick='parentDetails()' class='MenuTitles patrentD'>
                            Parent's Details
                        </button>
                        <button onclick='Academic()' class='MenuTitles Academic'>
                            Academic Information
                        </button>
                        <button onclick='Hostel()' class='MenuTitles Hostel'>
                            Hostel Details
                        </button>
                        <button onclick='Contact()' class='MenuTitles Contact'>
                             Contact
                        </button>
                        <button onclick='Fee()' class='MenuTitles Fee'>
                            Fee Details
                        </button>
                        <button onclick='Profile()' class='MenuTitles Profile'>
                            Profile Picture
                        </button>
                        <button onclick='Events()' class='MenuTitles Events'>
                            Events And Calenders
                        </button>
                        <button onclick='Extra()' class='MenuTitles Extra'>
                            Extracurricular Activities
                        </button>
                        
                                
                    </div>
                    
                </div>
                
                <div class='MessageBox-Search' > 

                    <div class='Details-Lists'>  
                        <div class='_Identity'>$Identity</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$CheckPlace</div> 
                    </div>  

                    <div class='Details-Lists'>
                        <div class='_RollNo'>Roll No</div>
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$id</div>
                    </div>
                    
                    <div class='Details-Lists'>  
                        <div class='_Name'>Name</div>
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$name</div> 
                    </div>  

                    <div class='Details-Lists'> 
                        <div class='_Phone'>Phone</div>
                        <div class='Semi'>$Break</div>
                        <div class='RespValue'>$phone</div>
                    </div>

                    <div class='Details-Lists'> 
                        <div class='_Place'>Place</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$place</div> 
                    </div>

                    <div class='Details-Lists'>  
                        <div class='_OutDate'>OutDate</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$outDate</div> 
                    </div>  

                    <div class='Details-Lists'>  
                        <div class='_OutTime'>OutTime</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$outime</div> 
                    </div>
                    
                    <div class='Details-Lists'>  
                        <div class='_InDate'>InDate</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$inDate</div> 
                    </div>  

                    <div class='Details-Lists'>  
                        <div class='_InTime'>InTime</div> 
                        <div class='Semi'>$Break</div>   
                        <div class='RespValue'>$intime</div> 
                    </div>

                    <div class='Details-Lists'>  
                        <div class='_Status'>Status</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue'>$status</div> 
                    </div>

                </div>


                <div class='PhotoBox'>  

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Name</div> 
                            <div class='Semi'>$Break</div> 
                            <div class='RespValue1'>$name</div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Gender</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue1'>Male</div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Roll No</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue1'>22SS1A0598</div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Phone No</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue1'>+91 $phone</div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Address</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue1'>California Bay Area, USA, 414</div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Date Of Birth</div> 
                        <div class='Semi'>$Break</div> 
                        <div class='RespValue1'>20 May, 1998</div> 
                    </div> 



            </div>";
    }


    

        $flag1=0;
        $flag2=0;
        $flag3=0;
        $flag4=0;
        $flag5=0;
        $flag6=0;
        $flag7=0;
        $flag8=0;

        $id=0;
        $name=0;
        $phone=0;
        $place=0;
        $intime=0;
        $outime=0;
        $status=0;
        $outDate="-";
        $inDate="-";


    if($conn)
    {
        



        $sql = "SELECT * FROM boyscollegein";
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
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];
                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag1=1;
                    break;
                }
            }

        }




        $sql = "SELECT * FROM boysoutingout";
        $result2 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result2) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result2)) 
            {
                
                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag2=1;
                    break;
                }
            }

        }



        $sql = "SELECT * FROM boyshomeout";
        $result3 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result3) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result3)) 
            {
                

                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag3=1;
                    break;
                }
            }

        }




        $sql = "SELECT * FROM girlscollegein";
        $result4 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result4) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result4)) 
            {
                

                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag4=1;
                    break;
                }
            }

        }



        $sql = "SELECT * FROM girlsoutingout";
        $result5 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result5) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result5)) 
            {
                

                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag5=1;
                    break;
                }
            }

        }




        $sql = "SELECT * FROM girlshomeout";
        $result6 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result6) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result6)) 
            {
               

                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag6=1;
                    break;
                }
            }

        }



        $sql = "SELECT * FROM staffcollegein";
        $result7 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result7) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result7)) 
            {
                

                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag7=1;
                    break;
                }
            }

        }




        $sql = "SELECT * FROM staffhomeout";
        $result8 = mysqli_query($conn, $sql);

        // Check if there are any rows returned
        if (mysqli_num_rows($result8) > 0) 
        {

            

            // Fetch each row as an indexed array
            while ($row = mysqli_fetch_row($result8)) 
            {
                

                if($row[0]==$bhi)
                {

                    $id=$row[0];
                    $name=$row[1];
                    $phone=$row[2];
                    $place=$row[3];
                    $indatetime= explode(" ",$row[4]);
                    $outdatetime= explode(" ",$row[5]);
                    $status=$row[6];

                    $intime=$indatetime[1];
                    $outime=$outdatetime[1];

                    $outDate=$outdatetime[0];
                    $inDate=$indatetime[0];

                    $flag8=1;
                    break;
                }
            }

        }






        require 'TableStyle.html';
            

        // echo'<div class="heading"></div>';


        if($flag1==1)
        {

            FillDetails("Boy","In The College",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);
            
        }
              
        else if($flag2==1)
        {

            FillDetails("Boy","Outing The College",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);

        }

        else if($flag3==1)
        {

            FillDetails("Boy","In The Home",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);
            
        }
              
        else if($flag4==1)
        {

            FillDetails("Girl","In The Colege",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);
            
        }

        else if($flag5==1)
        {


            FillDetails("Girl","Outing The Colege",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);


            
        }
              
        else if($flag6==1)
        {

            FillDetails("Girl","In The Home",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);

        }

        else if($flag7==1)
        {

            FillDetails("Staff","In The Colege",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);

            
        }
              
        else if($flag8==1)
        {

            FillDetails("Staff","In The Home",$id,$name,$phone,$place,$intime,$outime,$status,$inDate,$outDate);

            
        }

        else{

            echo "<div class='Error-Messages'> 
            <div class='MessageBox-Search' > 

            id not Found

            </div>
            </div>";

        }
        

        // echo" $flag1 $flag2 $flag3 $flag4 $flag5 $flag6 $flag7 $flag8 ";
        
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* .backgroundTraperant{

            background-color: transparent;
            color: aqua;

        } */
        .AddbackgroundColor{

            background-color: aqua;
            color: black;
            border-radius: 8px;

        }

    </style>

</head>
<body>
    <script>


        function RemoveBackGround()
        {
            document.querySelector(".Basics").classList.remove("AddbackgroundColor");
            document.querySelector(".patrentD").classList.remove("AddbackgroundColor");
            document.querySelector(".Academic").classList.remove("AddbackgroundColor");
            document.querySelector(".Hostel").classList.remove("AddbackgroundColor");
            document.querySelector(".Contact").classList.remove("AddbackgroundColor");
            document.querySelector(".Fee").classList.remove("AddbackgroundColor");
            document.querySelector(".Profile").classList.remove("AddbackgroundColor");
            document.querySelector(".Events").classList.remove("AddbackgroundColor");
            document.querySelector(".Extra").classList.remove("AddbackgroundColor");
        }


        function parentDetails(){

        document.querySelector('.PhotoBox').innerHTML=`

            <div class='Details-Lists'>  
                <div class='_InDate1'>Parent/Guardian Name</div> 
                <div class='Semi'><?php echo $Break ?></div> 
                <div class='RespValue1'>Father Name</div> 
            </div>  
            <div class='Details-Lists'>  
                <div class='_InDate1'>Parent/Guardian Phone</div> 
                <div class='Semi'><?php echo $Break ?></div> 
                <div class='RespValue1'>+91 9176521891</div> 
            </div>
            <div class='Details-Lists'>  
                    <div class='_InDate1'>State</div> 
                    <div class='Semi'><?php echo $Break ?></div> 
                    <div class='RespValue1'><?php echo"Telangana" ?></div> 
            </div>
            <div class='Details-Lists'>  
                <div class='_InDate1'>district</div> 
                <div class='Semi'><?php  echo $Break ?></div> 
                <div class='RespValue1'><?php echo"Your District"?></div> 
            </div> 
            <div class='Details-Lists'>  
                <div class='_InDate1'>Mandal</div> 
                <div class='Semi'><?php echo $Break ?></div> 
                <div class='RespValue1'><?php echo"Your Mandal"?></div> 
            </div> 
            <div class='Details-Lists'>  
                <div class='_InDate1'>House No</div> 
                <div class='Semi'><?php echo $Break ?></div> 
                <div class='RespValue1'><?php echo"1-23-4"?></div> 
            </div> 

        `;

        RemoveBackGround()
        document.querySelector(".patrentD").classList.add("AddbackgroundColor");

        }


        function BasicDetails(){

            document.querySelector('.PhotoBox').innerHTML=`

                <div class='Details-Lists'>  
                        <div class='_InDate1'>Name</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"$name"?></div> 
                </div>
                <div class='Details-Lists'>  
                    <div class='_InDate1'>Gender</div> 
                    <div class='Semi'><?php echo $Break ?></div> 
                    <div class='RespValue1'><?php echo"Male"?></div> 
                </div> 
                <div class='Details-Lists'>  
                    <div class='_InDate1'>Roll No</div> 
                    <div class='Semi'><?php echo $Break ?></div> 
                    <div class='RespValue1'><?php echo"22SS1A0598"?></div> 
                </div>  
                <div class='Details-Lists'>  
                    <div class='_InDate1'>Phone No</div> 
                    <div class='Semi'><?php echo $Break ?></div> 
                    <div class='RespValue1'><?php echo "+91 9176521891" ?></div> 
                </div>
                <div class='Details-Lists'>  
                    <div class='_InDate1'>Address</div> 
                    <div class='Semi'><?php echo $Break ?></div> 
                    <div class='RespValue1'>California Bay Area, USA, 414</div> 
                </div> 
                <div class='Details-Lists'>  
                    <div class='_InDate1'>Date Of Birth</div> 
                    <div class='Semi'><?php echo $Break ?></div> 
                    <div class='RespValue1'>20 May, 1998</div> 
                </div> 

            `;

            RemoveBackGround()
            document.querySelector(".Basics").classList.add("AddbackgroundColor");

            }


            function Academic(){



                RemoveBackGround()
                document.querySelector(".Basics").classList.add("AddbackgroundColor");

            }


            function Academic(){



                    document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Year</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"3rd"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Total GPA</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"7.5"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Branch</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"CSE"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Phone No</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "+91 9176521891" ?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Address</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'>California Bay Area, USA, 414</div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Date Of Birth</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'>20 May, 1998</div> 
                    </div> 

                `;

                RemoveBackGround()
                document.querySelector(".Academic").classList.add("AddbackgroundColor");

            }

            function Hostel(){



                document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Year</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"3rd"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Hostel Block</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Manjeera"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Room No</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"110"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Hostel Fee Due</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "#-#-#" ?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Hosel Attendence</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "70%" ?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Hostel/Dayscholar</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Hostel" ?></div> 
                    </div> 

                `;



                RemoveBackGround()
                document.querySelector(".Hostel").classList.add("AddbackgroundColor");

            }

            function Contact(){


                document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Phone No</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"+91 94567 88931"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Phone No 2</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"+91 68889 29992"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Mail</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Abcd@gmail.com"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Whatsapp</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"+91 68889 29992"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Hosel Attendence</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "70%" ?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Hostel/Dayscholar</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Hostel" ?></div> 
                    </div> 

                `;


                RemoveBackGround()
                document.querySelector(".Contact").classList.add("AddbackgroundColor");

            }

            function Fee(){


                    document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Extra</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 

                `;


                


                RemoveBackGround()
                document.querySelector(".Fee").classList.add("AddbackgroundColor");

            }

            function Profile(){


                document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Extra</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 

                `;

                RemoveBackGround()
                document.querySelector(".Profile").classList.add("AddbackgroundColor");

            }

            function Events(){

                document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Extra</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 

                `;

                RemoveBackGround()
                document.querySelector(".Events").classList.add("AddbackgroundColor");

            }

            function Extra(){

                document.querySelector('.PhotoBox').innerHTML=`

                    <div class='Details-Lists'>  
                            <div class='_InDate1'>Extra</div> 
                            <div class='Semi'><?php echo $Break ?></div> 
                            <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>  
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo"Extra"?></div> 
                    </div>
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 
                    <div class='Details-Lists'>  
                        <div class='_InDate1'>Extra</div> 
                        <div class='Semi'><?php echo $Break ?></div> 
                        <div class='RespValue1'><?php echo "Extra" ?></div> 
                    </div> 

                `;

                RemoveBackGround()
                document.querySelector(".Extra").classList.add("AddbackgroundColor");

            }


    </script>
</body>
</html>



