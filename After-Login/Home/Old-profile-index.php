<?php include('../../partials/Session/Session.php'); include('../nav.php'); include('../../partials/links/links.php'); include('../partials/Sessions/Session-data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        html,
        body {
            height: 100%;
            width: 100vw;
            background-color: white;
            scroll-behavior: smooth;
        }

        .profile-section {
            height: fit-content;
            width: 100%;
            background-color: #f9f9f9;
        }

        .temp {
            padding-top: 60px;
        }

        .home-nav {
            flex: 0 0 auto;
            width: 100%;
            height: 30px;
            margin: 1.5rem 0px;
            list-style: none;
            font-size: 15px;
        }

        nav {
            display: flex;
            gap: 15px;
            padding-left: 30px;
        }

        .home-nav nav a,
        .home-nav nav #dashboard {
            text-decoration: none;
        }

        .home-nav nav .home,
        .home-nav nav #dashboard {
            color: #958d8d;
        }

        .home-nav nav .activeDashboard {
            color: #FD981D;
        }

        .profile-section .topic {
            height: 100%;
            width: 100%;
            display: flex;
            position: relative;
        }

        .profile-section .topic .left {
            padding: 20px 0px 0px 10px;
            width: 22%;
            height: 85vh;
            /*background-color: aliceblue;*/
            overflow-y: auto;
            position: sticky;

        }

        .profile-section .topic .left::-webkit-scrollbar {
            display: none;
        }

        .profile-section .topic .left ol {
            counter-reset: serial-number;
            display: flex;
            flex-direction: column;
            gap: 20px;
            border-radius: 15px;
        }

        .profile-section .topic .left ol li {
            display: flex;
            list-style: none;
            font-size: 15px;
            border: 2px solid #747171;
            border-radius: 10px;
            height: 7.5vh;
            align-items: center;
            padding: 10px 5px;
            margin-right: 10px;
            justify-content: space-evenly;
        }

        .profile-section .topic .left ol li:hover {
            cursor: pointer;
            background-color: #f98b7a;
            color: white;
        }

        .active {
            background-color: #f98b7a;
            color: white;
        }

        .profile-section .topic .right {
            width: 78%;
            height: 85vh;
            padding: 20px;
        }

        .profile-section .topic .right .section {
            display: none;
            overflow-y: auto;
            background-color: #fff;
            padding: 15px 30px;
            height: 65vh;
            width: 95%;
            box-sizing: border-box;
            border-radius: 15px;
        }

        .profile-section .topic .right .section h2 {
            color: #fd981d;
            font-size: 2.2vw;
            margin-top: 10px;
        }

        .profile-section .topic .right .section::-webkit-scrollbar {
            display: none;
        }


        .activeTopic {
            background-color: rgb(68, 67, 67);
            border-radius: 5px;
        }

        #tut1 #profile,
        #tut2 .edit-contact-info-body {
            height: 100%;
            width: 100%;
            padding: 30px 20px;
        }

        #profile span i {
            content: '\eb3a';
            color: black;
            font-weight: bold;
            font-size: 2.5vw;
        }

        #tut1 #profile .user-info-upper-row,
        #tut1 #profile .user-info-middle-row {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding-bottom: 25px;
            column-gap: 25px;
            height: 20vh;
            font-size: 1.3vw;
        }

        #tut1 #profile #user-img {
            max-width: 10vw;
            min-width: 10vw;
            max-height: 20vh;
            min-height: 20vh;
            border-radius: 50%;
            object-fit: cover;
            object-position: 0 0;
        }

        #profile .user-info-upper-row .user-info-row1,
        #profile .user-info-middle-row .user-info-row2 {
            display: flex;
            flex-direction: row;
            height: 100%;
            width: 21vw;
            align-items: center;
        }

        #profile .user-info-upper-row .user-info-row1 .user-phone,
        #profile .user-info-upper-row .user-info-row1 .user-email {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info-row1 .user-info {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            width: 100%;
            height: 20vh;
            justify-content: space-around;
        }

        .user-info-row1 .user-info #user-name {
            font-size: 1.8vw;
            color: #1b1b1bba;
            text-transform: capitalize;
            font-weight: bold;
        }

        .user-info-row1 .user-info .user-type {
            font-size: 1.3vw;
            font-weight: lighter !important;
            font-family: "Ubuntu, sans-serif";
            color: #666666;
        }

        .user-info-middle-row .user-info-row2 .DOB,
        .user-info-middle-row .user-info-row2 .address {
            display: flex;
            flex-direction: row;
            gap: 15px;

        }

        .user-info-middle-row .user-info-row2 .DOB .user-DOB,
        .user-info-middle-row .user-info-row2 .address .user-address {
            display: flex;
            flex-direction: column;
            text-transform: capitalize;
            font-weight: 500;
            font-size: 1.1vw;
            gap: 7px;
        }

        .user-info-middle-row .user-info-row2 .DOB .user-DOB #content,
        .user-info-middle-row .user-info-row2 .address .user-address #content {
            font-weight: lighter !important;
            font-family: "Ubuntu, sans-serif";
            color: #666666;
        }


        #tut1 #profile .complete-profile button {
            width: 50%;
            font-size: 1.3vw;
            line-height: normal;
            font-weight: 500;
            color: #FFFFFF !important;
            background-color: #DF6E12 !important;
            box-shadow: none;
            border: 2px solid #DF6E12;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            word-break: break-word;
            margin-top: 2px;
        }

        /* ---------------Personal Info----------- */
        .edit-personal-info {
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

        .edit-personal-info.active {
            visibility: visible;
            opacity: 1;
        }

        .edit-personal-info-body {
            display: flex;
            flex-direction: column;
            align-content: center;
            align-items: center;
            position: relative;
            background: #fff;
            color: black;
            width: 61vw;
            max-height: fit-content;
            margin: 20px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0 0 0 / 10%);
            transform: translateZ(-50px);
            transition: 1s ease;
        }

        .edit-personal-info.active .edit-personal-info-body {
            transform: translate(30%);
        }

        .edit-personal-info-body .modal-close-btn {
            position: absolute;
            top: 0;
            right: 0;
            margin: 15px;
            cursor: pointer;
            font-size: 35px;
        }

        .section .edit-personal-info .edit-personal-info-body form {
            display: flex;
            align-items: flex-start;
            margin-top: 30px;
            width: 55vw;
            height: fit-content;
            font-size: 1.2rem;
            flex-direction: column;
        }

        input[type='date'],
        input[type='text'],
        input[type='password'],
        input[type='number'],
        input[type='email'] {
            width: 25vw;
            height: 2.5rem;
            font-size: 15px;
            padding-left: 5px;
            border-radius: 5px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .input-box {
            margin: 10px;
        }

        form .input-box span.details {
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .btn {
            display: flex;
            justify-items: center;
            width: 50%;
            justify-content: space-around;
            align-items: center;
            gap: 20px;
        }

        .nextContent {
            width: 100%;
        }

        .nextContent button {
            position: absolute;
            display: flex;
            bottom: 35px;
            left: 25vw;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 23%;
            height: 8%;
            cursor: pointer;
            align-items: center;
            justify-content: space-around;
        }

        input[type='textarea'] {
            width: 25vw;
            height: 4.5rem;
            font-size: 15px;
            padding-left: 5px;
            border-radius: 5px;
            border: 1px solid black;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }

        .contact-menu {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .gender #female {
            margin-left: 20px;
        }

        form #name,
        form #user-address {
            width: 51vw;
        }

        input[type='submit'],
        button {
            margin-top: 4%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        div#topic-list {
            display: none;
        }

        .alert {
            position: absolute;
            color: #FFE;
            background-color: rgb(243, 85, 85);
            padding: 6px;
            width: 100%;
            border-radius: 5px;
            margin-top: 7vw;
        }



        /* ---------------Contact Info----------- */

        .section form .contact-menu .verify-btn {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .section form .contact-menu .verify-btn #verify-email,
        .section form .contact-menu .verify-btn #verifyOTP {
            max-width: 8vw;
        }

        .hidden {
            display: none;
        }

        .verifyEmail {}
    </style>
</head>

<body>
    <div class="profile-section temp">
        <div class="home-nav">
            <nav aria-lable="breadcrumb">
                <a href="#">
                    <li class="home">Home</li>
                </a>
                <span>/</span>
                <a href="dashboard-index.php">
                    <li id="dashboard">My Dashboard</li>
                </a>
                <span>/</span>
                <a href="#">
                    <li class="activeDashboard">User Profile</li>
                </a>
            </nav>
        </div>
        <div class="profile-section">
            <div class="nav-2" id="topic-list">
                <li id="profile-content">HTML & CSS</li>
            </div>
            <div id="profile-content" class="topic">
                <div class="left" id="left">
                    <ol type="1" id="tutorial-list">
                        <li id="tut1" class="active">Personal Information</li>
                        <li id="tut2">Contact Info</li>
                        <li id="tut3">Education</li>
                        <li id="tut4">Experience</li>
                        <li id="tut5">Skills</li>
                        <li id="tut6">Family Info</li>
                        <li id="tut7">Banking</li>
                    </ol>
                </div>
                <div class="right" id="right">
                    <div id="error"></div>
                    <!-- -----------------Personal Information--------------------- -->
                    <div class="tutorial section" id="tut1">
                        <h2>Personal Information</h2>
                        <div id="profile">
                            <div class="user-info-upper-row">
                                <img src="../images/user-default-img.png" id="user-img" height="80px" alt="user-img">
                                <span class="user-info-row1">
                                    <span class="user-info">
                                        <span id="user-name">
                                            <?php echo ($fname == NULL && $lname == NULL) ? $_SESSION['name'] : "{$fname} {$lname}";?>
                                        </span>
                                        <span class="user-type">
                                            <?php echo "Student";?>
                                        </span>
                                    </span>
                                </span>
                                <span class="user-info-row1">
                                    <div class="user-phone">
                                        <i class="uil uil-mobile-android"></i>
                                        <div class="user-contact-num">
                                            <?php echo " +91  " .$number; ?>
                                        </div>
                                    </div>
                                </span>
                                <span class="user-info-row1">
                                    <div class="user-email">
                                        <i class="uil uil-envelope-check"></i>
                                        <div class="user-contact-email">
                                            <?php echo "  " .$email;  ?>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="user-info-middle-row">
                                <div class="user-info-row2">
                                    <span class="DOB">
                                        <i class="uil uil-calender"></i>
                                        <div class="user-DOB">
                                            <span id="content"> Date of Birth</span>

                                            <span class="user-DOB">
                                                <?php echo $DOB;?>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                                <div class="user-info-row2">
                                    <span class="address">
                                        <i class="uil uil-estate"></i>
                                        <div class="user-address">
                                            <span id="content">Address</span>

                                            <span class="user-address">
                                                <?php echo $address;?>
                                            </span>
                                        </div>
                                    </span>
                                </div>
                            </div>
                            <div class="complete-profile">
                                <button class="edit_profile_btn" id="complete-profile-btn">Complete Your
                                    Profile</button>
                            </div>
                        </div>
                        <div class="edit-personal-info">
                            <div class="edit-personal-info-body">
                                <h2>Personal Information</h2>
                                <i class="uil uil-times modal-close-btn"></i>
                                <form action="update-profile.php" method="POST" id="edit-personal-info-form">
                                    <input type="hidden" name="form_type" value="personal-info">
                                    <div class="contact-menu">
                                        <div class="input-box">
                                            <span class="details">First Name</span>
                                            <input type="text" id="input"
                                                placeholder="<?php echo ($fname == NULL) ? 'Enter your first name' : $fname ;?>"
                                                name="fname" required>
                                        </div>

                                        <div class="input-box">
                                            <span class="details">Last Name</span>
                                            <input type="text"
                                                placeholder="<?php echo ($lname == NULL) ? 'Enter last name' : $lname ;?>"
                                                name="lname" required>
                                        </div>
                                    </div>
                                    <div class="contact-menu">
                                        <div class="input-box">
                                            <span class="details">Date of Birth</span>
                                            <input type="date"
                                                placeholder="<?php echo ($DOB == NULL) ? ' DD / MM / YYYY' : $DOB ;?>"
                                                name="DOB" required>
                                        </div>
                                        <div class="input-box gender">
                                            <span class="details">Gender</span>
                                            <input type="radio" id="male" name="gender" value="male" required>
                                            <label for="male">Male</label>
                                            <input type="radio" id="female" name="gender" value="female" required>
                                            <label for="female">Female</label><br>
                                        </div>
                                    </div>
                                    <div class="input-box">
                                        <span class="details">Full Address</span>
                                        <input type="textarea"
                                            placeholder="<?php echo ($address == NULL) ? 'Enter your address here' : $address ;?>"
                                            id="user-address" name="address" rows="10" cols="50" required>
                                    </div>
                                    <div class="btn">
                                        <input type="submit" id="edit-personal-info" name="submit" value="Submit">
                                    </div>
                                </form>
                                <div class="nextContent">
                                    <button onclick="changePlaceholder()" id="next-btn tut1">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -----------------Contact Information--------------------- -->
                    <div class="tutorial section" id="tut2">
                        <h2>Contact Information </h2>
                        <div id="emailError"></div>
                        <div class="edit-contact-info-body">
                            <form method="POST" id="verify-email-form" action="sendEmailOTP.php">
                                <div class="contact-menu">
                                    <div class="input-box">
                                        <span class="details">Email Id</span>
                                        <input type="email" placeholder="<?php echo ($email == NULL) ? 'Enter Email id' : $email ;?>" name="email" required>
                                    </div>
                                    <div class="verify-btn">
                                        <button type="submit" class="checkOTP" id="verify-email" name="submit">Send OTP</button>
                                    </div>
                                </div>
                            </form>
                            <div class="verifyEmail hidden">
                                <form action="update-profile.php" id="Email-OTP-verify-form" method="POST">
                                    <input type="hidden" name="form_type" value="contact-email-info">
                                    <div class="contact-menu">
                                        <div class="input-box otp">
                                            <span class="details">OTP</span>
                                            <input type="text" placeholder="Enter OTP" name="Email_OTP" pattern="[0-9]{6}"
                                                maxlength="6" required>
                                        </div>
                                        <div class="verify-btn">
                                            <input type="submit" id="verifyOTP" name="verifyOTP" value="Verify OTP">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <form method="POST" action="">
                                <input type="hidden" name="form_type" value="contact-phone-info">
                                <div class="contact-menu">
                                    <div class="input-box">
                                        <span class="details">Phone Number</span>
                                        <input type="number" placeholder="Enter number" name="number" pattern="[0-9]{10}"
                                            maxlength="10" required>
                                    </div>
                                    <div class="verify-btn">
                                        <button id="verify">Verify</button>
                                    </div>
                                </div>

                                <div class="btn">
                                    <input type="submit" id="edit-contact-info" name="submit" value="Save">
                                    <button id="next-btn tut2">Next</button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- -----------------Educational Details----------------- -->
                    <div class="tutorial section" id="tut3">
                        <h2>Education Details </h2>
                        <form action="POST">

                        </form>
                        <button id="next-btn tut3">Next</button>
                    </div>
                    <!-- -----------------Previous Experience--------------------- -->
                    <div class="tutorial section" id="tut4">
                        <h2>Previous Experience</h2>
                        <form action="POST">

                        </form>
                        <button id="next-btn tut4">Next</button>
                    </div>
                    <!-- -----------------Skills Section--------------------- -->
                    <div class="tutorial section" id="tut5">
                        <h2>Skills Section</h2>
                        <form action="POST">

                        </form>
                        <button id="next-btn tut5">Next</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>


        // // <-- ------------Display Edit Profile Content ------------ -->

        let editInfo = document.querySelector(".edit-personal-info");
        let completeProfile = document.getElementById("complete-profile-btn");
        let modalCloseBtns = document.querySelectorAll(".modal-close-btn");

        // Function to open modal
        var modal = function () {
            editInfo.classList.add("active");
        }

        // Add event listener to "Complete Your Profile" button
        completeProfile.addEventListener("click", () => {
            modal();
        });

        // Add event listener to close buttons within the modal
        modalCloseBtns.forEach((modalCloseBtn) => {
            modalCloseBtn.addEventListener("click", () => {
                editInfo.classList.remove("active");
            });
        });


        // // <-- ------------Display verify email Content ------------ -->



        // <-- ------------Make Dynamic Page With JS ------------ -->

    $(document).ready(function () {

        let VerifyEmailFeild = document.getElementById("verify-email");
        let isListenerActive = false;

        // Form validation
        const validateForm = (formSelector) => {
            let isValid = true;
            $(`${formSelector} input[required]`).each(function () {
                if ($(this).val() === '') {
                    alert("Error! Please fill in all required fields.");
                    isValid = false;
                    return false; // Stop the loop if any field is empty
                }
            });
            return isValid;
        };

        VerifyEmailFeild.addEventListener("click", () => {
            if (!isListenerActive) {
                
                SendOTP_();
            }
        });

        // Function to open and close modals
        const toggleModal = (modalElement, isActive) => {
            if (isActive) {
                $(modalElement).addClass("active");
            } else {
                $(modalElement).removeClass("active");
            }
        };

        // Open "Complete Your Profile" modal
        $("#complete-profile-btn").click(() => {
            toggleModal(".edit-personal-info", true);
        });

        // Close modal on close button click
        $(".modal-close-btn").click(() => {
            toggleModal(".edit-personal-info", false);
        });


        // Submit "Personal Info" form Dynamically
        $("#edit-personal-info").click(function () {
            if (validateForm("#edit-personal-info-form")) {
                $.post($("#edit-personal-info-form").attr("action"),
                    $("#edit-personal-info-form").serialize(),
                    function (info) {
                        $("#error").html(info);
                    }
                );
            }
            return false;
        });
        

        

        // Submit "Verify Email" form
        function SendOTP_() {
            $.post($("#verify-email-form").attr("action"),
                   $("#verify-email-form :input").serializeArray(),
            function (response) {
                  
                if(response.status === 'success'){

                    alert("OTP sent successfully");

                    isListenerActive = true;
                    startTimer();  // Start the timer

                    // Show OTP input form
                    $(".verifyEmail").show();
                    
                }else {
                    alert("Error: "+ response.message);
                    $("#emailError").empty();
                    $("#emailError").html(response);
                }

            }, "json");

            $("#verify-email-form").submit(function () {
                return false;
            });

        }

        let interval; let timer;

        function startTimer() {
            let duration = 300000; // 5 minutes in milliseconds
            timer = document.getElementById("verify-email");

            interval = setInterval(() => {
                let minutes = Math.floor(duration / 60000);
                let seconds = ((duration % 60000) / 1000).toFixed(0);

                timer.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

                duration -= 1000;

                if (duration < 0) {
                    clearInterval(interval);
                    timer.textContent = "Resend OTP";
                    alert("Time Expired!");
                }
            }, 1000);
        }


        // Email OTP Verification Dynamically
        $("#verifyOTP").click(function () {
            if (validateForm("#Email-OTP-verify-form")) {
                $.post($("#Email-OTP-verify-form").attr("action"),
                    $("#Email-OTP-verify-form").serialize(),
                function (Email_Response) {
                    
                    if (Email_Response.status === 'Verified') {

                        alert("OTP Verified successfully");
                        
                        // Show OTP input form
                        $(".verifyEmail").hide();

                        isListenerActive = false;
                        stopTimer();            // Stop the timer
                    
                    }else{
                        alert("Error: "+ Email_Response.message);
                        $("#emailError").empty();
                        $("#emailError").html(Email_Response);
                    }

                }, "json");
            }
            return false;
        });

        function stopTimer() {
            if (interval) {
                clearInterval(interval);
                timer.textContent = "Verified ✔";
                timer.style.background = "Green";
                interval = null;
            }
        }


        // Listen for OTP submission
        function checkOTPStatus() {
            $(".checkOTP").click(function () {
                $(".verifyEmail").show();
            });
        }
    });







    </script>
    <script src="profile-script.js"></script>
    <script>hljs.highlightAll();</script>
</body>

</html>