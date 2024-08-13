

<?php

        require 'Server.php';
        
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>In Out</title>
    <link rel="stylesheet" href="Inout1245.css" />
  </head>
  <body>

  <div class="MenuBar">

  <div class="ViewAllDetails">
    <span class="DetalisListsHeading">
      See All Details
    </span>

  </div>


        <form action="http://localhost/PHPPROGRAMS/InOutProject/PrintSL.php" method="post">       
               
            <button class="TatalSTudents DetalisLists" src="" >

              Show All Students Details

            </button>
        </form>


    

    <button class="TotalStaffs DetalisLists">
    Show All Staff Details
      
    </button>

    <button class="TotalStaffs DetalisLists">
    Show All Students Details
      
    </button>

    <button class="TotalStaffs DetalisLists">
    See Other Details
      
    </button>

        

  </div>



  <div class="MenuBar2">

  <div class="ViewAllDetails">
    <span class="DetalisListsHeading">
      See All Details
    </span>

  </div>


        <form action="http://localhost/PHPPROGRAMS/InOutProject/PrintSL.php" method="post">       
               
            <button class="TatalSTudents DetalisLists" src="" >

              Show All Students Details

            </button>
        </form>


    

    <button class="TotalStaffs DetalisLists">
    See College Map
      
    </button>

    <button class="TotalStaffs DetalisLists">
    See Library Details
      
    </button>

    <button class="TotalStaffs DetalisLists">
    See Other Details
      
    </button>

        

  </div>
    

    

    <header>
        <button
          class="ThreeLinesThese"
          onclick="
                rotate1();
                rotate2();
                rotate3();
                display();
            "
                >
          <div class="r1 r"  id="red"></div>
          <div class="r2 r" id="red"></div>
          <div class="r3 r" id="red"></div>
        </button>
      <h1>Campus Flow</h1>
        <button
          class="Map"
          onclick="
                
                sisplay();
            "
                >
          <img class="Map-img1" src="images/Map.png" alt="">
          <img class="Map-img2" src="images/Red-Wrong.png" alt="">
        </button>
    </header>

    <nav>

      <a class="underLine1" href="#" onclick="BoysOuting()">BoysOuting</a>
      <a class="underLine2" href="#" onclick="GirlsOuting()">GirlsOuting</a>
      <a class="underLine3" href="#" onclick="BoysHome()">BoysHome</a>
      <a class="underLine4" href="#" onclick="GirlsHome()">GirlsHome</a>
      <a class="underLine5" href="#" onclick="StaffInOut()">Staff</a>
      <a class="underLine6" href="#" onclick="VisitorsInOut()">Visitors</a>


      

      <a href="#" onclick="">

        <form action="http://localhost/PHPPROGRAMS/InOutProject/Search.php" method="post">
            <input class="FinalSerch" type="text"  name="SearchId" placeholder="Enter Roll Number   "/> 
            <button id="SearchIcon" onclick="Search()">&#x1F50D</button>
        </form>
      </a>

      
      
    </nav>


    
    <p id="datetime-display" class="Timer"></p>
    <!-- <button onclick="ResetApp()">Reset App</button> 
   <button onclick="Ghist()">Hist</button>
    <button onclick="Gcheck()">Check</button> 
    <button onclick="StudentsInList()">In list</button>
    <button onclick="StudentsOutList()">Out list</button> -->
    <br />
    <div class="SetTitle"></div>
    <div class="Main"><img  class="JntuLogo"src="images/jntuhces.png" alt=""></div>
    <script src="inout96.js"></script>
  </body>

  <!-- <form action="http://localhost/PHPPROGRAMS/InOutProject/BOOPrint.php" method="post">

  
    <button>submit</button>

  </form> -->
  
</html>


