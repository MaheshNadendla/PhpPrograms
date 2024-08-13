let MenuCount=0;
let Countgoing=0;
let CountComing = 0;

let MenuBar=0;
let MenuBar2=0;


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



// function sotate1() {
//   var element = document.querySelector(".s1");
//   element.classList.toggle("s11");
// }
// function sotate2() {
//   var element = document.querySelector(".Map");
//   element.classList.toggle("Map2");
// }
// function sotate3() {
//   var element = document.querySelector(".s3");
//   element.classList.toggle("s33");
// }

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

  <button onclick="InComing()">In</button>
  <button onclick="OutGoing()">Out</button>

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

  <button onclick="InComing()">In</button>
  <button onclick="OutGoing()">Out</button>

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

      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>

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

      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>

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

      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>

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

    

      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/VIPrint.php" method="post">

        <button   >In People</button>

      </form>

      <form action="http://localhost/PHPPROGRAMS/InOutProject/VHPrint.php" method="post">

      <button >History</button>

      </form>
      `;
        

      }




}

function InComing() {
    



  
    if(MenuCount===1)
    {
      document.querySelector(".Main").innerHTML = `



      <div class="IncomingDiv">

        <span id="ReverseBtn" class="IncomingBackButton" onclick=BackButton()>   
          <img class="Reverse" src="images/BackBtn.png" alt="">  
        </span>

        <form action="http://localhost/PHPPROGRAMS/InOutProject/BOI.php" method="post">

        <input class="InputBox1"  name="BoysOutingIn" placeholder="Enter Roll No"/> 

        <span class="DisplayError1">

        </span> 

        <Button class="IncomingSubmitButton" onclick=Submit1()>
            Submit
        </Button> 

        </form>

      </div>
      
      `;
    } 

    else if(MenuCount===3)
    {
      document.querySelector(".Main").innerHTML = `



      <div class="IncomingDiv">

        <span id="ReverseBtn" class="IncomingBackButton" onclick=BackButton()>   
          <img class="Reverse" src="images/BackBtn.png" alt="">  
        </span>

        <form action="http://localhost/PHPPROGRAMS/InOutProject/BHI.php" method="post">

        <input class="InputBox1"  name="BoysHomeIn" placeholder="Enter Roll No"/> 

        <span class="DisplayError1">

        </span> 

        <Button class="IncomingSubmitButton" onclick=Submit1()>
            Submit
        </Button> 

        </form>

      </div>
      
      `;
    } 



    if(MenuCount===2)
    {
      document.querySelector(".Main").innerHTML = `



      <div class="IncomingDiv">

        <span id="ReverseBtn" class="IncomingBackButton" onclick=BackButton()>   
          <img class="Reverse" src="images/BackBtn.png" alt="">  
        </span>

        <form action="http://localhost/PHPPROGRAMS/InOutProject/GOI.php" method="post">

        <input class="InputBox1"  name="GirlsOutingIn" placeholder="Enter Roll No"/> 

        <span class="DisplayError1">

        </span> 

        <Button class="IncomingSubmitButton" onclick=Submit1()>
            Submit
        </Button> 
 
        </form>

      </div>
      
      `;
    } 

    else if(MenuCount===4)
    {
      document.querySelector(".Main").innerHTML = `



      <div class="IncomingDiv">

        <span id="ReverseBtn" class="IncomingBackButton" onclick=BackButton()>   
          <img class="Reverse" src="images/BackBtn.png" alt="">  
        </span>

        <form action="http://localhost/PHPPROGRAMS/InOutProject/GHI.php" method="post">

        <input class="InputBox1"  name="GirlsHomeIn" placeholder="Enter Roll No"/> 

        <span class="DisplayError1">

        </span> 

        <Button class="IncomingSubmitButton" onclick=Submit1()>
            Submit
        </Button> 

        </form>

      </div>
      
      `;
    } 




    else if(MenuCount===5)
    {
      document.querySelector(".Main").innerHTML = `



      <div class="IncomingDiv">

        <span id="ReverseBtn" class="IncomingBackButton" onclick=BackButton()>   
          <img class="Reverse" src="images/BackBtn.png" alt="">  
        </span>

        <form action="http://localhost/PHPPROGRAMS/InOutProject/SI.php" method="post">

        <input class="InputBox1"  name="StaffIn" placeholder="Enter Roll No"/> 

        <span class="DisplayError1">

        </span> 

        <Button class="IncomingSubmitButton" onclick=Submit1()>
            Submit
        </Button> 

        </form>

      </div>
      
      `;
    } 



    else if(MenuCount===6)
    {
      document.querySelector(".Main").innerHTML = `



      <div class="IncomingDiv">

        <span id="ReverseBtn" class="IncomingBackButton" onclick=BackButton()>   
          <img class="Reverse" src="images/BackBtn.png" alt="">  
        </span>

        <form action="http://localhost/PHPPROGRAMS/InOutProject/VI.php" method="post">

        <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">

        <input class="InputBox1"  name="VisitorID" placeholder="Enter RD SID"/> 

        <input class="InputBox1"  name="NAME" placeholder="Enter Person Name"/> 

        <input class="InputBox1"  name="PHONE" placeholder="Enter Phone No"/> 

        <input class="InputBox1"  name="PLACE" placeholder="Enter Place"/> 

        </span>

        <span class="DisplayError1">

        </span> 

        <Button class="IncomingSubmitButton" onclick=Submit1()>
            Submit
        </Button> 

        </form>

      </div>
      
      `;
    } 








   
  }


  function OutGoing() {

    if(MenuCount===1)
    {
      document.querySelector(".Main").innerHTML = `
      <div class="OutgoingDiv">
            <span id="ReverseBtn" class="OutgoingBackButton" onclick=BackButton()>
                  <img class="Reverse" src="images/BackBtn.png" alt=""> 
            </span>

            <form action="http://localhost/PHPPROGRAMS/InOutProject/BOO.php" method="post">
            

            <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">

              <input class="InputBox2" name="BoysOutingOutRoll" placeholder="Enter Roll No"/> 
              <input class="InputBox4" name="BoysOutingOutPlace" placeholder="Enter Place"/> 
            
            </span>


            <span class="DisplayError2">
            </span> 
            
            <Button class="IncomingSubmitButton"  onclick="Submit2()">
                  Submit
            </Button> 

            </form>

        </div>`;
    } 

    else if(MenuCount===3)
    {
      document.querySelector(".Main").innerHTML = `
      <div class="OutgoingDiv">
            <span id="ReverseBtn" class="OutgoingBackButton" onclick=BackButton()>
                  <img class="Reverse" src="images/BackBtn.png" alt=""> 
            </span>

            <form action="http://localhost/PHPPROGRAMS/InOutProject/BHO.php" method="post">
            

            <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">

              <input class="InputBox2" name="BoysHomeOutRoll" placeholder="Enter Roll No"/> 
              <input class="InputBox4" name="BoysHomeOutPlace" placeholder="Enter Place"/> 
            
            </span>


            <span class="DisplayError2">
            </span> 
            
            <Button class="IncomingSubmitButton"  onclick="Submit2()">
                  Submit
            </Button> 

            </form>

        </div>`;
    } 



    if(MenuCount===2)
    {
      document.querySelector(".Main").innerHTML = `
      <div class="OutgoingDiv">
            <span id="ReverseBtn" class="OutgoingBackButton" onclick=BackButton()>
                  <img class="Reverse" src="images/BackBtn.png" alt=""> 
            </span>

            <form action="http://localhost/PHPPROGRAMS/InOutProject/GOO.php" method="post">
            

            <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">

              <input class="InputBox2" name="GirlsOutingOutRoll" placeholder="Enter Roll No"/> 
              <input class="InputBox4" name="GirlsOutingOutPlace" placeholder="Enter Place"/> 
            
            </span>


            <span class="DisplayError2">
            </span> 
            
            <Button class="IncomingSubmitButton"  onclick="Submit2()">
                  Submit
            </Button> 

            </form>

        </div>`;
    } 

    else if(MenuCount===4)
    {
      document.querySelector(".Main").innerHTML = `
      <div class="OutgoingDiv">
            <span id="ReverseBtn" class="OutgoingBackButton" onclick=BackButton()>
                  <img class="Reverse" src="images/BackBtn.png" alt=""> 
            </span>

            <form action="http://localhost/PHPPROGRAMS/InOutProject/GHO.php" method="post">
            

            <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">

              <input class="InputBox2" name="GirlsHomeOutRoll" placeholder="Enter Roll No"/> 
              <input class="InputBox4" name="GirlsHomeOutPlace" placeholder="Enter Place"/> 
            
            </span>


            <span class="DisplayError2">
            </span> 
            
            <Button class="IncomingSubmitButton"  onclick="Submit2()">
                  Submit
            </Button> 

            </form>

        </div>`;
    } 


    else if(MenuCount===5)
    {
      document.querySelector(".Main").innerHTML = `
      <div class="OutgoingDiv">
            <span id="ReverseBtn" class="OutgoingBackButton" onclick=BackButton()>
                  <img class="Reverse" src="images/BackBtn.png" alt=""> 
            </span>

            <form action="http://localhost/PHPPROGRAMS/InOutProject/SO.php" method="post">
            

            <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">

              <input class="InputBox2" name="StaffOutRoll" placeholder="Enter Roll No"/> 
              <input class="InputBox4" name="StaffOutPlace" placeholder="Enter Place"/> 
            
            </span>


            <span class="DisplayError2">
            </span> 
            
            <Button class="IncomingSubmitButton"  onclick="Submit2()">
                  Submit
            </Button> 

            </form>

        </div>`;
    } 

    else if(MenuCount===6)
    {
      document.querySelector(".Main").innerHTML = `
      <div class="OutgoingDiv">
            <span id="ReverseBtn" class="OutgoingBackButton" onclick=BackButton()>
                  <img class="Reverse" src="images/BackBtn.png" alt=""> 
            </span>

            <form action="http://localhost/PHPPROGRAMS/InOutProject/VO.php" method="post">
            

            <span class="TwoSearches" style="display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;">
            
              <input class="InputBox2" name="VID" placeholder="Enter VID"/> 

              <input class="InputBox4" name="VName" placeholder="Enter VName"/> 
            
            </span>


            <span class="DisplayError2">
            </span> 
            
            <Button class="IncomingSubmitButton"  onclick="Submit2()">
                  Submit
            </Button> 

            </form>

        </div>`;
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

      <button onclick="InComing()">In</button>



      <button onclick="OutGoing()">Out</button>



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
    
      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>
    
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

      <button onclick="InComing()">In</button>



      <button onclick="OutGoing()">Out</button>



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
    
      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>
    
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
    
      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>
    
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

    

      <button onclick="InComing()">In</button>
      <button onclick="OutGoing()">Out</button>

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
  
        
