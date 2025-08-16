<!doctype php>
<php lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Links of CSS files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/remixicon.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/fancybox.min.css">
    <link rel="stylesheet" href="assets/css/selectize.min.css">
    <link rel="stylesheet" href="assets/css/metismenu.min.css">
    <link rel="stylesheet" href="assets/css/simplebar.min.css">
    <link rel="stylesheet" href="assets/css/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="assets/css/dark.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Eeza - Job Board & Hiring + Dashboard php Template</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>
    <!-- Start Preloader Area -->
    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->
    <!-- Start Sidemenu Area -->
    <div class="sidemenu-area">
        <div class="sidemenu-header">
            <a href="dashboard.php" class="navbar-brand d-flex align-items-center">


            <?php
            include'utilities/conn.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    // Not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>







                    <img src="assets/images/bgimg.png" class="black-logo" alt="image" height="150px" width="120px">
                </a>




                
            <div class="responsive-burger-menu d-block d-lg-none">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
        <div class="sidemenu-body">
            <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
                <li class="nav-item active">
                    <a href="dashboard.php" class="nav-link">
                            <span class="icon"><i class="ri-home-line"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-company-profile.php" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">Company Profile</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-post-job.php" class="nav-link">
                            <span class="icon"><i class="ri-send-plane-fill"></i></span>
                            <span class="menu-title">Post a New Job</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-manage-job.php" class="nav-link">
                            <span class="icon"><i class="ri-briefcase-line"></i></span>
                            <span class="menu-title">Manage Jobs</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-applicants.php" class="nav-link">
                            <span class="icon"><i class="ri-file-list-line"></i></span>
                            <span class="menu-title">All Applicants</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-submit-resume.php" class="nav-link">
                            <span class="icon"><i class="ri-bookmark-line"></i></span>
                            <span class="menu-title">Submit Resumes</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-shorlisted-resume.php" class="nav-link">
                            <span class="icon"><i class="ri-list-check"></i></span>
                            <span class="menu-title">Shorlisted Resumes</span>
                        </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-packages.php" class="nav-link">
                            <span class="icon"><i class="ri-stack-fill"></i></span>
                            <span class="menu-title">Packages</span>
                        </a>
                </li>
      
          
                <li class="nav-item">
                    <a href="requests.php" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">Requests</span>
                        </a>
                </li>

                      <li class="nav-item">
                    <a href="dashboard-change-password.php" class="nav-link">
                            <span class="icon"><i class="ri-lock-line"></i></span>
                            <span class="menu-title">Change Password</span>
                        </a>
                </li>
        
            </ul>
        </div>
    </div>
    <!-- End Sidemenu Area -->
    <div class="main-dashboard-content d-flex flex-column">
<!-- Start Navbar Area -->
<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="main-responsive-menu">
            <div class="responsive-burger-menu d-lg-none d-block">
                <span class="top-bar"></span>
                <span class="middle-bar"></span>
                <span class="bottom-bar"></span>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            Home 
                            <i class="ri-arrow-down-s-line"></i>
                        </a>         
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Job Listing 
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="job-listing-1.php" class="nav-link">Job Listing - One</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-listing-2.php" class="nav-link">Job Listing - Two</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-listing-3.php" class="nav-link">Job Listing - Three</a>
                            </li>
                            <li class="nav-item">
                                <a href="add-listing.php" class="nav-link">Add Listing</a>
                            </li>
                            <li class="nav-item">
                                <a href="my-listing.php" class="nav-link">My Listing</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Job Details
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="job-details-1.php" class="nav-link">Job Details - One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="job-details-2.php" class="nav-link">Job Details - Two</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Candidates
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="candidates-1.php" class="nav-link">Candidates - One</a>
                            </li>
                            <li class="nav-item">
                                <a href="candidates-2.php" class="nav-link">Candidates - Two</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-submit-resume.php" class="nav-link">Submit Resume</a>
                            </li>
                            <li class="nav-item">
                                <a href="add-resume.php" class="nav-link">Add Resume</a>
                            </li>
                            <li class="nav-item">
                                <a href="my-resume.php" class="nav-link">My Resume</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Candidates Details
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="candidates-details-1.php" class="nav-link">Candidates Details - One</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="candidates-details-2.php" class="nav-link">Candidates Details - Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="candidates-dashboard.php" class="nav-link">Candidates Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Employers
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="employers.php" class="nav-link">Employers</a>
                            </li>
                            <li class="nav-item">
                                <a href="employers-details.php" class="nav-link">Employers Details</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link">Employers Dashboard</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Pages 
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Shop 
                                    <i class="ri-arrow-right-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="shop-details.php" class="nav-link">Shop Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.php" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.php" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="my-account.php" class="nav-link">My Account</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="about-us.php" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="pricing-plan.php" class="nav-link">Pricing Plan</a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="testimonials.php" class="nav-link">Testimonials</a>
                            </li>
                            <li class="nav-item">
                                <a href="faq.php" class="nav-link">FAQ</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-invoice.php" class="nav-link">Invoice</a>
                            </li>
                            <li class="nav-item">
                                <a href="profile-authentication.php" class="nav-link">Profile Authentication</a>
                            </li>
                            <li class="nav-item">
                                <a href="terms-of-service.php" class="nav-link">Terms of Service</a>
                            </li>
                            <li class="nav-item">
                                <a href="privacy-policy.php" class="nav-link">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a href="error-404.php" class="nav-link">404 Error</a>
                            </li>
                            <li class="nav-item">
                                <a href="coming-soon.php" class="nav-link">Coming Soon</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Blog 
                            <i class="ri-arrow-down-s-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="blog.php" class="nav-link">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog-right-sidebar.php" class="nav-link">Blog Right Sidebar</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog-details.php" class="nav-link">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
                </ul>
                <div class="others-options d-flex align-items-center">
                    <div class="option-item">
                        <div class="dropdown profile-nav-item">
                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="menu-profile">
                                    <img src="assets/images/dashboard/user1.jpg" class="rounded-circle" alt="image">
                                    <span class="name">My Account</span>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="assets/images/dashboard/user1.jpg" class="rounded-circle" alt="image">
                                    </div>
                                    <div class="info text-center">
                                        <span class="name">Husnain Javed</span>
                                        <p class="mb-3 email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f79f929b9b98b79699938598849a9e839fd994989a">[email&#160;protected]</a></p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item active">
                                            <a href="dashboard.php" class="nav-link">
                                                <span class="icon"><i class="ri-home-line"></i></span>
                                                <span class="menu-title">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-applicants.php" class="nav-link">
                                                <span class="icon"><i class="ri-file-list-line"></i></span>
                                                <span class="menu-title">All Applicants</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-submit-resume.php" class="nav-link">
                                                <span class="icon"><i class="ri-bookmark-line"></i></span>
                                                <span class="menu-title">Submit Resumes</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-packages.php" class="nav-link">
                                                <span class="icon"><i class="ri-stack-fill"></i></span>
                                                <span class="menu-title">Packages</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown-footer">
                                    <ul class="profile-nav">
                                        <li class="nav-item">
                                            <a href="logout.php" class="nav-link"><i class="ri-logout-box-r-line"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- End Navbar Area -->