<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
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
        
        img {
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
            width: 18vw;
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
            padding: 0 35px 0 35px; /* Adjusted padding for icon on left and right */
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
            height: 15px; /* Fixed height to prevent layout shifts */
            display: none;
            transition: all 0.3s ease;
        }
        
        .strength-meter {
            height: 4px;
            width: 100%;
            background: #eee;
            margin-top: 5px;
            border-radius: 2px;
            overflow: hidden;
        }
        
        .strength-meter-fill {
            height: 100%;
            width: 0;
            transition: width 0.3s ease, background-color 0.3s ease;
        }
        
        .btn {
            display: grid;
            justify-items: center;
            width: 100%;
            margin-top: 15px;
        }
        
        .login-btn {
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
        
        .login-btn:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
        }
        
        .login-btn a {
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
        
        .progress-container {
            width: 80%;
            height: 8px;
            background-color: #eee;
            border-radius: 4px;
            margin: 20px 0;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            width: 0;
            background: linear-gradient(to right, #0062cc, #00c6ff);
            transition: width 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
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
            
            .progress-container {
                width: 85%;
            }
        }
    </style>
</head>
<body>
    <div class="upperContent UpperHeading">
        <div class="heading">
            <h1>Register Here</h1>
        </div>
    </div>
    <div class="mainBody">
        <div class="left_content">
            <div class="img"><img src="../Image/registration.png" height="100px" width="150px" alt="img"></div>
            <div class="heading1"><h1>Welcome</h1></div>
            <div class="sentence"><pre>The best preparation <br>for tomorrow is...<br>doing your best today.</pre></div>
            <div class="login-btn"><a href="login.php">Login</a></div>
        </div>
        <div class="box">
            <div class="user-details">
                <div class="upperContent">
                    <div class="heading">
                        <h1>Register Here</h1>
                    </div>
                </div>
                <div class="error"></div>
                <div class="success"></div>
                
                <div class="progress-container">
                    <div class="progress-bar" id="formProgress"></div>
                </div>
                
                <form action="Validation.php" id="registrationForm" method="POST" autocomplete="off">
                    <div class="input-box">
                        <div class="field-label">
                            <span class="details">Full Name</span>
                            <span class="field-status" id="nameStatus"></span>
                        </div>
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" placeholder="Enter Name" name="name" id="name" required autocomplete="name">
                        <div class="validation-message" id="nameError"></div>
                    </div>
                    <div class="input-box">
                        <div class="field-label">
                            <span class="details">Username</span>
                            <span class="field-status" id="usernameStatus"></span>
                        </div>
                        <i class="fas fa-user-tag input-icon"></i>
                        <input type="text" placeholder="Enter username" name="username" id="username" required autocomplete="username">
                        <div class="validation-message" id="usernameError"></div>
                    </div>
                    
                    <div class="input-box">
                        <div class="field-label">
                            <span class="details">Password</span>
                            <span class="field-status" id="passwordStatus"></span>
                        </div>
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" placeholder="Enter password" name="password" id="password" required autocomplete="password">
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                        <div class="validation-message" id="passwordError"></div>
                        <div class="strength-meter">
                            <div class="strength-meter-fill" id="passwordStrength"></div>
                        </div>
                    </div>
                    <div class="input-box">
                        <div class="field-label">
                            <span class="details">Confirm Password</span>
                            <span class="field-status" id="confirmPasswordStatus"></span>
                        </div>
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" placeholder="Confirm password" name="confirm_passwd" id="confirm_passwd" required autocomplete="confirm_passwd">
                        <i class="fas fa-eye password-toggle" id="toggleConfirmPassword"></i>
                        <div class="validation-message" id="confirmPasswordError"></div>
                    </div>
                    <div class="btn">
                        <input type="submit" id="registerForm" name="submit" value="Register">
                    </div>
                </form>
            </div>  
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            // Cache DOM elements for better performance
            const $name = $("#name");
            const $username = $("#username");
            const $password = $("#password");
            const $confirmPassword = $("#confirm_passwd");
            const $nameError = $("#nameError");
            const $usernameError = $("#usernameError");
            const $passwordError = $("#passwordError");
            const $confirmPasswordError = $("#confirmPasswordError");
            const $formProgress = $("#formProgress");
            const $nameStatus = $("#nameStatus");
            const $usernameStatus = $("#usernameStatus");
            const $passwordStatus = $("#passwordStatus");
            const $confirmPasswordStatus = $("#confirmPasswordStatus");
            const $passwordStrength = $("#passwordStrength");
            const $registerForm = $("#registerForm");
            const $error = $(".error");
            const $success = $(".success");


            
            
            // Toggle password visibility
            $("#togglePassword").click(function() {
                const type = $password.attr("type") === "password" ? "text" : "password";
                $password.attr("type", type);
                $(this).toggleClass("fa-eye fa-eye-slash");
            });
            
            $("#toggleConfirmPassword").click(function() {
                const type = $confirmPassword.attr("type") === "password" ? "text" : "password";
                $confirmPassword.attr("type", type);
                $(this).toggleClass("fa-eye fa-eye-slash");
            });
            
            // Input validation and progress bar
            let validInputs = {
                name: false,
                username: false,
                password: false,
                confirm_passwd: false
            };
            
            function updateProgressBar() {
                const totalFields = Object.keys(validInputs).length;
                let filledFields = 0;
                
                for (const key in validInputs) {
                    if (validInputs[key]) {
                        filledFields++;
                    }
                }
                
                const progressPercentage = (filledFields / totalFields) * 100;
                $formProgress.css("width", progressPercentage + "%");
            }
            
            // Password strength meter
            function checkPasswordStrength(password) {
                let strength = 0;
                
                // If password is 6 characters or more
                if (password.length >= 6) {
                    strength += 25;
                }
                
                // If password contains lowercase and uppercase
                if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                    strength += 25;
                }
                
                // If password contains numbers
                if (password.match(/([0-9])/)) {
                    strength += 25;
                }
                
                // If password contains special characters
                if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                    strength += 25;
                }
                
                // Update strength meter
                $passwordStrength.css("width", strength + "%");
                
                // Set appropriate color based on strength
                if (strength <= 25) {
                    $passwordStrength.css("background-color", "#e74c3c"); // Weak - red
                    $passwordStatus.text("Weak").css("color", "#e74c3c");
                } else if (strength <= 50) {
                    $passwordStrength.css("background-color", "#f39c12"); // Medium - orange
                    $passwordStatus.text("Medium").css("color", "#f39c12");
                } else if (strength <= 75) {
                    $passwordStrength.css("background-color", "#3498db"); // Good - blue
                    $passwordStatus.text("Good").css("color", "#3498db");
                } else {
                    $passwordStrength.css("background-color", "#2ecc71"); // Strong - green
                    $passwordStatus.text("Strong").css("color", "#2ecc71");
                }
                
                return strength;
            }
            
            // Validation functions with improved efficiency
            function validateName() {
                const val = $name.val();
                const length = val.length;
                
                if (length < 2) {
                    $nameError.text("Name must be at least 2 characters").show();
                    $nameStatus.text("Too short").css("color", "#e74c3c");
                    validInputs.name = false;
                } else {
                    $nameError.hide();
                    $nameStatus.text("Valid").css("color", "#2ecc71");
                    validInputs.name = true;
                }
                updateProgressBar();
            }
            
            function validateUsername() {
                const val = $username.val();
                const length = val.length;
                
                if (length < 4) {
                    $usernameError.text("Username must be at least 4 characters").show();
                    $usernameStatus.text("Too short").css("color", "#e74c3c");
                    validInputs.username = false;
                } else if (!/^[a-zA-Z0-9_]+$/.test(val)) {
                    $usernameError.text("Username can only contain letters, numbers, and underscores").show();
                    $usernameStatus.text("Invalid").css("color", "#e74c3c");
                    validInputs.username = false;
                } else {
                    $usernameError.hide();
                    $usernameStatus.text("Valid").css("color", "#2ecc71");
                    validInputs.username = true;
                }
                updateProgressBar();
            }
            
            function validatePassword() {
                const val = $password.val();
                const strength = checkPasswordStrength(val);
                
                if (val.length < 6) {
                    $passwordError.text("Password must be at least 6 characters").show();
                    validInputs.password = false;
                } else {
                    $passwordError.hide();
                    validInputs.password = true;
                }
                updateProgressBar();
                
                // If confirm password is already filled, validate it again
                if ($confirmPassword.val() !== "") {
                    validateConfirmPassword();
                }
            }
            
            function validateConfirmPassword() {
                const passwordVal = $password.val();
                const confirmVal = $confirmPassword.val();
                
                if (passwordVal !== confirmVal) {
                    $confirmPasswordError.text("Passwords do not match").show();
                    $confirmPasswordStatus.text("Mismatch").css("color", "#e74c3c");
                    validInputs.confirm_passwd = false;
                } else if (confirmVal === '') {
                    $confirmPasswordError.text("Please confirm password").show();
                    $confirmPasswordStatus.text("Required").css("color", "#e74c3c");
                    validInputs.confirm_passwd = false;
                } else {
                    $confirmPasswordError.hide();
                    $confirmPasswordStatus.text("Matched").css("color", "#2ecc71");
                    validInputs.confirm_passwd = true;
                }
                updateProgressBar();
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
            $name.on("input", debounce(validateName, 300));
            $username.on("input", debounce(validateUsername, 300));
            $password.on("input", debounce(validatePassword, 300));
            $confirmPassword.on("input", debounce(validateConfirmPassword, 300));
            
            // Apply validation on blur events (no debounce needed)
            $name.on("blur", validateName);
            $username.on("blur", validateUsername);
            $password.on("blur", validatePassword);
            $confirmPassword.on("blur", validateConfirmPassword);
            
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
            $("#registerForm").click(function (e) {
                e.preventDefault();
                console.log("Registering...");
                
                if (validateForm()) {
                    // Show loading effect
                    $registerForm.val("Registering...").prop("disabled", true).css({
                        "opacity": "0.7",
                        "cursor": "wait"
                    });
                    
                    // Use AJAX for form submission
                    $.ajax({
                        type: "POST",
                        url: $("#registrationForm").attr("action"),
                        data: $("#registrationForm").serialize() + "&submit=true",

                        success: function(response) {
                            console.log(response); // Debugging response
                            // Reset button state
                            $registerForm.val("Register").prop("disabled", false).css({
                                "opacity": "1",
                                "cursor": "pointer"
                            });


                            // console.log(response); // Debugging response
                            if (response.indexOf("success") > -1) {
                                $error.hide();
                                $success.html("Registration successful! Redirecting...").show();
                                
                                // Clear the form
                                $("#registrationForm")[0].reset();
                                
                                // Reset validations
                                for (const key in validInputs) {
                                    validInputs[key] = false;
                                }
                                updateProgressBar();
                                
                                // Redirect after 2 seconds
                                setTimeout(function() {
                                    window.location.href = "login.php";
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
                            $registerForm.val("Register").prop("disabled", false).css({
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
                validateName();
                validateUsername();
                validatePassword();
                validateConfirmPassword();
                
                // Check if all inputs are valid
                const isValid = Object.values(validInputs).every(value => value === true);
                
                if (!isValid) {
                    $error.html("Please fix the errors in the form").show();
                    
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
        });
    </script>

</body>
</html>