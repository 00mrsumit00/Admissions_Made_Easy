<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard</title>
    <?php include('partials/Sessions/Session-data.php'); include('partials/links/links.html') ?>
    <style>
        :root {
            --primary: #FD981D;
            --primary-light: #ffa64d;
            --secondary: #2176ff;
            --secondary-light: #5498ff;
            --dark: #333333;
            --light: #f8f9fa;
            --success: #28a745;
            --danger: #dc3545;
            --warning: #ffc107;
            --info: #17a2b8;
        }
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

        .main {
            height: fit-content;
            width: 100vw;
            background-color: #fff;
            position: relative;
        }

        .nav {
            height: 60px;
            width: 100%;
            border-bottom: 2px solid #dadada;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0% 5vw;
            position: fixed;
            top: 0;
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }

        .nav-main {
            display: flex;
            align-items: center;
            gap: 4vw;
        }

        .nav img {
            width: 6vw;
            height: 5vw;
        }

        .nav #img2 {
            display: none;
        }

        .nav-main a {
            font-size: 1.3vw;
            text-decoration: none;
            color: black;
            padding: 10px 15px;
            border-radius: 8px;
        }

        .activeSection {
            background-color: white;
        }

        .nav-main .btn-1 {
            font-size: 1.2vw;
            padding: 1vw 2vw;
            background-color: #FF735C;
            color: white;
            font-weight: 600;
            width: 10vw;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            cursor: pointer;
        }

        #drop-btn,
        #close-btn,
        #profile-close-btn {
            display: none;
        }

        #profile span #profile-drop-btn {
            display: contents;
        }



        .drop-down {
            display: flex;
            flex-direction: column;
            position: fixed;
            z-index: 1;
            right: -110%;
            transition: right 0.5s ease;
            top: 60px;
            overflow-y: auto;
            width: 100vw;
            background-color: white;
            padding: 5vw 10vw;
            align-items: end;
            gap: 10px;
            box-shadow: 0 0 20px #d1d1d14d;
            transition: right 0.5s ease;
        }

        .profile-dropdown {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 60px;
            align-items: center;
            gap: 10px;
            right: -110%;
            z-index: 11;
            padding: 20px;
            width: 230px;
            max-height: 555px;
            overflow-y: auto;
            box-shadow: 0 0 20px #d1d1d14d;
            border-radius: 10px;
            background: whitesmoke;
        }

        .show {
            top: 70px;
            right: 30px;
        }


        .drop-down a {
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: black;
            border-bottom: 0.5px solid black;
            padding-bottom: 8px;
        }

        .profile-dropdown #profile {
            display: flex;
            width: 100%;
            padding: 5px;
            border-bottom: 1px solid #958d8d;
        }

        .nav-main #profile {
            display: flex;
            width: 100%;
            list-style: none;
            color: rgb(241, 240, 240);
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            padding: 7px 5px;
        }

        #section-list #profile span {
            display: flex;
            flex-direction: row;
            align-items: center;
            font-weight: 400;
        }

        .profile-dropdown a {
            top: 15px;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            color: black;
            padding-bottom: 8px;
        }

        .profile-dropdown a:hover {
            color: #FD981D;
        }

        .profile-dropdown #profile .user-info {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            gap: 10px;
            width: 100%;
        }

        .view-profile {
            color: #FD981D !important;
        }

        .temp {
            padding-top: 60px;
        }


        span #user-name {
            font-size: 1.3vw;
            color: black;
            font-weight: 400;
            max-width: fit-content;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-right: 5px;
        }

        span .user-type {
            font-size: 12px;
            font-weight: 100;
        }

        #profile #user-img {
            max-width: 50px;
            min-width: 50px;
            max-height: 50px;
            min-height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            object-fit: cover;
            object-position: 0 0;
        }

        #profile span i {
            content: '\eb3a';
            color: black;
            font-weight: bold;
        }

        .dashboard {
            display: flex;
            gap: 20px;
            width: 100%;
            border-bottom: 1px solid #958d8d;
        }

        .menu-item {
            display: flex;
            justify-content: space-around;
            width: 100%;
            border-bottom: 1px solid #958d8d;
        }

        .logout {
            display: flex;
            gap: 20px;
            width: 100%;
        }

         /* Header Styles */
         .nav-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: white !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo img {
            height: 40px;
        }

        .logo h2 {
            color: var(--primary);
            font-weight: 600;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .nav-links a:hover, .nav-links a.active {
            color: var(--primary);
            background-color: rgba(255, 123, 0, 0.1);
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
            cursor: pointer;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .user-avatar:hover {
            transform: scale(1.05);
        }

        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            width: 220px;
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
            border-radius: 8px;
            padding: 1rem 0;
            display: none;
            z-index: 101;
        }

        .user-dropdown.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        .user-dropdown .user-info {
            padding: 0 1rem 1rem;
            border-bottom: 1px solid #eee;
            margin-bottom: 0.5rem;
        }

        .user-dropdown .menu-item {
            padding: 0.75rem 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .user-dropdown .menu-item:hover {
            background-color: #f8f9fa;
            color: var(--primary);
        }

        .user-dropdown .menu-item.logout {
            color: var(--danger);
        }


        /* <----------------------- Media Queries -------------------> */

        @media (max-width:600px) {
            .nav {
                background-color: rgba(255, 255, 255, 0.2);
                backdrop-filter: blur(10px);
                color: black;
                padding: 0 5vw;
            }

            .nav h2 {
                font-size: 6vw;
            }

            .nav-main a {
                text-decoration: none;
                font-size: 3vw;
                display: none;
            }

            #drop-btn {
                display: contents;
                font-size: 8vw;
                font-weight: 100;
                color: black;
            }

            .nav #close-btn,
            #profile {
                display: none;
            }

            .nav-main .btn-1 {
                display: none;
            }

            .main .content {
                display: flex;
                flex-direction: column;
                gap: 5vh;
            }

            .main .content .left {
                margin-top: 2vh;
                margin-left: 2vw;
                height: 100%;
                width: 98%;
                padding: 7vw 5vw 0 5vw;
            }

            .main .content .left h1 {
                font-size: 10vw;
            }

            .main .content .left p {
                margin-top: 8vw;
                font-size: 5.5vw;
                font-weight: 500;
                width: 100%;
                color: black;
            }

            .main .content .left button {
                width: 50vw;
                height: 15vw;
                margin-top: 10vw;
                font-size: 6vw;
                padding: 1vw 1vw;
                background-color: #FF735C;
                color: white;
                font-weight: 500;
                border: none;
                border-radius: 5px;
            }

            .main .content .right {
                margin-top: 5vh;
                height: 100%;
                width: 100%;
            }

            .main .content .right img {
                width: 100vw;
                height: fit-content;
            }

            .nav img {
                display: none;
            }

            .nav #img2 {
                display: block;
                height: 10vw;
                width: 10vw;

            }

            .activeSection {
                color: white;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="nav-header">
        <div class="logo">
            <!-- <img src="../images/logo.png" alt="Admissions Made Easy Logo" onerror="this.src='../images/default-logo.png'; this.onerror='';" /> -->
            <h2>Admissions Made Easy</h2>
        </div>
        
        <nav class="nav-links">
            <a href="../Home/dashboard-index.php" class="active">Home</a>
            <a href="../Form/edit-form.php">Registration</a>
            <a href="../Form/view-users.php">Counseling</a>
            <a href="../Payment/pay-index.php">Payment</a>
        </nav>
        
        <div class="user-menu">
            <div class="user-avatar" id="userMenuToggle">
                <span><?php echo substr($fname, 0, 1); ?></span>
            </div>
            <span><?php echo $fname; ?></span>
            <i class="fas fa-chevron-down" id="profile-drop-btn"></i>
            
            <div class="user-dropdown profile-dropdown" id="userDropdown">
                <div class="user-info">
                    <h4><?php echo $fname; ?></h4>
                    <small>Student</small>
                </div>
                
                <div class="menu-item" id="profileMenuItem" onclick="window.location.href='../Home/New-profile-index.php'">
                    <i class="fas fa-user"></i>
                    <span>My Profile</span>
                </div>
                
                <div class="menu-item" onclick="window.location.href='../Home/dashboard-index.php'">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </div>
                
                <div class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </div>
                
                <div class="menu-item logout" onclick="window.location.href='../partials/sessions/logout.php'">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </div>
            </div>
        </div>
    </header>
    
    <div class="profile-dropdown" hidden>
        <div id="profile">
            <img src="../images/user-default-img.png" id="user-img" height="80px" alt="user-img">
            <span class="user-info">
                <span id="user-name">
                    <?php echo $fname;?>
                </span>
                <span class="user-type">
                    <?php echo "Student";?>
                </span>
                <a href="../Home/profile-index.php" class="view-profile">View Profile <i
                        class="uil uil-arrow-right view-profile"></i></a>
            </span>
        </div>
        <a href="../Home/dashboard-index.php" class="dashboard"><i class="uil uil-create-dashboard"></i> My Dashboard</a>
        <a href="#about" class="menu-item">Menu Item</a>
        <a href="#contact" class="menu-item">Menu Item</a>
        <a href="../partials/sessions/logout.php" class="logout"><i class="uil uil-signout"></i>Log Out</a>
    </div>
    <div class="drop-down" hidden>
        <a href="#home">Home</a>
        <a href="../Notes/notes-index.php">Notes</a>
        <a href="../Code/code-index.php">Code</a>
        <a href="../Payment/pay-index.php">Payment</a>
        <a href="../partials/sessions/logout.php">Log Out</a>
    </div>

    <script>
        // Code for toggling the profile dropdown menu
        let profile_Drop_Btn = document.getElementById("profile-drop-btn");
        let profile_Dropdown = document.querySelector(".profile-dropdown");
        let profile_Close_Btn = document.getElementById("profile-close-btn");

        profile_Drop_Btn.addEventListener("click", () => {
            profile_Dropdown.style.hidden = "false"
            profile_Dropdown.classList.toggle("show");
            //profile_Drop_Btn.style.display = "none"
            //profile_Close_Btn.style.display = "contents"
        })

        // profile_Close_Btn.addEventListener("click", () => {
        // profile_Drop_Btn.style.display = "block"
        // profile_Close_Btn.style.display = "none"
        // })

        window.addEventListener("click", function (event) {
            if (!event.target.matches("#*")) {
                if (profile_Dropdown.classList.contains("show")) {
                    profile_Dropdown.classList.remove("show");
                }
            }
        })

        // Code for toggling the Mobile dropdown menu
        let drop_btn = document.getElementById("drop-btn")
        let drop_down = document.querySelector(".drop-down")
        let close_btn = document.getElementById("close-btn")

        drop_btn.addEventListener("click", () => {
            drop_down.style.hidden = "false"
            drop_down.classList.toggle("show");
            drop_btn.style.display = "none"
            close_btn.style.display = "block"
        })

        close_btn.addEventListener("click", () => {
            drop_btn.style.display = "block"
            close_btn.style.display = "none"
        })

        window.addEventListener("click", function (event) {
            if (!event.target.matches("#drop-btn")) {
                if (drop_down.classList.contains("show")) {
                    drop_down.classList.remove("show");
                }
            }
        })


        // Script to make a section activeSection

        document.addEventListener("DOMContentLoaded", function () {
            var currentUrl = window.location.href;

            // Get all anchor tags inside the nav
            var navLinks = document.querySelectorAll(".nav-main a");

            // Loop through each link and check if its href matches the current URL
            navLinks.forEach(function (link) {
                if (link.href === currentUrl) {
                    // Add the 'active' class to the parent <li> element
                    link.classList.add("activeSection");
                }
            });
        });

    </script>
</body>

</html>