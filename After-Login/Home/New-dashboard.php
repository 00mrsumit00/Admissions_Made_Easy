<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions Made Easy - Student Dashboard</title>
    <style>
        :root {
            --primary: #ff7b00;
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        }

        .user-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
            padding: 0.5rem 1rem;
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .welcome-card:hover {
            transform: translateY(-5px);
        }

        .welcome-message h2 {
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .welcome-message p {
            color: #777;
        }

        .weather-icon {
            font-size: 3rem;
            color: var(--primary);
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .profile-completion:hover {
            transform: translateY(-5px);
        }

        .profile-completion h3 {
            margin-bottom: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-completion h3 span {
            font-size: 0.9rem;
            color: var(--primary);
            cursor: pointer;
        }

        .progress-container {
            width: 100%;
            height: 10px;
            background-color: #eee;
            border-radius: 10px;
            margin-bottom: 1.5rem;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background-color: var(--primary);
            border-radius: 10px;
            width: 45%;
            transition: width 1s ease;
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
        }

        .item-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .item-card:hover {
            background-color: var(--primary-light);
            color: white;
            transform: translateY(-3px);
        }

        .item-card i {
            font-size: 2rem;
            margin-bottom: 0.5rem;
        }

        .updates-section {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .updates-section:hover {
            transform: translateY(-5px);
        }

        .updates-section h3 {
            margin-bottom: 1.5rem;
        }

        .update-card {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
            border-left: 4px solid var(--primary);
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }

        .update-card:hover {
            transform: translateX(5px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .update-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.5rem;
        }

        .update-title {
            font-weight: 600;
        }

        .update-date {
            color: #777;
            font-size: 0.8rem;
        }

        .update-content {
            color: #555;
            font-size: 0.9rem;
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
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .profile-card:hover {
            transform: translateY(-5px);
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
            background-color: var(--primary);
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .profile-action:hover {
            background-color: var(--primary-light);
        }

        .quick-stats {
            background-color: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .quick-stats:hover {
            transform: translateY(-5px);
        }

        .quick-stats h3 {
            margin-bottom: 1.5rem;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            border-radius: 8px;
            background-color: #f8f9fa;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        .stat-item:hover {
            transform: translateX(5px);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .stat-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
        }

        .stat-info {
            flex: 1;
        }

        .stat-value {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .stat-label {
            color: #777;
            font-size: 0.8rem;
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
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(20px);
            transition: all 0.3s ease;
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
        }

        .modal-title {
            font-weight: 600;
            color: var(--primary);
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #777;
            transition: color 0.3s ease;
        }

        .close-modal:hover {
            color: var(--danger);
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
        }

        .btn {
            padding: 0.7rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-light);
        }

        .btn-secondary {
            background-color: #eee;
            color: var(--dark);
        }

        .btn-secondary:hover {
            background-color: #ddd;
        }

        /* Forms */
        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.7rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(255, 123, 0, 0.1);
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
        }

        .file-upload:hover {
            border-color: var(--primary);
            background-color: rgba(255, 123, 0, 0.05);
        }

        .file-upload i {
            font-size: 3rem;
            color: #aaa;
            margin-bottom: 1rem;
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
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(100%);
            }
        }

        /* Responsive */
        @media (max-width: 992px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
            
            .nav-links {
                display: none;
            }
            
            .mobile-menu-toggle {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .incomplete-items {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <img src="/api/placeholder/80/40" alt="Admissions Made Easy Logo" />
            <h2>Admissions Made Easy</h2>
        </div>
        
        <nav class="nav-links">
            <a href="#" class="active">Home</a>
            <a href="#">Notes</a>
            <a href="#">Code</a>
            <a href="#">Payment</a>
        </nav>
        
        <div class="user-menu">
            <div class="user-avatar" id="userMenuToggle">
                <span>V</span>
            </div>
            <span>Vishal</span>
            <i class="fas fa-chevron-down"></i>
            
            <div class="user-dropdown" id="userDropdown">
                <div class="user-info">
                    <h4>Vishal</h4>
                    <small>Student</small>
                </div>
                
                <div class="menu-item">
                    <i class="fas fa-user"></i>
                    <span>My Profile</span>
                </div>
                
                <div class="menu-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </div>
                
                <div class="menu-item">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </div>
                
                <div class="menu-item logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Log Out</span>
                </div>
            </div>
        </div>
    </header>
    
    <!-- Main Content -->
    <div class="container">
        <div class="page-title">
            <div class="breadcrumb">
                <a href="#">Home</a>
                <span>/</span>
                <span>My Dashboard</span>
            </div>
        </div>
        
        <div class="welcome-card">
            <div class="welcome-message">
                <h2>Hi, Welcome back Vishal!</h2>
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
                        <span id="editProfileBtn">Edit Profile</span>
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
                        <span>V</span>
                        <div class="edit-avatar">Edit</div>
                    </div>
                    
                    <div class="profile-name">Vishal</div>
                    <div class="profile-role">Student</div>
                    
                    <button class="profile-action" id="viewProfileBtn">View Profile</button>
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
                <form id="personalInfoForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" value="Vishal" />
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" />
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label" for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" />
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label" for="gender">Gender</label>
                            <select class="form-control" id="gender">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="address">Full Address</label>
                        <textarea class="form-control" id="address" rows="3"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Profile Photo</label>
                        <div class="file-upload">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Drag & drop your photo here or <span style="color: var(--primary);">browse</span></p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary close-modal-btn">Cancel</button>
                <button class="btn btn-primary">Save Changes</button>
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
                <form id="contactInfoForm">
                    <div class="form-group">
                        <label class="form-label" for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" />
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" />
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="alternatePhone">Alternate Phone Number</label>
                        <input type="tel" class="form-control" id="alternatePhone" />
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label" for="parentPhone">Parent's Phone Number</label>
                        <input type="tel" class="form-control" id="parentPhone" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary close-modal-btn">Cancel</button>
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>