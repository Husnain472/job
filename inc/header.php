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

    <title>Job Board & Hiring</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>






<style>
    #cursor {
        position: fixed;
        pointer-events: none;
        top: 0;
        left: 0;
        z-index: 9999;
        transition: transform 0.2s ease-out;
    }
</style>

<div id="cursor">
    <svg width="65" height="65" viewBox="0 0 100 100" fill="none">
        <!-- Outer Circle -->
        <circle cx="50" cy="50" r="45" stroke="#00ADB5" stroke-width="4"/>
        <!-- Inner Dot -->
        <circle cx="50" cy="50" r="8" fill="#00ADB5"/>
    </svg>
</div>

<script>
    const cursor = document.getElementById('cursor');
    
    document.addEventListener('mousemove', e => {
        cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
    });
</script>



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

    <!-- Start Header Area -->
    <header class="main-header-area">
        <!-- Start Topbar Area -->
        <div class="topbar-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6">
                        <ul class="topbar-social-list">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank"><i class="flaticon-instagram"></i></a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/" target="_blank"><i class="flaticon-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-7 col-md-6">
                        <ul class="topbar-action">
                            <li>
                                <a href="profile-authentication.php"><i class="flaticon-padlock"></i> Log In</a>
                            </li>

                            <li>
                                <a href="profile-authentication.php"><i class="flaticon-user"></i> Register</a>
                            </li>

                            <li class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="flaticon-worldwide"></i>
                                        <span class="lang-name"></span>
                                    </button>
                                <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1">
                                    <a class="dropdown-item" href="#">
                                            <img src="assets/images/uk.png" alt="flag">
                                            English
                                        </a>
                                    <a class="dropdown-item" href="#">
                                            <img src="assets/images/china.png" alt="flag">
                                            简体中文
                                        </a>
                                    <a class="dropdown-item" href="#">
                                            <img src="assets/images/uae.png" alt="flag">
                                            العربيّة
                                        </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                                    <img src="assets/images/logo-2.png" class="white-logo" alt="logo">
                                    <img src="assets/images/logo.png" class="black-logo" alt="logo">
                                </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                                <img src="assets/images/bgpic.png" class="white-logo" alt="logo" height="150px" width="150px">
                            </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active">
                                            Home 
                                        </a>

                                 

                                <li class="nav-item">
                                    <a href="job-details.php" class="nav-link">
                                            Job Listing 
                                        </a>

                                        </li>
                                 
                            

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                            Candidates
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="candidates-1.php" class="nav-link">Candidates</a>
                                        </li>

                                  

                                        <li class="nav-item">
                                            <a href="add-resume.php" class="nav-link">Add Resume</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="my-resume.php" class="nav-link">My Resume</a>
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

                                    
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                            Pages 
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>

                                    <ul class="dropdown-menu">                                      

                                        <li class="nav-item">
                                            <a href="about-us.php" class="nav-link">About Us</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="pricing-plan.php" class="nav-link">Pricing Plan</a>
                                        </li>

                                   

                                    </ul>
                                </li>

                    
                                <li class="nav-item">
                                    <a href="contact.php" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <a href="dashboard-post-job.php" class="default-btn">Post A Job <i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        </header>
        <!-- End Header Area -->

      