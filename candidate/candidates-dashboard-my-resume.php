<?php include'inc/header.php'?>


            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>My Resume</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="candidates-dashboard.html">Home</a></li>
                    <li class="item"><a href="candidates-dashboard.html">Dashboard</a></li>
                    <li class="item">My Resume</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->
            
            <!-- Start Submit Resumes Area -->
            <div class="submit-resumes-box">
            <form method="POST" action="utilities/resume_form.php">
                    <div class="row">
                        <h3>Basic Information</h3>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Your Email">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob" placeholder="Date of Birth">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Gender</label>

                                <select class="form-control" name="gender">
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4" placeholder="About you..."></textarea>
                                </div>
                        </div>

                        <h3>Education</h3>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Degree</label>
                                <input type="text" class="form-control" name="degree" placeholder="Degree">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Institute</label>
                                <input type="text" class="form-control" name="institute" placeholder="Institute">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="year" class="form-control" name="year" placeholder="Year">
                                </div>
                        </div>

                        <h3>Skill</h3>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Skill Title</label>
                                <input type="text" class="form-control" name="skilltitle" placeholder="Skill Title">
                                </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" class="form-control" name="experience" placeholder="Experience">
                                </div>
                        </div>

                        <h3>Social Links</h3>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Facebook URL</label>
                                <input type="text" class="form-control" name="facebookurl" placeholder="https://www.facebook.com/">
                                    </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Twitter URL</label>
                                <input type="text" class="form-control" name="twitterurl" placeholder="https://twitter.com/">
                                    </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Linkedin URL</label>
                                <input type="text" class="form-control" name="linkedinurl" placeholder="https://www.linkedin.com/">
                                    </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Instagram URL</label>
                                <input type="text" class="form-control" name="instagramurl" placeholder="https://instagram.com/">
                                    </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Submit Resumes <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Start Submit Resumes Area -->

            <?php include'inc/footer.php'?>

