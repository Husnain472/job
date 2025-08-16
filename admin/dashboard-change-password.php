<?php include'inc/sidebar.php'?>

        <!-- Start Main Dashboard Content Wrapper Area -->
 

            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Change Password</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard.php">Home</a></li>
                    <li class="item"><a href="dashboard.php">Dashboard</a></li>
                    <li class="item">Change Password</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->
            
            <!-- Start Change Password Area -->
            <div class="change-password-box">
                <h3>Change Password</h3>
    
                <form>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="text" class="form-control" placeholder="123456">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
    
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">Change Password <i class="flaticon-send"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Start Change Password Area -->

            <?php include'inc/footer.php'?>