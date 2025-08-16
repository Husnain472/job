<?php include'inc/header.php'?>

        
        <!-- Start Page Banner Area -->
        <div class="main-banner-area-with-bg-image">

                    <div class="container">
                        <div class="page-banner-content">
                            <h2>Job Listing </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Job List Area -->
        <div class="job-list-area pb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="job-list-map-sticky">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.7535241766864!2d-73.90996728434231!3d40.81140973946449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f5b9998bf269%3A0xbb6dd99c5d7c00ab!2sWales%20Ave%2C%20Bronx%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1625473568079!5m2!1sen!2sbd"></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12 job-list-with-max-width pt-100">
                        <div class="job-list-search-box">
                            <h3>Find Your Dream Job</h3>

                            <form class="job-list-search-form">
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label><i class="flaticon-edit"></i></label>
                                            <input class="form-control" type="text" placeholder="Keywords">
                                        </div>
                                    </div>
        
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label><i class="flaticon-placeholder"></i></label>
                                            <select class="selectize-filter">
                                                <option value="1">Location</option>
                                                <option value="2">Canada</option>
                                                <option value="3">Japan</option>
                                                <option value="4">Germany</option>
                                                <option value="5">Switzerland</option>
                                                <option value="6">Australia</option>
                                                <option value="7">United States</option>
                                                <option value="8">New Zealand</option>
                                                <option value="9">United Kingdom</option>
                                                <option value="10">Sweden</option>
                                            </select>
                                        </div>
                                    </div>
        
                                    <div class="col-lg-4 col-md-12">
                                        <div class="form-group">
                                            <label><i class="flaticon-list"></i></label>
                                            <select class="selectize-filter">
                                                <option value="1">Category</option>
                                                <option value="2">Assurance</option>
                                                <option value="3">Banking</option>
                                                <option value="4">Copyright</option>
                                                <option value="5">Design</option>
                                                <option value="6">Finance</option>
                                                <option value="7">IT Sector</option>
                                                <option value="8">Management</option>
                                                <option value="9">Photography</option>
                                                <option value="10">Software</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="search-btn">
                                        <button type="submit"><i class="ri-search-line"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="row">
                        <?php
          include 'admin/utilities/conn.php';
           $sql = "SELECT * FROM job";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
         while ($job = $result->fetch_assoc()) {
         ?>
         <div class="col-lg-6 col-md-6 job-more-item">
           <div class="single-job-list-card">
             <div class="job-information">
               <div class="company-logo">
                  <!-- <a href="job-details-1.php">
                      <img src="assets/images/job/<?php echo $job['image']; ?>" alt="image">
                   </a> -->
                </div>
                <h3>
                   <!-- <a href="job-details-1.php"><?php echo $job['jobtitle']; ?></a> -->
                  </h3>
                 <span><?php echo $job['first_name']; ?></span>
                   <div class="bookmark-btn">
                      <i class="ri-bookmark-line"></i>
                  </div>
                 <div class="hover-bookmark-btn">
                    <i class="ri-bookmark-fill"></i>
                 </div>
              </div>
              <ul class="job-tag-list">
                <li><?php echo $job['experience']; ?></li>
                <li class="urgent"><?php echo $job['qualification']; ?></li>
                <li class="private"><?php echo $job['industry']; ?></li>
                <li><?php echo $job['offered_salary']; ?></li>
          </ul>
        <ul class="location-information">
            <li><i class="ri-time-line"></i> <?php echo $job['country']; ?></li>
            <li><i class="ri-map-pin-line"></i> <?php echo $job['city']; ?></li>
            <li><i class="ri-time-line"></i> <?php echo $job['job_type']; ?></li>
        </ul>
        <div class="job-btn">
            <a href="job-details-1.php" class="default-btn">Apply Jobs <i class="flaticon-list-1"></i></a>
        </div>
    </div>
     </div>
     <?php
        }
     } else {
        echo "No jobs available.";
        
     }
    $conn->close();
     ?>
                        </div>

                        <div class="load-more-btn">
                            <a href="#" id="loadmore" class="default-btn">Load More <i class="flaticon-loading"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Job List Area -->
        <?php include'inc/footer.php'?>
