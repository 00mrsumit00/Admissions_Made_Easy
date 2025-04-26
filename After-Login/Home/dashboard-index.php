<?php  include('../../partials/Session/Session.php'); include('../partials/Sessions/Session-data.php'); include('../nav.php'); ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions Made Easy - Student Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
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

        body {
            background-color: #f5f5f5;
            color: var(--dark);
        }

        /* Header Styles */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background-color: white;
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

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .page-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #777;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: var(--dark);
            text-decoration: none;
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .welcome-card {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            overflow: hidden;
            position: relative;
        }

        .welcome-card::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            background: linear-gradient(135deg, rgba(253, 152, 29, 0.05) 0%, rgba(253, 152, 29, 0.2) 100%);
            border-radius: 0 12px 12px 0;
        }

        .welcome-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .welcome-message h2 {
            margin-bottom: 0.5rem;
            color: var(--dark);
            font-size: 1.6rem;
        }

        .welcome-message p {
            color: #777;
            max-width: 80%;
        }

        .weather-icon {
            font-size: 3.5rem;
            color: var(--primary);
            position: relative;
            z-index: 2;
        }

        .weather-icon i {
            text-shadow: 0 0 10px rgba(253, 152, 29, 0.3);
            animation: float 3s ease-in-out infinite;
        }

        /* Dashboard Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 3fr 1fr;
            gap: 2rem;
        }

        .main-content {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .profile-completion {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .profile-completion:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .profile-completion h3 {
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: var(--dark);
        }

        .profile-completion h3 span {
            font-size: 0.9rem;
            color: var(--primary);
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            transition: all 0.3s ease;
        }

        .profile-completion h3 span:hover {
            color: var(--primary-light);
            transform: translateX(3px);
        }

        .progress-container {
            width: 100%;
            height: 12px;
            background-color: #eee;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            overflow: hidden;
            position: relative;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
            border-radius: 10px;
            width: 45%;
            transition: width 1.5s cubic-bezier(0.1, 0.5, 0.5, 1);
            position: relative;
            overflow: hidden;
        }

        .progress-bar::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                90deg,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.4) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            animation: shimmer 2s infinite;
        }

        .incomplete-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .item-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1.2rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }

        .item-card:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(253, 152, 29, 0.2);
        }

        .item-card i {
            font-size: 2rem;
            margin-bottom: 0.8rem;
            transition: all 0.3s ease;
        }

        .item-card:hover i {
            transform: scale(1.1);
        }

        .updates-section {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .updates-section:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .updates-section h3 {
            margin-bottom: 1.5rem;
            color: var(--dark);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .see-all {
            font-size: 0.9rem;
            color: var(--primary);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .see-all:hover {
            color: var(--primary-light);
            text-decoration: underline;
        }

        .update-card {
            padding: 1.2rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--primary);
            background-color: #f8f9fa;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .update-card::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: var(--primary);
            transition: all 0.3s ease;
        }

        .update-card:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .update-card:hover::after {
            width: 8px;
        }

        .update-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.7rem;
        }

        .update-title {
            font-weight: 600;
            color: var(--dark);
        }

        .update-date {
            color: #777;
            font-size: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .update-content {
            color: #555;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .update-badge {
            display: inline-block;
            padding: 0.2rem 0.5rem;
            font-size: 0.75rem;
            border-radius: 4px;
            margin-top: 0.7rem;
            font-weight: 500;
        }

        .badge-success {
            background-color: rgba(40, 167, 69, 0.1);
            color: var(--success);
        }

        .badge-warning {
            background-color: rgba(255, 193, 7, 0.1);
            color: var(--warning);
        }

        .badge-info {
            background-color: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }

        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .profile-card {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .profile-card::before {
            content: "";
            position: absolute;
            top: -50px;
            left: -50px;
            width: 150px;
            height: 150px;
            background-color: rgba(253, 152, 29, 0.05);
            border-radius: 50%;
            z-index: 0;
        }

        .profile-card::after {
            content: "";
            position: absolute;
            bottom: -50px;
            right: -50px;
            width: 150px;
            height: 150px;
            background-color: rgba(253, 152, 29, 0.05);
            border-radius: 50%;
            z-index: 0;
        }

        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
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
            font-size: 1.2rem;
            color: var(--dark);
            z-index: 1;
            position: relative;
        }

        .profile-role {
            color: #777;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
            justify-content: center;
            z-index: 1;
            position: relative;
        }

        .profile-role i {
            color: var(--primary);
            font-size: 0.9rem;
        }

        .profile-action {
            width: 100%;
            padding: 0.8rem;
            border: none;
            border-radius: 8px;
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1;
            position: relative;
            box-shadow: 0 4px 10px rgba(253, 152, 29, 0.15);
        }

        .profile-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(253, 152, 29, 0.25);
        }

        .quick-stats {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .quick-stats:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .quick-stats h3 {
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.2rem;
            border-radius: 8px;
            background-color: #f8f9fa;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-item::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .stat-item.primary::before {
            background-color: var(--primary);
        }

        .stat-item.success::before {
            background-color: var(--success);
        }

        .stat-item.warning::before {
            background-color: var(--warning);
        }

        .stat-item:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .stat-item:hover::before {
            width: 8px;
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .stat-item:hover .stat-icon {
            transform: scale(1.1);
        }

        .stat-info {
            flex: 1;
        }

        .stat-value {
            font-weight: 600;
            font-size: 1.2rem;
            color: var(--dark);
            display: flex;
            align-items: baseline;
            gap: 0.3rem;
        }

        .stat-label {
            color: #777;
            font-size: 0.85rem;
            margin-top: 0.2rem;
        }

        .appointment-card {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            margin-top: 2rem;
        }

        .appointment-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        .appointment-card h3 {
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .appointment-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-radius: 8px;
            background-color: #f8f9fa;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .appointment-item:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }

        .appointment-date {
            width: 50px;
            height: 60px;
            background-color: var(--primary);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            font-weight: 600;
            line-height: 1.2;
            box-shadow: 0 4px 8px rgba(253, 152, 29, 0.2);
        }

        .appointment-date .month {
            font-size: 0.8rem;
            text-transform: uppercase;
        }

        .appointment-date .day {
            font-size: 1.3rem;
        }

        .appointment-info {
            flex: 1;
        }

        .appointment-title {
            font-weight: 600;
            margin-bottom: 0.3rem;
            color: var(--dark);
        }

        .appointment-time {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            color: #777;
            font-size: 0.9rem;
        }

        .appointment-actions {
            display: flex;
            gap: 0.5rem;
        }

        .appointment-btn {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }

        .btn-reschedule {
            background-color: rgba(23, 162, 184, 0.1);
            color: var(--info);
        }

        .btn-reschedule:hover {
            background-color: var(--info);
            color: white;
        }

        .btn-cancel {
            background-color: rgba(220, 53, 69, 0.1);
            color: var(--danger);
        }

        .btn-cancel:hover {
            background-color: var(--danger);
            color: white;
        }

        /* Modals */
        .modal-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .modal-backdrop.show {
            opacity: 1;
            visibility: visible;
        }

        .modal {
            background-color: white;
            border-radius: 12px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            transform: translateY(20px);
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .modal-backdrop.show .modal {
            transform: translateY(0);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem;
            border-bottom: 1px solid #eee;
            background-color: #f8f9fa;
        }

        .modal-title {
            font-weight: 600;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .modal-title i {
            font-size: 1.2rem;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #777;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .close-modal:hover {
            color: var(--danger);
            background-color: rgba(220, 53, 69, 0.1);
        }

        .modal-body {
            padding: 1.5rem;
            max-height: 70vh;
            overflow-y: auto;
        }

        .modal-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            background-color: #f8f9fa;
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            box-shadow: 0 4px 10px rgba(253, 152, 29, 0.15);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(253, 152, 29, 0.25);
        }

        .btn-secondary {
            background-color: #eee;
            color: var(--dark);
        }

        .btn-secondary:hover {
            background-color: #ddd;
            transform: translateY(-2px);
        }

        /* Forms */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 123, 0, 0.1);
            background-color: white;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        /* File Upload */
        .file-upload {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 2rem;
            border: 2px dashed #ddd;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
        }

        .file-upload:hover {
            border-color: var(--primary);
            background-color: rgba(255, 123, 0, 0.05);
        }

        .file-upload i {
            font-size: 3rem;
            color: #aaa;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .file-upload:hover i {
            color: var(--primary);
            transform: scale(1.1);
        }

        .file-upload p {
            color: #777;
            text-align: center;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px) rotate(5deg);
            }
            100% {
                transform: translateY(0);
            }
        }

    </style>
