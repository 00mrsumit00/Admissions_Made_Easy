<?php include('../../partials/Session/Session.php'); include('../nav.php'); include('../../partials/links/links.php'); include('../partials/Sessions/Session-data.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Ubuntu', sans-serif;
        }

        html, body {
            height: 100%;
            width: 100%;
            background-color: #f5f7fa;
            scroll-behavior: smooth;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Breadcrumb Styling */
        .breadcrumb {
            display: flex;
            gap: 10px;
            align-items: center;
            margin: 20px 0;
            font-size: 14px;
        }
        
        .breadcrumb a {
            text-decoration: none;
            color: #958d8d;
            transition: color 0.3s;
        }
        
        .breadcrumb a:hover {
            color: #fd981d;
        }
        
        .breadcrumb .active {
            color: #fd981d;
            font-weight: 500;
        }
        
        .breadcrumb-divider {
            color: #958d8d;
        }
        
        /* Page Header */
        .page-header {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .page-header h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 10px;
        }
        
        .header-subtitle {
            color: #666;
            font-size: 16px;
        }
        
        /* Profile Container */
        .profile-container {
            display: flex;
            gap: 30px;
        }
        
        /* Sidebar */
        .sidebar {
            width: 280px;
            flex-shrink: 0;
        }
        
        .profile-nav {
            background-color: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .profile-nav-header {
            background-color: #fd981d;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .profile-nav-list {
            list-style: none;
        }
        
        .profile-nav-item {
            border-bottom: 1px solid #eee;
        }
        
        .profile-nav-link {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .profile-nav-link:hover {
            background-color: #f8f9fa;
        }
        
        .profile-nav-link.active {
            background-color: #f98b7a;
            color: white;
            border-left: 4px solid #fd981d;
            border-radius: 8px 0 0 8px;
        }
        
        .profile-nav-icon {
            margin-right: 15px;
            width: 20px;
            text-align: center;
        }
        
        /* Profile Content */
        .profile-content {
            flex: 1;
        }
        
        .profile-section {
            background-color: #fff;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            display: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .profile-section.active {
            display: block;
        }
        
        .section-title {
            color: #fd981d;
            font-size: 22px;
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        /* Profile Overview */
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }
        
        .profile-image {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(253, 152, 29, 0.2);
            z-index: 1;
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .edit-avatar {
            position: absolute;
            display: flex;
            justify-content: space-around;
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
        
        .profile-info {
            flex: 1;
            padding-left: 1rem;
        }
        
        .profile-name {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            text-transform: capitalize;
        }
        
        .profile-role {
            font-size: 16px;
            color: #666;
            margin-bottom: 10px;
        }
        
        .profile-contact {
            display: flex;
            gap: 20px;
            margin-top: 15px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            color: #666;
        }
        
        .contact-icon {
            margin-right: 10px;
            color: #fd981d;
        }
        
        .profile-details {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 30px;
        }
        
        .detail-group {
            flex: 1;
            min-width: 200px;
        }
        
        .detail-label {
            font-weight: 500;
            color: #666;
            margin-bottom: 5px;
            font-size: 14px;
        }
        
        .detail-value {
            color: #333;
        }
        
        .complete-profile-btn {
            background-color: #fd981d;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 30px;
            display: inline-block;
        }
        
        .complete-profile-btn:hover {
            background-color: #e58718;
        }
        
        /* Forms */
        .form-section {
            margin-top: 20px;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .form-group {
            flex: 1;
            min-width: 250px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }
        
        .form-control {
            width: 100%;
            height: 45px;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            border-color: #fd981d;
            outline: none;
        }
        
        textarea.form-control {
            height: auto;
            min-height: 100px;
        }
        
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }
        
        .radio-label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .radio-label input {
            margin-right: 8px;
        }
        
        .form-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: #0062cc;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
        }
        
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        
        /* Progress bar */
        .progress-container {
            margin: 30px 0;
        }
        
        .progress-text {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .progress-label {
            font-weight: 500;
            color: #333;
        }
        
        .progress-percentage {
            color: #fd981d;
            font-weight: 600;
        }
        
        .progress-bar-container {
            height: 8px;
            background-color: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            background-color: #fd981d;
            border-radius: 10px;
        }
        
        /* Modals */
        .modal {
            display: none;
            position: fixed;
            z-index: 999999;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(5px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal.active {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            background-color: white;
            border-radius: 15px;
            width: 100%;
            max-width: 600px;
            padding: 30px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .modal-header {
            margin-bottom: 30px;
            position: relative;
        }

        .modal-title {
            font-size: 24px;
            color: #333;
            position: relative;
            padding-bottom: 15px;
        }

        .modal-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
            border-radius: 3px;
            transition: width 0.3s ease;
        }

        .modal-content:hover .modal-title:after {
            width: 100px;
        }

        .modal-close {
            position: absolute;
            top: 0;
            right: 0;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
            background: #f5f5f5;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-size: 18px;
        }

        .modal-close:hover {
            background-color: #f2f2f2;
            color: var(--danger);
            transform: rotate(90deg);
        }

        /* Form Enhancements */
        .form-control {
            width: 100%;
            height: 50px;
            padding: 10px 15px;
            border: 2px solid #eee;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }

        .form-control:focus {
            border-color: var(--primary);
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(253, 152, 29, 0.1);
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
            font-size: 14px;
            transition: all 0.2s ease;
        }

        .form-group {
            position: relative;
            margin-bottom: 25px;
        }

        .form-group input:focus + .form-label,
        .form-group textarea:focus + .form-label {
            color: var(--primary);
        }

        /* Radio buttons */
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 10px;
        }

        .radio-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            user-select: none;
            position: relative;
            padding-left: 30px;
            transition: all 0.2s ease;
        }

        .radio-label input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .radio-checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #f2f2f2;
            border: 2px solid #ddd;
            border-radius: 50%;
            transition: all 0.2s ease;
        }

        .radio-label:hover .radio-checkmark {
            background-color: #eee;
            border-color: #ccc;
        }

        .radio-label input:checked ~ .radio-checkmark {
            background-color: white;
            border-color: var(--primary);
        }

        .radio-checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .radio-label input:checked ~ .radio-checkmark:after {
            display: block;
        }

        .radio-label .radio-checkmark:after {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--primary);
        }

        /* Enhanced Buttons */
        .btn {
            padding: 12px 25px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: all 0.5s ease;
        }

        .btn:hover:before {
            width: 150%;
            height: 150%;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            box-shadow: 0 4px 10px rgba(253, 152, 29, 0.2);
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(253, 152, 29, 0.3);
        }

        .btn-primary:active {
            transform: translateY(0);
            box-shadow: 0 4px 8px rgba(253, 152, 29, 0.2);
        }

        .btn-secondary {
            background-color: #e9ecef;
            color: #666;
        }

        .btn-secondary:hover {
            background-color: #dde2e6;
            color: #333;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary:active {
            transform: translateY(0);
        }

        .btn-success {
            background-color: var(--success);
            color: white;
            box-shadow: 0 4px 10px rgba(40, 167, 69, 0.2);
        }

        .btn-success:hover {
            background-color: #218838;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(40, 167, 69, 0.3);
        }

        /* Alert Styles */
        .alert {
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-size: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
            animation: slideDown 0.3s ease-out forwards;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-left: 4px solid #28a745;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border-left: 4px solid #dc3545;
        }

        /* Profile Image Hover Effects */
        .profile-image {
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .profile-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(253, 152, 29, 0.3);
        }

        .edit-avatar {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            transform: translateY(100%);
        }

        .profile-image:hover .edit-avatar {
            opacity: 1;
            transform: translateY(0);
        }

        /* Profile Section Transitions */
        .profile-section {
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .profile-nav-link {
            position: relative;
            transition: all 0.3s ease;
        }

        .profile-nav-link:before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background-color: var(--primary);
            opacity: 0.1;
            transition: all 0.3s ease;
        }

        .profile-nav-link:hover:before {
            width: 100%;
        }

        .profile-nav-link.active:before {
            width: 100%;
            opacity: 0.2;
        }

        /* Complete Profile Button Animation */
        .complete-profile-btn {
            animation: pulse 2s infinite;
            position: relative;
            overflow: hidden;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(253, 152, 29, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(253, 152, 29, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(253, 152, 29, 0);
            }
        }

        .complete-profile-btn:before {
            content: '';
            position: absolute;
            width: 30px;
            height: 100%;
            top: 0;
            left: -30px;
            background: linear-gradient(to right, 
                                    rgba(255, 255, 255, 0) 0%, 
                                    rgba(255, 255, 255, 0.3) 50%, 
                                    rgba(255, 255, 255, 0) 100%);
            animation: shine 3s infinite;
        }

        @keyframes shine {
            0% {
                left: -30px;
            }
            20% {
                left: 130%;
            }
            100% {
                left: 130%;
            }
        }

        /* OTP Container Animation */
        .otp-container {
            transition: all 0.3s ease-in-out;
        }

        /* Email Timer Styling */
        .timer {
            margin-top: 10px;
            font-size: 14px;
            color: #6c757d;
            animation: fadeIn 0.5s ease-in-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        /* OTP verification */
        .otp-container {
            display: none;
        }
        
        .otp-container.active {
            display: block;
        }
        
        .timer {
            color: #666;
            font-size: 14px;
            margin-top: 10px;
        }
        
        .verified-badge {
            display: inline-flex;
            align-items: center;
            background-color: #28a745;
            color: white;
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 13px;
            margin-left: 10px;
        }
        
        .verified-badge i {
            margin-right: 4px;
        }
        
        .completion-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            border-left: 4px solid #fd981d;
        }
        
        .completion-card p {
            color: #666;
            margin-bottom: 15px;
        }
        
        @media (max-width: 992px) {
            .profile-container {
                flex-direction: column;
            }
            
            .sidebar {
                width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-image {
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .profile-contact {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="#">Home</a>
            <span class="breadcrumb-divider">/</span>
            <a href="dashboard-index.php">My Dashboard</a>
            <span class="breadcrumb-divider">/</span>
            <span class="active">User Profile</span>
        </div>
        
        <!-- Page Header -->
        <div class="page-header">
            <h1>User Profile</h1>
            <p class="header-subtitle">View and update your personal information</p>
        </div>
        
        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-text">
                <span class="progress-label">Profile Completion</span>
                <span class="progress-percentage">45% Complete</span>
            </div>
            <div class="progress-bar-container">
                <div class="progress-bar" style="width: 45%;"></div>
            </div>
            <p style="margin-top: 10px; color: #666;">Complete your profile to increase your chances.</p>
        </div>
        
        <!-- Profile Container -->
        <div class="profile-container">
            <!------------------------ Sidebar Navigation ------------------------>
            <div class="sidebar">
                <div class="profile-nav topic" id="left">
                    <div class="profile-nav-header">
                        <h3>Profile Sections</h3>
                    </div>
                    <ul class="profile-nav-list">
                        <li class="profile-nav-item">
                            <a class="profile-nav-link active" data-section="personal-info">
                                <span class="profile-nav-icon"><i class="fas fa-user"></i></span>
                                Personal Information
                            </a>
                        </li>
                        <li class="profile-nav-item">
                            <a class="profile-nav-link" data-section="contact-info">
                                <span class="profile-nav-icon"><i class="fas fa-address-book"></i></span>
                                Contact Info
                            </a>
                        </li>
                        <li class="profile-nav-item">
                            <a class="profile-nav-link" data-section="education">
                                <span class="profile-nav-icon"><i class="fas fa-graduation-cap"></i></span>
                                Education
                            </a>
                        </li>
                        <li class="profile-nav-item">
                            <a class="profile-nav-link" data-section="experience">
                                <span class="profile-nav-icon"><i class="fas fa-briefcase"></i></span>
                                Experience
                            </a>
                        </li>
                        <li class="profile-nav-item">
                            <a class="profile-nav-link" data-section="skills">
                                <span class="profile-nav-icon"><i class="fas fa-tools"></i></span>
                                Skills
                            </a>
                        </li>
                        <li class="profile-nav-item">
                            <a class="profile-nav-link" data-section="family-info">
                                <span class="profile-nav-icon"><i class="fas fa-users"></i></span>
                                Family Info
                            </a>
                        </li>
                        <li class="profile-nav-item">
                            <a class="profile-nav-link" data-section="banking">
                                <span class="profile-nav-icon"><i class="fas fa-university"></i></span>
                                Banking
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!----------------------- Profile Content ---------------->
            <div class="profile-content" id="right">
                <!-- Personal Information Section -->
                <div id="personal-info" class="profile-section active">
                    <h2 class="section-title">Personal Information</h2>
                    
                    <div id="error-container"></div>
                    
                    <div class="profile-header">
                        <div class="profile-image">
                            <?php 
                                $firstLetter = substr($fname, 0, 1);
                                if (isset($profile_image) && !empty($profile_image)) {
                                    echo '<img src="'.$profile_image.'" alt="Profile Image">';
                                } else {
                                    echo '<span>'.$firstLetter.'</span>';
                                }
                            ?>
                            <div class="edit-avatar" id="editAvatarBtn">Edit</div>
                        </div>
                        <div class="profile-info">
                            <h3 class="profile-name"><?php echo ($fname == NULL && $lname == NULL) ? $_SESSION['name'] : "{$fname} {$lname}"; ?></h3>
                            <p class="profile-role">Student</p>
                            <div class="profile-contact">
                                <div class="contact-item">
                                    <i class="fas fa-phone contact-icon"></i>
                                    <span><?php echo "+91 " . $number; ?></span>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope contact-icon"></i>
                                    <span><?php echo $email; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="profile-details">
                        <div class="detail-group">
                            <p class="detail-label">Date of Birth</p>
                            <p class="detail-value"><?php echo $DOB ? $DOB : 'Not provided'; ?></p>
                        </div>
                        <div class="detail-group">
                            <p class="detail-label">Address</p>
                            <p class="detail-value"><?php echo $address ? $address : 'Not provided'; ?></p>
                        </div>
                    </div>
                    
                    <button id="open-personal-info-modal" class="complete-profile-btn">
                        <i class="fas fa-pencil-alt"></i> Complete Your Profile
                    </button>
                </div>
                
                <!------------------------ Contact Information Section ------------------>
                <div id="contact-info" class="profile-section">
                    <h2 class="section-title">Contact Information</h2>
                    
                    <div id="email-error-container"></div>
                    
                    <div class="form-section">
                        <form id="verify-email-form" action="sendEmailOTP.php" method="POST">
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label">Email Address</label>
                                    <div style="display: flex; align-items: center; gap: 10px;">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email address" value="<?php echo $email; ?>" <?php echo $email_verified ? 'readonly' : ''; ?> required>
                                        <?php if ($email_verified): ?>
                                            <button type="button" id="verified-email-btn" class="btn btn-success" disabled>
                                                Verified<i class="fas fa-check"></i>
                                            </button>
                                            <a href="#" id="change-email-link" style="color: #fd981d; cursor: pointer;">Change Email</a>
                                        <?php else: ?>
                                            <button type="submit" id="verify-email-btn" class="btn btn-primary">
                                                Verify
                                            </button>
                                            <span id="email-timer" class="timer" style="margin-left: 10px; color: #666; display: none;"></span>
                                        <?php endif; ?>
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const changeEmailLink = document.getElementById('change-email-link');
                                            const emailInput = document.querySelector('input[name="email"]');
                                            const verifyEmailBtn = document.getElementById('verify-email-btn');
                                            const verifiedEmailBtn = document.getElementById('verified-email-btn');
                                            const emailTimer = document.getElementById('email-timer');

                                            if (changeEmailLink) {
                                                changeEmailLink.addEventListener('click', function (e) {
                                                    e.preventDefault();
                                                    emailInput.value = '';
                                                    emailInput.removeAttribute('readonly');
                                                    if (verifiedEmailBtn) {
                                                        verifiedEmailBtn.style.display = 'none';
                                                    }
                                                    if (verifyEmailBtn) {
                                                        verifyEmailBtn.style.display = 'inline-block';
                                                    }
                                                    this.style.display = 'none';
                                                });
                                            }

                                            if (verifyEmailBtn) {
                                                verifyEmailBtn.addEventListener('click', function (e) {
                                                    e.preventDefault();
                                                    let duration = 300; // 5 minutes in seconds
                                                    emailTimer.style.display = 'inline';
                                                    verifyEmailBtn.disabled = true;

                                                    const interval = setInterval(() => {
                                                        const minutes = Math.floor(duration / 60);
                                                        const seconds = duration % 60;
                                                        emailTimer.textContent = `${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
                                                        duration--;

                                                        if (duration < 0) {
                                                            clearInterval(interval);
                                                            emailTimer.textContent = '';
                                                            emailTimer.style.display = 'none';
                                                            verifyEmailBtn.disabled = false;
                                                            verifyEmailBtn.textContent = 'Resend OTP';
                                                        }
                                                    }, 1000);
                                                });
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </form>
                        
                        <div id="otp-container" class="otp-container">
                            <form id="verify-otp-form" action="update-profile.php" method="POST">
                                <input type="hidden" name="form_type" value="contact-email-info">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Verification Code</label>
                                        <div style="display: flex; gap: 10px;">
                                            <input type="text" class="form-control" name="Email_OTP" placeholder="Enter 6-digit OTP" pattern="[0-9]{6}" maxlength="6" required>
                                            <button type="submit" id="verify-otp-btn" class="btn btn-primary">
                                                Verify OTP
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <form id="contact-phone-form" action="update-profile.php" method="POST">
                            <input type="hidden" name="form_type" value="contact-phone-info">
                            <div class="form-row" style="margin-top: 30px;">
                                <div class="form-group">
                                    <label class="form-label">Phone Number</label>
                                    <div style="display: flex; gap: 10px;">
                                        <input type="text" class="form-control" name="number" placeholder="Enter your phone number" value="<?php echo $number; ?>" pattern="[0-9]{10}" maxlength="10" required>
                                        <button type="button" id="verify-phone-btn" class="btn btn-primary">
                                            Verify
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-buttons">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!------------------- Education Section ------------------->
                <div id="education" class="profile-section">
                    <h2 class="section-title">Education Details</h2>
                    
                    <div class="completion-card">
                        <p>Add your educational qualifications to enhance your profile.</p>
                        <button class="btn btn-primary">Add Education</button>
                    </div>
                </div>
                
                <!------------------- Experience Section ------------------->
                <div id="experience" class="profile-section">
                    <h2 class="section-title">Previous Experience</h2>
                    
                    <div class="completion-card">
                        <p>Add your work experience to make your profile stand out.</p>
                        <button class="btn btn-primary">Add Experience</button>
                    </div>
                </div>
                
                <!------------------- Skills Section ------------------->
                <div id="skills" class="profile-section">
                    <h2 class="section-title">Skills Section</h2>
                    
                    <div class="completion-card">
                        <p>Add your skills to highlight your capabilities.</p>
                        <button class="btn btn-primary">Add Skills</button>
                    </div>
                </div>
                
                <!------------------- Family Info Section ------------------->
                <div id="family-info" class="profile-section">
                    <h2 class="section-title">Family Information</h2>
                    
                    <div class="completion-card">
                        <p>Add your family details for complete profile information.</p>
                        <button class="btn btn-primary">Add Family Details</button>
                    </div>
                </div>
                
                <!------------------- Banking Section ------------------->
                <div id="banking" class="profile-section">
                    <h2 class="section-title">Banking Details</h2>
                    
                    <div class="completion-card">
                        <p>Add your banking information for payment processing.</p>
                        <button class="btn btn-primary">Add Banking Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!------------------- Personal Info Modal ------------------->
    <div id="personal-info-modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Update Personal Information</h3>
                <button class="modal-close" id="close-personal-info-modal">
                    <i class="fas fa-times"></i>
                </button>
                <div id="responseContainer"></div>
            </div>
            
            <form id="personal-info-form" action="update-profile.php" method="POST">
                <input type="hidden" name="form_type" value="personal-info">
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" placeholder="Enter your first name" value="<?php echo $fname; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Enter your last name" value="<?php echo $lname; ?>" required>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" name="DOB" value="<?php echo $DOB; ?>" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <div class="radio-group">
                            <label class="radio-label">
                                <input type="radio" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?> required>
                                <span class="radio-checkmark"></span>
                                Male
                            </label>
                            <label class="radio-label">
                                <input type="radio" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?> required>
                                <span class="radio-checkmark"></span>
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" placeholder="Enter your full address" required><?php echo $address; ?></textarea>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="cancel-personal-info">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="submit-personal-info submit-personal-info-form">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>


        // // <-- ------------Display Edit Profile Content ------------ -->

        let editInfo = document.querySelector(".edit-personal-info");
        let completeProfile = document.querySelector(".complete-profile-btn");
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

            // Submit "Personal Info" form Dynamically
            $("#personal-info-form").submit(function(event) {
                event.preventDefault(); // Prevent default form submission
                
                var formData = $(this).serialize(); // Serialize form data
                
                $.ajax({
                    url: $(this).attr("action"), // Use the form's action attribute
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#responseContainer").html(response); // Display response on the same page
                    },
                    error: function() {
                        $("#responseContainer").html("An error occurred. Please try again.");
                    }
                });
            });

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
            $(".complete-profile-btn").click(() => {
                toggleModal(".edit-personal-info", true);
            });

            // Close modal on close button click
            $(".modal-close-btn").click(() => {
                toggleModal(".edit-personal-info", false);
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
    <script>
        // This code should be placed in profile-script.js or at the bottom of the page
        document.addEventListener('DOMContentLoaded', function() {
            // Modal Elements
            const personalInfoModal = document.getElementById('personal-info-modal');
            const openPersonalInfoBtn = document.getElementById('open-personal-info-modal');
            const closePersonalInfoBtn = document.getElementById('close-personal-info-modal');
            const cancelPersonalInfoBtn = document.getElementById('cancel-personal-info');
            const responseContainer = document.getElementById('responseContainer');
            
            // Tab Navigation
            const navLinks = document.querySelectorAll('.profile-nav-link');
            const profileSections = document.querySelectorAll('.profile-section');
            
            // Form Elements
            const personalInfoForm = document.getElementById('personal-info-form');
            const verifyEmailForm = document.getElementById('verify-email-form');
            const verifyOtpForm = document.getElementById('verify-otp-form');
            const otpContainer = document.getElementById('otp-container');
            
            // Email verification elements
            const verifyEmailBtn = document.getElementById('verify-email-btn');
            const emailTimer = document.getElementById('email-timer');
            
            // Set up gender radio button based on PHP data
            function setupGenderRadio() {
                // Assuming you have a PHP variable $gender
                // This would be better done directly in PHP, but as a fallback:
                const genderRadios = document.querySelectorAll('input[name="gender"]');
                const gender = '<?php echo $gender; ?>'; // This would be rendered by PHP
                
                if (gender) {
                    genderRadios.forEach(radio => {
                        if (radio.value === gender) {
                            radio.checked = true;
                        }
                    });
                }
            }
            
            // Modal Functions
            function openModal(modal) {
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
                modal.classList.add('active');
                
                // Add entrance animation
                const modalContent = modal.querySelector('.modal-content');
                modalContent.style.opacity = '0';
                modalContent.style.transform = 'translateY(-50px)';
                
                // Trigger animation after a small delay (for DOM to update)
                setTimeout(() => {
                    modalContent.style.transition = 'all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275)';
                    modalContent.style.opacity = '1';
                    modalContent.style.transform = 'translateY(0)';
                }, 10);
            }
            
            function closeModal(modal) {
                const modalContent = modal.querySelector('.modal-content');
                
                // Exit animation
                modalContent.style.transition = 'all 0.3s ease-in-out';
                modalContent.style.opacity = '0';
                modalContent.style.transform = 'translateY(20px)';
                
                // Wait for animation to complete before hiding modal
                setTimeout(() => {
                    modal.classList.remove('active');
                    document.body.style.overflow = ''; // Restore scrolling
                    
                    // Reset for next opening
                    modalContent.style.transition = '';
                }, 300);
            }
            
            // Tab Navigation
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Remove active class from all links and sections
                    navLinks.forEach(l => l.classList.remove('active'));
                    profileSections.forEach(s => s.classList.remove('active'));
                    
                    // Add active class to clicked link
                    this.classList.add('active');
                    
                    // Get target section ID and activate it with animation
                    const targetId = this.getAttribute('data-section');
                    const targetSection = document.getElementById(targetId);
                    
                    // Fade in animation
                    targetSection.style.opacity = '0';
                    targetSection.classList.add('active');
                    
                    setTimeout(() => {
                        targetSection.style.transition = 'opacity 0.3s ease-in-out';
                        targetSection.style.opacity = '1';
                    }, 10);
                });
            });
            
            // Event Listeners
            if (openPersonalInfoBtn) {
                openPersonalInfoBtn.addEventListener('click', () => {
                    openModal(personalInfoModal);
                    setupGenderRadio();
                });
            }
            
            if (closePersonalInfoBtn) {
                closePersonalInfoBtn.addEventListener('click', () => {
                    closeModal(personalInfoModal);
                });
            }
            
            if (cancelPersonalInfoBtn) {
                cancelPersonalInfoBtn.addEventListener('click', () => {
                    closeModal(personalInfoModal);
                });
            }
            
            // Close modal if clicking outside the content
            window.addEventListener('click', (event) => {
                if (event.target === personalInfoModal) {
                    closeModal(personalInfoModal);
                }
            });
            
            // Form submission with AJAX
            if (personalInfoForm) {
                personalInfoForm.addEventListener('submit', function(event) {
                    event.preventDefault();
                    
                    // Add loading state
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
                    submitBtn.disabled = true;
                    
                    // Form data
                    const formData = new FormData(this);
                    
                    // AJAX request
                    fetch(this.action, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.text())
                    .then(data => {
                        // Reset button state
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        
                        // Show success or error message
                        if (data.includes('success')) {
                            // Success notification
                            const successAlert = document.createElement('div');
                            successAlert.className = 'alert alert-success';
                            successAlert.innerHTML = '<i class="fas fa-check-circle"></i> Profile updated successfully!';
                            responseContainer.innerHTML = '';
                            responseContainer.appendChild(successAlert);
                            
                            // Close modal and refresh page data after delay
                            setTimeout(() => {
                                closeModal(personalInfoModal);
                                // Refresh the page data without full reload
                                window.location.reload();
                            }, 1500);
                        } else {
                            // Error notification
                            const errorAlert = document.createElement('div');
                            errorAlert.className = 'alert alert-danger';
                            errorAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + data;
                            responseContainer.innerHTML = '';
                            responseContainer.appendChild(errorAlert);
                        }
                    })
                    .catch(error => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        
                        // Error notification
                        const errorAlert = document.createElement('div');
                        errorAlert.className = 'alert alert-danger';
                        errorAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> An error occurred. Please try again.';
                        responseContainer.innerHTML = '';
                        responseContainer.appendChild(errorAlert);
                    });
                });
            }
            
            // Email verification
            if (verifyEmailBtn) {
                verifyEmailBtn.addEventListener('click', function() {
                    const emailInput = verifyEmailForm.querySelector('input[name="email"]');
                    
                    if (!emailInput.value) {
                        alert("Please enter your email address");
                        return;
                    }
                    
                    // Add loading state
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                    this.disabled = true;
                    
                    // AJAX for email OTP
                    fetch(verifyEmailForm.action, {
                        method: 'POST',
                        body: new FormData(verifyEmailForm)
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Reset button state
                        this.innerHTML = originalText;
                        this.disabled = false;
                        
                        if (data.status === 'success') {
                            // Show OTP input with animation
                            otpContainer.style.display = 'block';
                            otpContainer.style.opacity = '0';
                            otpContainer.style.transform = 'translateY(20px)';
                            
                            setTimeout(() => {
                                otpContainer.style.transition = 'all 0.3s ease-in-out';
                                otpContainer.style.opacity = '1';
                                otpContainer.style.transform = 'translateY(0)';
                            }, 10);
                            
                            // Start timer
                            startEmailTimer();
                            
                            // Success notification
                            const successAlert = document.createElement('div');
                            successAlert.className = 'alert alert-success';
                            successAlert.innerHTML = '<i class="fas fa-check-circle"></i> OTP sent to your email!';
                            document.getElementById('email-error-container').innerHTML = '';
                            document.getElementById('email-error-container').appendChild(successAlert);
                        } else {
                            // Error notification
                            const errorAlert = document.createElement('div');
                            errorAlert.className = 'alert alert-danger';
                            errorAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + data.message;
                            document.getElementById('email-error-container').innerHTML = '';
                            document.getElementById('email-error-container').appendChild(errorAlert);
                        }
                    })
                    .catch(error => {
                        this.innerHTML = originalText;
                        this.disabled = false;
                        
                        // Error notification
                        const errorAlert = document.createElement('div');
                        errorAlert.className = 'alert alert-danger';
                        errorAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> An error occurred. Please try again.';
                        document.getElementById('email-error-container').innerHTML = '';
                        document.getElementById('email-error-container').appendChild(errorAlert);
                    });
                });
            }
            
            // OTP verification
            if (verifyOtpForm) {
                verifyOtpForm.addEventListener('submit', function(event) {
                    event.preventDefault();
                    
                    const otpInput = this.querySelector('input[name="Email_OTP"]');
                    
                    if (!otpInput.value) {
                        alert("Please enter the OTP");
                        return;
                    }
                    
                    // Add loading state
                    const submitBtn = this.querySelector('button[type="submit"]');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verifying...';
                    submitBtn.disabled = true;
                    
                    // AJAX for OTP verification
                    fetch(this.action, {
                        method: 'POST',
                        body: new FormData(this)
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Reset button state
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        
                        if (data.status === 'Verified') {
                            // Success notification
                            const successAlert = document.createElement('div');
                            successAlert.className = 'alert alert-success';
                            successAlert.innerHTML = '<i class="fas fa-check-circle"></i> Email verified successfully!';
                            document.getElementById('email-error-container').innerHTML = '';
                            document.getElementById('email-error-container').appendChild(successAlert);
                            
                            // Hide OTP container with animation
                            otpContainer.style.transition = 'all 0.3s ease-in-out';
                            otpContainer.style.opacity = '0';
                            otpContainer.style.transform = 'translateY(20px)';
                            
                            setTimeout(() => {
                                otpContainer.style.display = 'none';
                            }, 300);
                            
                            // Stop timer
                            clearInterval(emailTimerInterval);
                            emailTimer.style.display = 'none';
                            
                            // Update UI to show verified status
                            verifyEmailBtn.innerHTML = '<i class="fas fa-check-circle"></i> Verified';
                            verifyEmailBtn.classList.remove('btn-primary');
                            verifyEmailBtn.classList.add('btn-success');
                            verifyEmailBtn.disabled = true;
                            
                            // Refresh the page after a delay
                            setTimeout(() => {
                                window.location.reload();
                            }, 1500);
                        } else {
                            // Error notification
                            const errorAlert = document.createElement('div');
                            errorAlert.className = 'alert alert-danger';
                            errorAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> ' + data.message;
                            document.getElementById('email-error-container').innerHTML = '';
                            document.getElementById('email-error-container').appendChild(errorAlert);
                        }
                    })
                    .catch(error => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        
                        // Error notification
                        const errorAlert = document.createElement('div');
                        errorAlert.className = 'alert alert-danger';
                        errorAlert.innerHTML = '<i class="fas fa-exclamation-circle"></i> An error occurred. Please try again.';
                        document.getElementById('email-error-container').innerHTML = '';
                        document.getElementById('email-error-container').appendChild(errorAlert);
                    });
                });
            }
            
            // Email OTP timer
            let emailTimerInterval;
            function startEmailTimer() {
                let duration = 300; // 5 minutes in seconds
                emailTimer.style.display = 'block';
                
                clearInterval(emailTimerInterval); // Clear any existing timer
                
                emailTimerInterval = setInterval(() => {
                    let minutes = Math.floor(duration / 60);
                    let seconds = duration % 60;
                    
                    // Format time as MM:SS
                    emailTimer.textContent = `OTP expires in ${minutes}:${seconds < 10 ? '0' + seconds : seconds}`;
                    
                    if (--duration < 0) {
                        // Timer expired
                        clearInterval(emailTimerInterval);
                        emailTimer.textContent = 'OTP expired. Please request a new one.';
                        emailTimer.style.color = '#dc3545';
                        
                        // Disable verify button
                        const verifyOtpBtn = document.getElementById('verify-otp-btn');
                        if (verifyOtpBtn) {
                            verifyOtpBtn.disabled = true;
                        }
                    }
                }, 1000);
            }
            
            // Avatar upload functionality
            const editAvatarBtn = document.getElementById('editAvatarBtn');
            if (editAvatarBtn) {
                editAvatarBtn.addEventListener('click', function() {
                    // Create a file input
                    const fileInput = document.createElement('input');
                    fileInput.type = 'file';
                    fileInput.accept = 'image/*';
                    fileInput.style.display = 'none';
                    document.body.appendChild(fileInput);
                    
                    // Trigger click on file input
                    fileInput.click();
                    
                    // Handle file selection
                    fileInput.addEventListener('change', function() {
                        if (this.files && this.files[0]) {
                            const formData = new FormData();
                            formData.append('profile_image', this.files[0]);
                            formData.append('form_type', 'avatar-upload');
                            
                            // AJAX request to upload avatar
                            fetch('update-profile.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => response.text())
                            .then(data => {
                                if (data.includes('success')) {
                                    // Refresh the page to show new avatar
                                    window.location.reload();
                                } else {
                                    alert('Failed to upload image. Please try again.');
                                }
                            })
                            .catch(error => {
                                alert('An error occurred. Please try again.');
                            });
                        }
                        
                        // Clean up
                        document.body.removeChild(fileInput);
                    });
                });
            }
            
            // Initialize the page
            setupGenderRadio();
        });
    </script>
    <script src="profile-script.js"></script>
    <script>hljs.highlightAll();</script>
</body>

</html>
        