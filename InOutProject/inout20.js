let MenuCount=0;
let Countgoing=0;
let CountComing = 0;

let MenuBar=0
let  MenuBar2=0;

function rotate1() {
  var element = document.querySelector(".r1");
  element.classList.toggle("r11");
}
function rotate2() {
  var element = document.querySelector(".r2");
  element.classList.toggle("r22");
}
function rotate3() {
  var element = document.querySelector(".r3");
  element.classList.toggle("r33");
}
function display() {
  var element = document.querySelector(".MenuBar");
  element.classList.toggle("HideMenuBar");

  var element = document.querySelector(".ThreeLinesThese");
  element.classList.toggle("ChangeMenuButton");

  MenuBar=MenuBar+1;

  if(MenuBar %2==0)
  {

    setTimeout(() => {

      document.querySelector(".MenuBar").style=`
      display:none;
      `;    
    }, 120);


  }
  else{

    document.querySelector(".MenuBar").style=`
      display:block;
      `;


  }

  
}



function sisplay() {

  MenuBar2=MenuBar2+1;

  var element = document.querySelector(".MenuBar2");
  element.classList.toggle("HideMenuBar2");

  var element1 = document.querySelector(".Map");
  element1.classList.toggle("Map2");

  
  


  if(MenuBar2 %2==0)
    {
  
      document.querySelector(".Map-img1").style=`display:block`;
      document.querySelector(".Map-img2").style=`display:none`;
      setTimeout(() => {
  
        document.querySelector(".MenuBar2").style=`
        display:none;
        `;    
      }, 120);
  
  
    }
    else{

      document.querySelector(".Map-img2").style=`display:block`;
      document.querySelector(".Map-img1").style=`display:none`;
  
      document.querySelector(".MenuBar2").style=`
        display:block;
        `;
  
  
    }

}


function BoysOuting()
{

  resetUnderLine(); 
  document.querySelector(".underLine1").classList.add("man1");
  document.querySelector(".SetTitle").innerHTML=`Boys Outing`;
  MenuCount=1;
  MainDiv();
}

function BoysHome()
{

  resetUnderLine(); 
  document.querySelector(".underLine3").classList.add("man3");
  document.querySelector(".SetTitle").innerHTML=`Boys Home`;
  MenuCount=3;
  MainDiv();
}




function GirlsOuting()
{

  resetUnderLine(); 
  document.querySelector(".underLine2").classList.add("man2");
  document.querySelector(".SetTitle").innerHTML=`Girls Outing`;
  MenuCount=2;
  MainDiv();
}

function GirlsHome()
{

  resetUnderLine(); 
  document.querySelector(".underLine4").classList.add("man4");
  document.querySelector(".SetTitle").innerHTML=`Girls Home`;
  MenuCount=4;
  MainDiv();
}


function StaffInOut()
{

  resetUnderLine(); 
  document.querySelector(".underLine5").classList.add("man5");
  document.querySelector(".SetTitle").innerHTML=`Staff Home`;
  MenuCount=5;
  MainDiv();

}

function VisitorsInOut()
{

  resetUnderLine(); 
  document.querySelector(".underLine6").classList.add("man6");
  document.querySelector(".SetTitle").innerHTML=`Visitors In OUT`;
  MenuCount=6;
  MainDiv();

}





function resetUnderLine()
{
  document.querySelector(".underLine1").classList.remove("man1");
  document.querySelector(".underLine2").classList.remove("man2");
  document.querySelector(".underLine3").classList.remove("man3");
  document.querySelector(".underLine4").classList.remove("man4");
  document.querySelector(".underLine5").classList.remove("man5");
  document.querySelector(".underLine6").classList.remove("man6");

}

