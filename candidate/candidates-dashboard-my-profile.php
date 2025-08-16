<?php include'inc/header.php'?>


            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>My Profile</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="candidates-dashboard.html">Home</a></li>
                    <li class="item"><a href="candidates-dashboard.html">Dashboard</a></li>
                    <li class="item">My Profile</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->
            
            <!-- Start My Profile Area -->
            <div class="my-profile-box">
                <h3>Profile Details</h3>
    
                <form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group profile-box">
                                <img src="assets/images/my-profile.jpg" alt="image">
                                <div class="file-upload">
                                    <input type="file" name="file" id="file" class="inputfile" />
                                    <label for="file"><i class="ri-upload-2-line"></i> Upload Photo</label>
                                </div>

                                <div class="text">
                                    <p>Max file size is 1MB, Minimum dimension: 450x450 And Suitable files are .jpg & .png</p>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Andy Smith">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Job Title</label>
                                <input type="text" class="form-control" placeholder="UI Designer">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="hello@andysmith.com">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" placeholder="+88 (123) 123456">
                            </div>
                        </div>
                        
                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Website</label>
                                <input type="text" class="form-control" placeholder="EnvyTheme.com">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Current Salary($)</label>
                                
                                <select class="selectize-filter">
                                    <option value="1">10-20 K</option>
                                    <option value="2">20-40 K</option>
                                    <option value="3">40-60 K</option>
                                    <option value="4">60-80 K</option>
                                    <option value="5">80-100 K</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Expected Salary($)</label>
                                
                                <select class="selectize-filter">
                                    <option value="1">50 - 100 K</option>
                                    <option value="2">100 - 150 K</option>
                                    <option value="3">200 - 250 K</option>
                                    <option value="4">300 - 350 K</option>
                                    <option value="5">500 - 1000 K</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Experience</label>
                                <input type="text" class="form-control" placeholder="4-8 Years">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Age</label>
                                
                                <select class="selectize-filter">
                                    <option value="1">20 - 25 Years</option>
                                    <option value="2">20 - 25 Years</option>
                                    <option value="3">20 - 25 Years</option>
                                    <option value="4">20 - 25 Years</option>
                                    <option value="5">20 - 25 Years</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Education Levels</label>
                                <input type="text" class="form-control" placeholder="Master Degree">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Languages</label>
                                <input type="text" class="form-control" placeholder="English, Turkish">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Categories</label>
                                
                                <select class="selectize-filter">
                                    <option value="1">Categories</option>
                                    <option value="2">Banking</option>
                                    <option value="3">Human Resources</option>
                                    <option value="4">Management</option>
                                    <option value="5">Retail</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Allow In Search & Listing</label>
                                
                                <select class="selectize-filter">
                                    <option value="1">Yes</option>
                                    <option value="2">No</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea cols="30" rows="6" placeholder="Short description about you..." class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Country</label>

                                <select class="selectize-filter">
                                    <option value="1">Australia</option>
                                    <option value="2">Chaina</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">Germany</option>
                                    <option value="5">United Arab Emirates</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>City</label>

                                <select class="selectize-filter">
                                    <option value="1">Melbourne</option>
                                    <option value="2">Chaina</option>
                                    <option value="3">United Kingdom</option>
                                    <option value="4">Germany</option>
                                    <option value="5">United Arab Emirates</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Complete Address</label>
                                <input type="text" class="form-control" placeholder="Complete Address">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Find On Map</label>
                                <input type="text" class="form-control" placeholder="Find on map">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" placeholder="Melbourne">
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" placeholder="Melbourne">
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Facebook URL</label>
                                <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Twitter URL</label>
                                <input type="text" class="form-control" placeholder="https://twitter.com/">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Linkedin URL</label>
                                <input type="text" class="form-control" placeholder="https://www.linkedin.com/">
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Instagram URL</label>
                                <input type="text" class="form-control" placeholder="https://instagram.com/">
                            </div>
                        </div>
    
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Save Change <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End My Profile Area -->

            <?php include'inc/footer.php'?>
