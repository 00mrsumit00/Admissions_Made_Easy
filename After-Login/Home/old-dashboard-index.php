<?php include('../partials/Sessions/Session-data.php'); include('../nav.php'); include('../../partials/Session/Session.php') ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
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

        .container {
            height: 100%;
            width: 100%;
            background-color: #f9f9f9;
        }

        .temp {
            padding-top: 60px;
        }

        .container .home-nav {
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

        .home-nav nav a {
            text-decoration: none;
        }

        .home-nav nav .home {
            color: #958d8d;
        }

        .home-nav nav .activeDashboard {
            color: #FD981D;
        }

        .main-container {
            display: flex;
            flex-direction: row;
            height: 100%;
            width: 100%;
        }

        .left-content {
            display: flex;
            height: 100%;
            width: 30%;
            flex-direction: column;
            align-items: center;
        }

        .greatings {
            display: flex;
            width: 80%;
            gap: 15px;
            align-items: center;
            justify-content: flex-start;
            padding: 20px;
        }

        .uil-cloud-sun:before {
            content: '\eca1';
            color: #fc981e;
            font-size: 45px;
        }

        /* .edit-profile-card {
            width: 80%;
            height: 25vh;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px #d1d1d14d;
        }

        .edit-profile-card #profile {
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            padding: 5px;
        }

        .edit-profile-card #profile #user-img {
            max-width: 10vw;
            min-width: 10vw;
            max-height: 20vh;
            min-height: 20vh;
            border-radius: 50%;
            margin-right: 25px;
            object-fit: cover;
            object-position: 0 0;
        } */

        .edit-profile-card {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .edit-profile-card:hover {
            transform: translateY(-5px);
        }

        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ffa64d;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .edit-avatar {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 0.2rem;
            font-size: 0.7rem;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
        }

        .profile-image:hover .edit-avatar {
            opacity: 1;
        }

        .profile-name {
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        .profile-role {
            color: #777;
            margin-bottom: 1rem;
        }

        .profile-action {
            width: 100%;
            padding: 0.7rem;
            border: none;
            border-radius: 8px;
            background-color: #ff7b00;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-action:hover {
            background-color: #ffa64d;
        }

        /*.edit-profile-card #profile span {
            display: flex;
            flex-direction: column;
            align-items: center;
            
        }*/

        #profile .user-info {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            width: 100%;
            height: 20vh;
            justify-content: space-around;
        }

        .user-info button {
            font-size: 1.3vw;
            line-height: normal;
            font-weight: 700;
            text-transform: uppercase;
            color: #FFFFFF !important;
            background-color: #DF6E12 !important;
            box-shadow: none;
            border: 2px solid #DF6E12;
            padding: 8px 16px;
            border-radius: 10px;
            text-decoration: none;
            word-break: break-word;
        }

        .right-content {
            height: 100%;
            width: 70%;
        }
    </style>
</head>

<body>
    <div class="container temp">
        <div class="home-nav">
            <nav aria-lable="breadcrumb">
                <a href="#">
                    <li class="home">Home</li>
                </a>
                <span>/</span>
                <a href="#">
                    <li class="activeDashboard">My Dashboard</li>
                </a>
            </nav>
        </div>

        <div class="main-container">
            <div class="left-content">
                <div class="greatings">
                    <i class="uil uil-cloud-sun"></i>
                    <h4> Hi, Greatings of the day!</h4>

                </div>
                <!-- <div class="edit-profile-card">
                    <div id="profile">
                        <img src="../images/user-default-img.png" id="user-img" height="80px" alt="user-img">
                        <span class="user-info">
                            <span id="user-name">
                                <?php echo $fname;?>
                            </span>
                            <span class="user-type">
                                <?php echo "Student";?>
                            </span>
                            <button id="edit-profile-btn">Edit</button>
                        </span>
                    </div>
                </div> -->
                <div class="edit-profile-card">
                    <div class="profile-image">
                        <span><?php echo strtoupper(substr($fname, 0, 1)); ?></span>
                        <div class="edit-avatar">Edit</div>
                    </div>
                    
                    <div class="profile-name"><?php echo $fname;?></div>
                    <div class="profile-role">Student</div>
                    
                    <button class="profile-action" id="viewProfileBtn">View Profile</button>
                </div>
            </div>
            <div class="right-content">

            </div>
        </div>
    </div>
    <script>
        // Edit Button Redirect to ProfileSection
        let edit_profile = document.getElementById('viewProfileBtn');
        edit_profile.addEventListener('click', () => {
            window.location.href = 'profile-index.php';
        })
    </script>
</body>

</html>