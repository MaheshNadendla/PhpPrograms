
// let count=0;
// function Color(){
//     // if(count%2==0)
//     //     document.querySelector('.Road').style=`background-color: yellow;
    
//     //     border: solid blue 10px;
//     //     `;
//     // else
//     // document.querySelector('.Road').style=`background-color: blue;

//     // border: solid yellow 10px;

//     // `;
//     count++;

// //    document.createElement('.mass').innerHTML="hello";
// }
let val=276;
let val1=276;
let val2=300;

console.log(val1);



function Degree() {
    const currentDateTime = new Date();
    const date = currentDateTime.toDateString();
    let hours = currentDateTime.getHours();
    let minutes = currentDateTime.getMinutes();

    let seconds = currentDateTime.getSeconds();
    let s=seconds;
    let m=minutes;


    
    // Convert to 12-hour format
    var meridiem = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12 || 12; // Convert hour 0 to 12

    // Add leading zeros to minutes and seconds if they are less than 10
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    val2=0;
    for(let i=3;i<=12;i++)
    {
        
        if(hours==i)
        {
            break;
        }
        val2=val2+30;
    }

   


    if(hours==1)
    {
        val2=300;
    }
    else if(hours==2)
    {
        val2=330;
    }
    else if(hours==3)
    {
        val2=0;
    }
    

    document.querySelector('.Sec').style=`rotate:${val2}deg;`;
  

    val=6;


    if(s>=15)
    {

        for(let j=15;j<=60;j++)
        {
            
            if(s==j)
            {
                break;
            }
            val=val+6;
        }
    }


    else{

        val=360;
        for(let j=14;j>=1;j--)
        {
            
            if(s==j)
            {
                break;
            }
            val=val-6;
        }

    }

    console.log(val2);
    console.log(val);
    document.querySelector('.Minute').style=`rotate:${val}deg;`;

    val1=0;


    if(m>=15)
    {

        for(let k=15;k<=60;k++)
        {
            
            if(m==k)
            {
                break;
            }
            val1=val1+6;
        }
    }


    else{

        val=360;
        for(let k=14;k>=1;k--)
        {
            
            if(m==k)
            {
                break;
            }
            val1=val1-6;
        }

    }

    console.log(val2);
    console.log(val);
    document.querySelector('.Min').style=`rotate:${val1}deg;`;


}   

Degree() ;





function Rotate2()
{
    document.querySelector('.Sec').style=`rotate:${val2}deg;`;
    val2+=30;
    if(val2==360)
        val2=0;
}


function Rotate1()
{
    document.querySelector('.Min').style=`rotate:${val1}deg;`;
    val1+=6;
    if(val1==360)
        val1=0;
}

function Rotate()
{
    document.querySelector('.Minute').style=`rotate:${val}deg;`;
    val+=6;
    if(val==360)
        val=0;
}

function DateTime() {
    const currentDateTime = new Date();
    const date = currentDateTime.toDateString();
    let hours = currentDateTime.getHours();
    let minutes = currentDateTime.getMinutes();
    let seconds = currentDateTime.getSeconds();


    
    // Convert to 12-hour format
    var meridiem = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12 || 12; // Convert hour 0 to 12

    // Add leading zeros to minutes and seconds if they are less than 10
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;
  
    const formattedDateTime = hours + ":" + minutes + ":" + seconds+" "+ meridiem;
    return formattedDateTime;
  }

function DgClock()
{
    let n=DateTime();
    document.querySelector('.DigClo').innerHTML=`${n}`;
}

setInterval(DgClock, 1000);


// setInterval(Color, 1000);

setInterval(Rotate, 1000);

setInterval(Rotate1, 60000);

setInterval(Rotate2, 3600000);