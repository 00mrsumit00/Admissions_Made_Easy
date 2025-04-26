<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
           
        }
        body{
            height: 100vh; width: 100%;
        }
        
        .heading {
            text-align:center; 
            color: #666;
            text-shadow: 1px 1px 0px #FFF;
            margin:20px 0px 20px 0px
        }

        .mainBody{
            display: flex;
            margin: auto auto;
            height: 80vh;
            width: 80%;
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            justify-content: center;
            align-items: center;
        }

        .left_content{
            display: flex;
            align-items: center;
            flex-direction: column;
            margin-left: auto;
            margin-right: auto;
            font-family: 'Lato', sans-serif;
            color: #fff;
            font-weight: 400;
            font-size: medium;
        }
        .img{
            margin-bottom: 10px;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover{
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .heading1{
            padding: 5px;
            margin-bottom: 15px;
        }
        pre{
            display: grid;
            justify-items: center;
        }
        .sentence{
            width: 15rem;
        }

        .register-btn{
            display: grid;
            justify-items: center;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            background: #fff; 
            width: 70%;
        }
        .register-btn a{
            padding: 4%;
            color: #0062cc;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }

        .box{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
            margin-right: 2rem;
            height: 68vh;
            width: 70%;
            background-color: #f8f9fa;
        }

        .alert{
            color: #FFE;
            background-color: rgb(243, 85, 85);
            padding: 6px;
            width: 100%;
            border-radius: 5px;
        }
        .upperContent{
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            font-size: 1rem;
            margin-bottom: 0.5rem
        }

        .user-details{
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 35rem;
            font-size: 1rem;
        }

        .lock-logo {
            width: 5.1rem;
            height: 5.1rem;
            border: 2px solid black;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }

        input[type='text'],input[type='password']{
            width: 17rem;
            height: 2.2rem;
            padding-left: 5px;
            border-radius: 5px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .input-box{
            margin: 7px;
        }
        form .input-box span.details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        input[type='file']{
            display: none;
        }

        .file-input{
            display: block;
            border: 1px solid black;
            width: 14rem;
            font-weight: lighter;
            height: 1.7rem;
            padding-left: 5px;
            padding-top: 2px;
            border-radius: 5px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        
        .btn{
            display: grid;
            justify-items: center;
        }
        
        input[type='submit']{
            margin-top: 5%;
            border: none;
            border-radius: 1.5rem;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            padding: 5px 40px;
            font-size: 18px;
            width: 100%;
            cursor: pointer;
        }
        
        
        
        /*----------------media query----------------*/
        @media all and (min-width: 1001px) {
            .mainBody{
                width: 75%;
            }
            .sentence {
                width: 34vh;
            }
            pre {
                font-size: 16px;
            }
            .box {
                display: flex;
                align-items: center;
                justify-content: center;
                border-top-left-radius: 12% 50%;
                border-bottom-left-radius: 12% 50%;
                box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
                height: 63vh;
                margin-right: 1.5rem;
                width: 65%;
                background-color: #f8f9fa;
            }
            .user-details{
                width: 25rem;
            }
           
    
        }
        @media screen and (min-width: 831px) and (max-width: 1000px){
            .mainBody{
                height: 80vh;
            }
            .box{
                height: 70vh;
                width: 56%;
                border-top-left-radius: 15% 50%;
                border-bottom-left-radius: 15% 50%;
            }
            .user-details{
                width: 27rem;
            }
            .sentence {
                width: 13rem;
            }
        }
        @media screen and (min-width: 601px) and (max-width: 830px){
            .mainBody{
                height: 80vh;
            }
            .left_content{
                width: auto;
                height: auto;
            }
            .sentence {
                width: 11rem;
            }
            .box{
                margin-right: 1rem;
                height: 70vh;
                width: 55%;
                border-top-left-radius: 16% 50%;
                border-bottom-left-radius: 16% 50%;
            }
            .user-details{
                width: 20rem;
                font-size: 1.2rem;
            }

            input[type='text'], input[type='password']{
                width: 15rem;
                height: 2.4rem;
            }
            
        }

        @media all and (max-width: 600px){
            
            .mainBody {
                display: flex;
                flex-direction: column;
                height: 88vh;
                justify-content: space-evenly;
                flex-direction: column;
                align-items: center;
            }
            .upperHeading {
                display: none;
            }

            .mainBody .upperContent{
                display: block;
            
            }

            .box{
                height: 45vh;
                width: 80%;
                margin-right: 0;
            }

            .user-details{
                width: 23rem;
                font-size: 1rem;
            }

            input[type='password'], input[type='text'] {
                width: 47vw;
                height: 2.5rem;
            }
            .btn{
                width: 100%;
            }

            input[type='submit'] {
                width: 50%;
                height: 7vw;
            }

            .heading1{
                font-size: 20px;
            }

            pre {
                font-size: 15px;
            }
            
        }
        
    </style>
</head>
<body>
    <div class="heading">
        <h1>Set New Password</h1>
    </div>

    <div class="mainBody">
        <div class="left_content">
            <div class="img"><img src="../Image/registration.png" height="100px" width="150px" alt="img"></div>
            <div class="heading1"><h1>Welcome</h1></div>
            <div class="sentence"><pre>The best preparation <br>for tomorrow is...<br>doing your best today.</pre></div>
            <div class="register-btn"><a href="login.php">Login</a></div>
        </div>
        <div class="box">
            <form action="Validation.php" id="setPasswdForm" method="POST">
                <div class="user-details">
                    <div class="upperContent">
                        <div class="lock-logo">
                            <img src="../Image/lock.png" width="80px" height="80px" alt="">
                        </div>
                        <div id="error">
    
                        </div>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" placeholder="Enter your username" name="username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">New Password</span>
                        <input type="password" placeholder="Enter new password" name="newPasswd" required>
                    </div>
                    
                    <div class="btn">
                        <input type="submit" id="setPasswd" name="setPasswd" value="Submit">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // JS Script for OTP Verification
        $(document).ready(function () {
            $("#setPasswd").click(function () {
                $.post($("#setPasswdForm").attr("action"),
                $("#setPasswdForm :input").serializeArray(),
                function (info) {
                    $("#error").empty();
                    $("#error").html(info);
                });
                return false;
            });
        });
        </script>
</body>
</html>

