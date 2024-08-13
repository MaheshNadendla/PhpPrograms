<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />

    <style>
      html {
        height: 100%;
      }
      body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: linear-gradient(#141e30, #243b55);
      }

      .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(0, 0, 0, 0.5);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
        border-radius: 10px;
      }

      .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #fff;
        text-align: center;
      }

      .login-box .user-box {
        position: relative;
      }

      .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
      }
      .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: 0.5s;
      }

      .login-box .user-box input:focus ~ label,
      .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #03e9f4;
        font-size: 12px;
      }

      .login-box form button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        background-color: transparent;

        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        margin-top: 40px;
        letter-spacing: 4px;
      }

      .login-box button:hover {
        background: #03e9f4;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03e9f4,
         0 0 25px #03e9f4;
        /* , 0 0 25px #03e9f4
        , 0 0 50px #03e9f4,
          0 0 100px #03e9f4; */
      }

      .login-box button span {
        position: absolute;
        display: block;
      }

      .login-box button span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03e9f4);
        animation: btn-anim1 1s linear infinite;
      }

      /* @keyframes btn-anim1 {
        0% {
          left: -100%;
        }
        50%,
        100% {
          left: 100%;
        }
      } */

      .login-box button span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(180deg, transparent, #03e9f4);
        animation: btn-anim2 1s linear infinite;
        animation-delay: 0.25s;
      }

      /* @keyframes btn-anim2 {
        0% {
          top: -100%;
        }
        50%,
        100% {
          top: 100%;
        }
      } */

      .login-box button span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(270deg, transparent, #03e9f4);
        animation: btn-anim3 1s linear infinite;
        animation-delay: 0.5s;
      }

      @keyframes btn-anim3 {
        0% {
          right: -100%;
        }
        50%,
        100% {
          right: 100%;
        }
      }

      .login-box button span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        background: linear-gradient(360deg, transparent, #03e9f4);
        animation: btn-anim4 1s linear infinite;
        animation-delay: 0.75s;
      }

      @keyframes btn-anim4 {
        0% {
          bottom: -100%;
        }
        50%,
        100% {
          bottom: 100%;
        }
      }


      .ErrorMessageDiv {
        display: flex;
        justify-content: center;
      }

      .ErrorMessage {
        background-color: white;
        padding: 10px;
        border-radius: 4px;
        margin-right: 4px;
      }
      .TheBox {
        color: white;
        padding: 4px;
        padding-right: 10px;
        padding-left: 10px;
        background-color: orangered;
        border-radius: 2px;
        position: relative;
        z-index: 100;
      }
      .TheBox2 {
        display: inline-block;
        margin-right: -8px;
        min-width: 20px;
        min-height: 20px;
        background-color: white;
        transform: rotate(45deg);
        position: relative;
        right: 22px;
        bottom: 12px;
      }
      .ErrorInner {
        display: none;
      }

      .CheckeerDetails{
        display: flex;
        justify-content:center;

        position: relative;

        top:160px;


      }

      .CheckeerDetails button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        background-color: transparent;
        color: #03e9f4;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: 0.5s;
        margin-top: 40px;
        letter-spacing: 4px;
      }


      @media only screen and (max-width:360px){

        html{

          scale: 0.7;

        }

      .CheckeerDetails{
        display: flex;
        justify-content:center;

        position: relative;

        top:10px;


      }

      }

      
    </style>
  </head>
  <body>
    <div class="login-box">
      <h2>Login</h2>
      <form onsubmit=" return SubmitBtn()" action="inout.php">
        <div class="user-box">
          <input
            type="text"
            name=""
            required=""
            onclick="Error()"
            class="UsernameData"
          />
          <label>Username</label>
        </div>
        <div class="user-box">
          <input
            type="password"
            name=""
            required=""
            onclick="Error()"
            class="PasswordData"
          />
          <label>Password</label>
        </div>
        <div class="ErrorMessageDiv">
          <div id="log" class="ErrorInner">
            <span class="ErrorMessage">
              <span class="TheBox">!</span
              ><span class="TheBox2"></span>Incorrect Email or Password</span
            >
          </div>
        </div>

        <button onclick="SubmitBtn()">
          <!-- <span></span>
          <span></span>
          <span></span>
          <span></span> -->
          Submit
        </button>
      </form>

    </div>

    <form action="InoutPrint.php">

      <div class="CheckeerDetails">

        <button>
            SEE DETAILS
        </button>

      <div>


      </form>


    <script>
      
      let count = 0;
      function SubmitBtn() {
        count++;
        let x = document.querySelector(".UsernameData").value;
        let y = document.querySelector(".PasswordData").value;
        const con = document.getElementById("log");

        if (x === "123" && y === "456") {
          return true;
        } else if (x === "012" && y === "345") {
          return true;
        } else {
          if (count % 2 != 0 && x != "" && y != "") {
            con.style.display = "block";
          }

          return false;
        }
      }
      function Error() {
        const con = document.getElementById("log");

        con.style.display = "none";
      }
    </script>
  </body>
</html>