</head>

<body>
    
    <!-- Main Content -->
    <div class="container">
        <div class="page-title">
            <div class="breadcrumb">
                <a href="../../index.php">Home</a>
                <span>/</span>
                <span>My Dashboard</span>
            </div>
        </div>
        
        <div class="welcome-card">
            <div class="welcome-message">
                <h2>Hi, Welcome back <?php echo $fname; ?>!</h2>
                <p>Keep track of your application process and updates</p>
            </div>
            <div class="weather-icon">
                <i class="fas fa-sun"></i>
            </div>
        </div>
        
        <div class="dashboard-grid">
            <div class="main-content">
                <div class="profile-completion">
                    <h3>
                        Profile Completion
                        <span id="editProfileBtn" onclick="window.location.href='New-profile-index.php';">Edit Profile</span>
                    </h3>
                    
                    <div class="progress-container">
                        <div class="progress-bar"></div>
                    </div>
                    
                    <p>Your profile is <strong>45% complete</strong>. Complete your profile to increase your chances.</p>
                    
                    <div class="incomplete-items">
                        <div class="item-card" id="personalInfoBtn">
                            <i class="fas fa-user"></i>
                            <span>Personal Information</span>
                        </div>
                        
                        <div class="item-card" id="contactInfoBtn">
                            <i class="fas fa-phone"></i>
                            <span>Contact Information</span>
                        </div>
                        
                        <div class="item-card" id="educationBtn">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Education</span>
                        </div>
                        
                        <div class="item-card" id="familyInfoBtn">
                            <i class="fas fa-users"></i>
                            <span>Family Information</span>
                        </div>
                    </div>
                </div>
                
                <div class="updates-section">
                    <h3>Recent Updates</h3>
                    
                    <div class="update-card">
                        <div class="update-header">
                            <div class="update-title">Application Status Updated</div>
                            <div class="update-date">March 20, 2025</div>
                        </div>
                        <div class="update-content">
                            Your application for Computer Science at ABC University has been processed. Please check your email for further instructions.
                        </div>
                    </div>
                    
                    <div class="update-card">
                        <div class="update-header">
                            <div class="update-title">Document Verification</div>
                            <div class="update-date">March 18, 2025</div>
                        </div>
                        <div class="update-content">
                            Your academic documents have been verified successfully. No further action is required at this time.
                        </div>
                    </div>
                    
                    <div class="update-card">
                        <div class="update-header">
                            <div class="update-title">Scholarship Opportunity</div>
                            <div class="update-date">March 15, 2025</div>
                        </div>
                        <div class="update-content">
                            New scholarship opportunities are available for Computer Science students. Contact your counselor for more information.
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="sidebar">
                <div class="profile-card">
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
                    
                    <div class="profile-name"><?php echo $fname; ?></div>
                    <div class="profile-role">Student</div>
                    
                    <button class="profile-action" id="viewProfileBtn" onclick="window.location.href='Old-profile-index.php';">View Profile</button>
                </div>
                
                <div class="quick-stats">
                    <h3>Application Stats</h3>
                    
                    <div class="stat-item">
                        <div class="stat-icon" style="background-color: var(--primary);">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">3</div>
                            <div class="stat-label">Applications Submitted</div>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon" style="background-color: var(--success);">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">1</div>
                            <div class="stat-label">Applications Approved</div>
                        </div>
                    </div>
                    
                    <div class="stat-item">
                        <div class="stat-icon" style="background-color: var(--warning);">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">2</div>
                            <div class="stat-label">Applications Pending</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modals -->
    <!-- Personal Information Modal -->
    <div class="modal-backdrop" id="personalInfoModal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title">Personal Information</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="personalInfoForm" action="update-profile.php" method="post">
                    <input type="hidden" name="form_type" value="personal_info">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $fname; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo isset($lname) ? $lname : ''; ?>" />
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" value="<?php echo isset($dob) ? $dob : ''; ?>" />
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="gender">Gender</label>
                            <select class="form-control" id="gender" name="gender">
                                <option value="">Select Gender</option>
                                <option value="male" <?php echo (isset($gender) && $gender == 'male') ? 'selected' : ''; ?>>Male</option>
                                <option value="female" <?php echo (isset($gender) && $gender == 'female') ? 'selected' : ''; ?>>Female</option>
                                <option value="other" <?php echo (isset($gender) && $gender == 'other') ? 'selected' : ''; ?>>Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="address">Full Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"><?php echo isset($address) ? $address : ''; ?></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary close-modal-btn">Cancel</button>
                <button class="btn btn-primary" id="savePersonalInfo">Save Changes</button>
            </div>
        </div>
    </div>
    
    <!-- Contact Information Modal -->
    <div class="modal-backdrop" id="contactInfoModal">
        <div class="modal">
            <div class="modal-header">
                <h3 class="modal-title">Contact Information</h3>
                <button class="close-modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="contactInfoForm" action="update-profile.php" method="post">
                    <input type="hidden" name="form_type" value="contact_info">
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" />
                    </div>
                    
</body>
</html>

?>