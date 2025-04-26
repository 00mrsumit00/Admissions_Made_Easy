<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }
        
        body {
            display: flex;
            height: 100vh; 
            width: 100%;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f0f2f5;
        }

        body .UpperHeading {
            display: none;
        }

        .mainBody {
            display: flex;
            margin: auto auto;
            height: 85vh;
            width: 80%;
            background: linear-gradient(135deg, #3931af, #00c6ff);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
            justify-content: space-evenly;
            align-items: center;
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .heading {
            font-family: 'Edu TAS Beginner', cursive;
            font-size: 2vw;
            margin-bottom: 15px;
            color: #444;
            text-shadow: 1px 1px 0px #FFF;
            text-align: center;
        }
        
        .left_content {
            display: flex;
            width: 40%;
            align-items: center;
            flex-direction: column;
            font-family: 'Lato', sans-serif;
            color: #fff;
            font-weight: 400;
            font-size: medium;
            padding: 20px;
        }
        
        .img {
            margin-bottom: 10px;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
            filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.2));
        }

        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        
        .heading1 {
            padding: 5px;
            margin-bottom: 15px;
        }
        
        .heading1 h1 {
            font-size: 3.2vw;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .sentence {
            width: 100%;
        }
        
        pre {
            display: flex;
            justify-content: center;
            font-family: 'Lato', sans-serif;
            line-height: 1.6;
            opacity: 0.9;
        }

        .box {
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            margin-right: 2rem;
            height: 75vh;
            width: 60%;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }
        
        .user-details {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 100%;
        }

        .user-details form {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-evenly;
            width: 45vw;
            font-size: 1rem;
        }

        .input-box {
            margin: 10px;
            position: relative;
            width: 30vw;
        }
        
        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
            color: #555;
            transition: color 0.3s ease;
        }
        
        input[type='text'], input[type='password'], input[type='tel'], input[type='email'] {
            width: 100%;
            height: 2.5rem;
            padding: 0 35px 0 35px;
            border-radius: 8px;
            border: 1px solid #ddd;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }
        
        input[type='text']:focus, input[type='password']:focus, input[type='tel']:focus, input[type='email']:focus {
            outline: none;
            border-color: #0062cc;
            box-shadow: 0 0 5px rgba(0,98,204,0.3);
        }
        
        .input-icon {
            position: absolute;
            left: 10px;
            top: 35px;
            color: #999;
            transition: color 0.3s ease;
        }
        
        .password-toggle {
            position: absolute;
            right: 10px;
            top: 35px;
            color: #999;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        
        .validation-message {
            font-size: 0.8rem;
            margin-top: 5px;
            color: #e74c3c;
            height: 15px;
            display: none;
            transition: all 0.3s ease;
        }
        
        .btn {
            display: grid;
            justify-items: center;
            width: 100%;
            margin-top: 15px;
        }
        
        .register-btn {
            display: grid;
            justify-items: center;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            width: 60%;
            padding: 8px;
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        
        .register-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }
        
        .register-btn a {
            padding: 4%;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
        }
        
        input[type='submit'] {
            margin-top: 4%;
            border: none;
            border-radius: 8px;
            padding: 2.5%;
            background: linear-gradient(to right, #0062cc, #0097ff);
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        
        input[type='submit']:hover {
            background: linear-gradient(to right, #004e9e, #0085e6);
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0,0,0,0.15);
        }
        
        input[type='submit']:active {
            transform: translateY(-1px);
        }
        
        .alert {
            position: absolute;
            color: #fff;
            background-color: rgb(243, 85, 85);
            padding: 10px;
            width: 90%;
            border-radius: 8px;
            margin-top: 7vw;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .upperContent {
            display: flex;
            position: relative;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 30vw;
        }
        
        .field-label {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        
        .field-status {
            font-size: 0.7rem;
            color: #999;
            transition: color 0.3s ease;
        }
        
        .error {
            background-color: rgba(231, 76, 60, 0.9);
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            width: 90%;
            text-align: center;
            display: none;
            animation: fadeIn 0.5s;
        }
        
        .success {
            background-color: rgba(46, 204, 113, 0.9);
            color: white;
            padding: 10px 15px;
            border-radius: 8px;
            margin-bottom: 15px;
            width: 90%;
            text-align: center;
            display: none;
            animation: fadeIn 0.5s;
        }
        
        .remember-me {
            margin-top: 10px;
            width: 60%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .checkbox-container {
            display: flex;
            align-items: center;
        }
        
        .checkbox-container input {
            margin-right: 5px;
        }
        
        .forgot-password {
            font-size: 0.85rem;
            color: #0062cc;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .forgot-password:hover {
            color: #004e9e;
            text-decoration: underline;
        }

        
        /*----------------verifyUser Model----------------*/


        .verifyUser{
            display: flex;
            align-items: center;
            z-index: 999999;
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
            visibility: hidden;
            opacity: 0;
            transition: .3s ease;
        }

        .verifyUser.active{
            visibility: visible;
            opacity: 1;
        }

        .lock-logo {
            display: flex;
            align-items: center;
            width: 5.1rem;
            height: 5.1rem;
            border: 2px solid black;
            border-radius: 50%;
            margin-bottom: 0.5rem;
        }

        .verifyUser-body{
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            position: relative;
            background: #fff;
            width: 44vw;
            max-height: fit-content;
            margin: 20px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0 0 0 / 10%);
            transform: translateZ(-50px);
            transition: 1s ease;
        }

        .verifyUser.active .verifyUser-body{
            transform: translate(50%);
        }

        .upperContent_forgotPasswd{
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .verifyUser-body .modal-close-btn{
            position: absolute;
            top: 0;
            right: 0;
            margin: 20px;
            cursor: pointer;
        }
        .verifies-details form{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .verifyUser-body .upperContent {
            display: flex;
            width: 75%;
            justify-content: space-evenly;
        }
        
        .upperContent p {
            margin-bottom: 10px;
        }

        .emailAlert{
            color: #FFE;
            background-color: rgb(243, 85, 85);
            padding: 5px;
            margin-top: 10px;
            font-size: 1.2vw;
            width: 100%;
            border-radius: 5px;
        }
        
        .btn-verify {
            margin-top: 20px;
        }
        .SendOTP_btn,
        #verifyOTP{
            margin-top: 5%;
            border: none;
            border-radius: 1.5rem;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            font-size: 1.5vw;
            height: 5.5vh;
            width: 11vw;
            cursor: pointer;
        }

        
        /* Media Queries */
        @media all and (min-width: 1001px) {
            .mainBody {
                width: 75%;
            }

            .box {
                display: flex;
                align-items: center;
                justify-content: center;
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
                height: 72vh;
                margin-right: 1.5rem;
                width: 75%;
                background-color: #f8f9fa;
            }
        }

        @media all and (min-width: 600px) and (max-width: 800px) {
            .mainBody {
                height: 90vh;
            }
            
            .upperContent {
                display: none;
            }
            
            body .UpperHeading {
                display: block;
                margin-top: 10px;
            }
            
            .box {
                height: 81vh;
            }
            
            .user-details form {
                flex-direction: column;
            }

            input[type='text'], input[type='password'], input[type='tel'], input[type='email'] {
                width: 26vw;
                font-size: 2.1vw;
            }
            
            .input-box {
                width: 26vw;
            }
        }

        @media all and (max-width: 600px) {
            body {
                height: 106vh;
            }
            
            .mainBody {
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: space-evenly;
                height: 95vh;
                width: 92%;
            }
            
            .upperContent {
                display: none;
            }
            
            body .UpperHeading {
                display: block;
                margin-top: 10px;
                width: fit-content;
            }

            .UpperHeading .heading {
                font-size: 4vw;
                margin-bottom: 0;
            }

            .left_content {
                width: 100%;
                padding: 10px;
            }

            .heading1 h1 {
                font-size: 8vw;
            }

            pre {
                font-size: 1rem;
            }

            .img img {
                display: none;
            }

            .box {
                display: flex;
                align-items: center;
                height: 65vh;
                width: 92%;
                margin-right: 0;
                border-radius: 15px;
            }

            .user-details form {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                width: 85vw;
                font-size: 1rem;
                justify-content: center;
            }

            input[type='text'], input[type='password'], input[type='tel'], input[type='email'] {
                width: 100%;
            }
            
            .input-box {
                width: 75vw;
            }

            input[type='submit'] {
                padding: 3%;
                width: 60vw;
            }
            
            .remember-me {
                width: 75vw;
            }
        }
    </style>
</head>
<body>
    <div class="upperContent UpperHeading">
        <div class="heading">
            <h1>Login Here</h1>
        </div>
    </div>
    <div class="mainBody">
        <div class="left_content">
            <div class="img"><img src="../Image/registration.png" height="100px" width="150px" alt="img"></div>
            <div class="heading1"><h1>Welcome</h1></div>
            <div class="sentence"><pre>Every new day <br>is another chance <br>to change your life.</pre></div>
            <div class="register-btn"><a href="register.php">Register</a></div>
        </div>
        <div class="box">
            <div class="user-details">
                <div class="upperContent">
                    <div class="heading">
                        <h1>Login Here</h1>
                    </div>
                </div>
                <div class="error"></div>
                <div class="success"></div>
                
                <form action="loginValidation.php" id="loginForm" method="POST" autocomplete="off">
                    <div class="input-box">
                        <div class="field-label">
                            <span class="details">Username</span>
                            <span class="field-status" id="usernameStatus"></span>
                        </div>
                        <i class="fas fa-user-tag input-icon"></i>
                        <input type="text" placeholder="Enter username" name="username" id="username" required>
                        <div class="validation-message" id="usernameError"></div>
                    </div>
                    
                    <div class="input-box">
                        <div class="field-label">
                            <span class="details">Password</span>
                            <span class="field-status" id="passwordStatus"></span>
                        </div>
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" placeholder="Enter password" name="password" id="password" required>
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        <div class="validation-message" id="passwordError"></div>
                    </div>
                    
                    <div class="remember-me">
                        <div class="checkbox-container">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </div>
                    
                    <div class="btn">
                        <input type="submit" id="loginButton" name="submit" value="Login">
                    </div>
                </form>
            </div>
            
        </div>
        <div class="verifyUser">
            <div class="verifyUser-body">
                <i class="fas fa-times modal-close-btn"></i>
                <div class="upperContent_forgotPasswd">
                    <div class="lock-logo">
                        <img src="../Image/lock.png" width="80px" height="80px" alt="">
                    </div>
                    <p>Trouble logging in?</p>
                </div>
                <div id='error'></div>
                <div class="email verifies-details">
                    <form action="sendOTP.php" id="email" method="POST">
                        <div class="input-box">
                            <span class="details">Email Id</span>
                            <i class="fas fa-user-tag input-icon"></i>
                            <input type="text" placeholder="Enter registered Email id" id="EmailInput" name="email" required>
                        </div>
                        <div class="btn-verify">
                            <button type="submit" class="SendOTP_btn" id="verifyEmail_id" name="email verifyEmail">Send OTP</button>
                            <!-- <input type="submit" id="verifyEmail_id" name="email verifyEmail" placeholder="Send OTP" value="Send OTP"> -->
                        </div>
                    </form>
                </div>
                <div class="otp verifies-details">
                    <form action="VerifyOTP.php" id="OTP" method="POST">
                        <div class="input-box otp">
                            <span class="details">OTP</span>
                            <i class="fas fa-lock input-icon"></i>
                            <input type="text" placeholder="Enter OTP" name="otp" pattern="[0-9]{6}" maxlength="6" required>
                        </div>
                        <div class="btn-verify">
                            <input type="submit" id="verifyOTP" name="verifyOTP" value="Verify OTP">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Cache DOM elements for better performance
            const $username = $("#username");
            const $password = $("#password");
            const $usernameError = $("#usernameError");
            const $passwordError = $("#passwordError");
            const $usernameStatus = $("#usernameStatus");
            const $passwordStatus = $("#passwordStatus");
            const $loginButton = $("#loginButton");
            const $error = $(".error");
            const $success = $(".success");
            
            // Toggle password visibility
            $("#togglePassword").click(function() {
                const type = $password.attr("type") === "password" ? "text" : "password";
                $password.attr("type", type);
                $(this).toggleClass("fa-eye fa-eye-slash");
            });
            
            // Input validation
            let validInputs = {
                username: false,
                password: false
            };
            
            // Validation functions with improved efficiency
            function validateUsername() {
                const val = $username.val();
                const length = val.length;
                
                if (length < 1) {
                    $usernameError.text("Please enter your username").show();
                    $usernameStatus.text("Required").css("color", "#e74c3c");
                    validInputs.username = false;
                } else {
                    $usernameError.hide();
                    $usernameStatus.text("Valid").css("color", "#2ecc71");
                    validInputs.username = true;
                }
            }
            
            function validatePassword() {
                const val = $password.val();
                
                if (val.length < 1) {
                    $passwordError.text("Please enter your password").show();
                    $passwordStatus.text("Required").css("color", "#e74c3c");
                    validInputs.password = false;
                } else {
                    $passwordError.hide();
                    $passwordStatus.text("Valid").css("color", "#2ecc71");
                    validInputs.password = true;
                }
            }
            
            // Optimize event handlers by using debounce
            function debounce(func, wait) {
                let timeout;
                return function(...args) {
                    clearTimeout(timeout);
                    timeout = setTimeout(() => func.apply(this, args), wait);
                };
            }
            
            // Apply validation on input events with debounce
            $username.on("input", debounce(validateUsername, 300));
            $password.on("input", debounce(validatePassword, 300));
            
            // Apply validation on blur events (no debounce needed)
            $username.on("blur", validateUsername);
            $password.on("blur", validatePassword);
            
            // Add visual feedback on focus
            $("input").focus(function() {
                $(this).parent().find(".details").css("color", "#0062cc");
                $(this).parent().find(".input-icon").css("color", "#0062cc");
                $(this).css("border-color", "#0062cc");
            });
            
            $("input").blur(function() {
                $(this).parent().find(".details").css("color", "#555");
                $(this).parent().find(".input-icon").css("color", "#999");
                if (!$(this).val()) {
                    $(this).css("border-color", "#ddd");
                }
            });
            
            // Form submission
            $loginButton.click(function (e) {
                e.preventDefault();
                
                if (validateForm()) {
                    // Show loading effect
                    $loginButton.val("Logging in...").prop("disabled", true).css({
                        "opacity": "0.7",
                        "cursor": "wait"
                    });
                    
                    // Use AJAX for form submission
                    $.ajax({
                        type: "POST",
                        url: $("#loginForm").attr("action"),
                        data: $("#loginForm").serialize(),
                        success: function(response) {
                            // Reset button state
                            $loginButton.val("Login").prop("disabled", false).css({
                                "opacity": "1",
                                "cursor": "pointer"
                            });
                            
                            if (response.indexOf("success") > -1) {
                                $error.hide();
                                $success.html("Login successful! Redirecting...").show();
                                
                                // Redirect after 2 seconds
                                setTimeout(function() {
                                    window.location.href = "../../After-Login/Home/dashboard-index.php";
                                    exit();
                                }, 2000);
                            } else {
                                $success.hide();
                                $error.html(response).show();
                                
                                // Shake effect for error message
                                $error.css("animation", "none");
                                setTimeout(function() {
                                    $error.css("animation", "shake 0.5s");
                                }, 10);
                            }
                        },
                        error: function() {
                            // Reset button state
                            $loginButton.val("Login").prop("disabled", false).css({
                                "opacity": "1",
                                "cursor": "pointer"
                            });
                            
                            $success.hide();
                            $error.html("An error occurred. Please try again.").show();
                        }
                    });
                }
            });

            function validateForm() {
                // Trigger validation for all fields
                validateUsername();
                validatePassword();
                
                // Check if all inputs are valid
                const isValid = Object.values(validInputs).every(value => value === true);
                
                if (!isValid) {
                    $error.html("Please fill in all required fields").show();
                    
                    // Shake effect for error message
                    $error.css("animation", "none");
                    setTimeout(function() {
                        $error.css("animation", "shake 0.5s");
                    }, 10);
                    
                    // Highlight the first invalid field
                    for (const key in validInputs) {
                        if (!validInputs[key]) {
                            $(`#${key}`).focus();
                            break;
                        }
                    }
                } else {
                    $error.hide();
                }
                
                return isValid;
            }
            
            // Add smooth entrance animation
            $(".box").css({
                "opacity": "0",
                "transform": "translateX(30px)"
            });
            
            setTimeout(function() {
                $(".box").css({
                    "opacity": "1",
                    "transform": "translateX(0)",
                    "transition": "all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94)"
                });
            }, 300);

            // Show the modal when forgot password is clicked
            $(".forgot-password").click(function(e) {
                e.preventDefault();
                $(".verifyUser").addClass("active");
            });

            // Close the modal
            $(".modal-close-btn").click(function() {
                $(".verifyUser").removeClass("active");
                $(".emailAlert").hide();
                $("#EmailInput").val("");
            });

            // Close the modal when clicking outside of it
            $(".verifyUser").click(function(e) {
                if (e.target === this) {
                    $(this).removeClass("active");
                    $(".emailAlert").hide();
                    $("#EmailInput").val("");
                }
            });

            // Send OTP
            $("#verifyEmail_id").click(function(e) {
                e.preventDefault();
                const email = $("#EmailInput").val().trim();

                if (email === "") {
                    $(".emailAlert").text("Please enter your email address").show();
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "sendOTP.php",
                    data: { email: email },
                    success: function(response) {
                        if (response === "success") {
                            $(".emailAlert").hide();
                            $(".otp").show();
                            $(".email").hide();
                        } else {
                            $(".emailAlert").text(response).show();
                        }
                    }
                });
            });

            // Verify OTP
            $("#verifyOTP").click(function(e) {
                e.preventDefault();
                const otp = $("input[name='otp']").val().trim();

                if (otp === "") {
                    $(".emailAlert").text("Please enter the OTP").show();
                    return;
                }

                $.ajax({
                    type: "POST",
                    url: "VerifyOTP.php",
                    data: { otp: otp },
                    success: function(response) {
                        if (response === "success") {
                            window.location.href = "resetPassword.php"; // Redirect to password reset page
                        } else {
                            $(".emailAlert").text(response).show();
                        }
                    }
                });
            });
        });
    </script>

</body>
</html> 