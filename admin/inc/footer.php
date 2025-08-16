  <!-- Start Copyright Area -->
  
  
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
  <div class="copyrights-area">
            <div class="row align-items-center">
                <!-- <div class="col-lg-6 col-sm-6 col-md-6">
                    <p><i class="ri-copyright-line"></i> <a href="#">Eeza</a>. All rights reserved</p>
                </div> -->

                <div class="col-lg-6 col-sm-6 col-md-6 text-end">
                    <p>Designed by  <a href="https://envytheme.com/" target="_blank">SolTekkers</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->

    </div>
    <!-- End Main Dashboard Content Wrapper Area -->

    <!-- Links of JS files -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.meanmenu.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/fancybox.min.js"></script>
    <script src="assets/js/selectize.min.js"></script>
    <script src="assets/js/TweenMax.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/metismenu.min.js"></script>
    <script src="assets/js/simplebar.min.js"></script>
    <script src="assets/js/dropzone.min.js"></script>
    <script src="assets/js/sticky-sidebar.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>