<?php include'inc/sidebar.php'?>

        <!-- Start Main Dashboard Content Wrapper Area -->

            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Post a New Job</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard.php">Home</a></li>
                    <li class="item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="item">Post a New Job</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->
            
            <!-- Start Post a New Job Area -->
            <div class="post-a-new-job-box">
                <h3>Post Your Job</h3>
    
                <form action="utilities/insert_job.php" method="POST">

                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" placeholder="Job Title Here" name="job_title">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Description</label>
                                <textarea cols="30" rows="6" placeholder="Short description..." class="form-control" name="job_description"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="first_name">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" name="email_address">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Type</label>

                                <select class="selectize-filter" name="job_type">
                                    <option value="Select">Select</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="SEO">SEO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Specialisms</label>

                                <select class="selectize-filter" name="specialisms">
                                    <option value="Select">Select</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="SEO">SEO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Offered Salary</label>
                                
                                <select class="selectize-filter" name="offered_salary">
                                    <option value="Select">Select</option>
                                    <option value="$1500">$1500</option>
                                    <option value="$2500">$2500</option>
                                    <option value="$5000">$5000</option>
                                    <option value="$3500">$3500</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Career Level</label>
                                
                                <select class="selectize-filter" name="career_level">
                                <option value="Select">Select</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="SEO">SEO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Experience</label>
                                
                                <select class="selectize-filter" name="experience">
                                <option value="Select">Select</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="SEO">SEO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Gender</label>

                                <select class="selectize-filter" name="gender">
                                    <option value="Select">Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Industry</label>
                                
                                <select class="selectize-filter" name="industry">
                                <option value="Select">Select</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="SEO">SEO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Qualification</label>
                                
                                <select class="selectize-filter" name="qualification">
                                <option value="Select">Select</option>
                                    <option value="Banking">Banking</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="SEO">SEO</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Application Deadline Date</label >
                                <input type="date" class="form-control" placeholder="Application Deadline Date" name="application_deadline_date">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Country</label>
                                
                                <select class="selectize-filter" name="country">
                                    <option value="Select">Select</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Germany">Germany</option>
                                    <option value="United States">United States</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>City</label>
                                
                                <select class="selectize-filter" name="city">
                                <option value="Select">Select</option>
                                    <option value="Canada">FSD</option>
                                    <option value="Pakistan">ISL</option>
                                    <option value="Germany">LHR</option>
                                    <option value="United States">MUL</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Post A Job <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Post a New Job Area -->

            <?php include'inc/footer.php'?>