function MainDiv()
{



  if(MenuCount===1)
  {
   
    document.querySelector(".Main").innerHTML=`

 
  <form action="http://localhost/PHPPROGRAMS/InOutProject/TBPrint.php" method="post">  

  <button   >List</button>

  </form>


  <form action="http://localhost/PHPPROGRAMS/InOutProject/BOOPrint.php" method="post">

    <button   >Check</button>

  </form>

  <form action="http://localhost/PHPPROGRAMS/InOutProject/BOHPrint.php" method="post">

  <button >History</button>

  </form>
  `;
  }
  else if(MenuCount===3)
  {


    document.querySelector(".Main").innerHTML=`

 
  <form action="http://localhost/PHPPROGRAMS/InOutProject/TBPrint.php" method="post">  

  <button   >List</button>

  </form>


  <form action="http://localhost/PHPPROGRAMS/InOutProject/BHOPrint.php" method="post">

    <button   >Check</button>

  </form>

  <form action="http://localhost/PHPPROGRAMS/InOutProject/BHHPrint.php" method="post">

  <button >History</button>

  </form>
  `;
    

  }



  
      else if(MenuCount===2)
      {
      
        document.querySelector(".Main").innerHTML=`

    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/TGPrint.php" method="post">  

      <button   >List</button>

      </form>


      <form action="http://localhost/PHPPROGRAMS/InOutProject/GOOPrint.php" method="post">

        <button   >Check</button>

      </form>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/GOHPrint.php" method="post">

      <button >History</button>

      </form>
      `;
      }
      else if(MenuCount===4)
      {


        document.querySelector(".Main").innerHTML=`

    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/TGPrint.php" method="post">  

      <button   >List</button>

      </form>


      <form action="http://localhost/PHPPROGRAMS/InOutProject/GHOPrint.php" method="post">

        <button   >Check</button>

      </form>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/GHHPrint.php" method="post">

      <button >History</button>

      </form>
      `;
        

      }

      else if(MenuCount===5 )
      {


        document.querySelector(".Main").innerHTML=`

    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/TSPrint.php" method="post">  

      <button   >List</button>

      </form>


      <form action="http://localhost/PHPPROGRAMS/InOutProject/SOPrint.php" method="post">

        <button   >Check</button>

      </form>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/SHPrint.php" method="post">

      <button >History</button>

      </form>
      `;
        

      }




      else if(MenuCount===6 )
      {


        document.querySelector(".Main").innerHTML=`


      <form action="http://localhost/PHPPROGRAMS/InOutProject/VIPrint.php" method="post">

        <button   >In People</button>

      </form>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/VHPrint.php" method="post">

      <button >History</button>

      </form>
      `;
        

      }




}





function BackButton() {

  console.log(MenuCount);

  


  if(MenuCount===1)
    {

    document.querySelector(".Main").innerHTML = `<div class="Main">
      
  <form action="http://localhost/PHPPROGRAMS/InOutProject/TBPrint.php" method="post">  
    
  <button   >List</button>

  </form>


      <form action="http://localhost/PHPPROGRAMS/InOutProject/BOOPrint.php" method="post">

      <button   >Check</button>

      </form>

      


      
      <form action="http://localhost/PHPPROGRAMS/InOutProject/BOHPrint.php" method="post">

      <button onclick="History()">History</button>

      </form>
    </div>`;

    }

    if(MenuCount===3)
    {


      document.querySelector(".Main").innerHTML=`

 
      <form action="http://localhost/PHPPROGRAMS/InOutProject/TBPrint.php" method="post">  
    
      <button   >List</button>
    
      </form>
    
    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/BHOPrint.php" method="post">
    
        <button >Check</button>
    
      </form>
    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/BHHPrint.php" method="post">
    
      <button >History</button>
    
      </form>
      `;



    }



    if(MenuCount===2)
    {

    document.querySelector(".Main").innerHTML = `<div class="Main">
      
  <form action="http://localhost/PHPPROGRAMS/InOutProject/TGPrint.php" method="post">  
    
  <button   >List</button>

  </form>



      <form action="http://localhost/PHPPROGRAMS/InOutProject/GOOPrint.php" method="post">

      <button   >Check</button>

      </form>

      


      
      <form action="http://localhost/PHPPROGRAMS/InOutProject/GOHPrint.php" method="post">

      <button onclick="History()">History</button>

      </form>
    </div>`;

    }

    if(MenuCount===4)
    {


      document.querySelector(".Main").innerHTML=`

 
      <form action="http://localhost/PHPPROGRAMS/InOutProject/TGPrint.php" method="post">  
    
      <button   >List</button>
    
      </form>
    
    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/GHOPrint.php" method="post">
    
        <button >Check</button>
    
      </form>
    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/GHHPrint.php" method="post">
    
      <button >History</button>
    
      </form>
      `;



    }



    if(MenuCount===5)
    {


      document.querySelector(".Main").innerHTML=`

 
      <form action="http://localhost/PHPPROGRAMS/InOutProject/TSPrint.php" method="post">  
    
      <button   >List</button>
    
      </form>

    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/SOPrint.php" method="post">
    
        <button >Check</button>
    
      </form>
    
      <form action="http://localhost/PHPPROGRAMS/InOutProject/SHPrint.php" method="post">
    
      <button >History</button>
    
      </form>
      `;



    }


    else if(MenuCount===6 )
      {


        document.querySelector(".Main").innerHTML=`


      <form action="http://localhost/PHPPROGRAMS/InOutProject/VIPrint.php" method="post">

        <button   >In People</button>

      </form>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/VHPrint.php" method="post">

      <button >History</button>

      </form>
      `;
        

      }






    Countgoing = 0;
    CountComing = 0;
}

  

function StudentsList() {
    let StudentsList1;
    if(MenuCount===1)
    {
      StudentsList1;
    }
  
  }
  
        
