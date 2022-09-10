<?php
?>
<script>
    const toggle = document.getElementById('toggle');
    toggle.onclick = function () {
        toggle.classList.toggle('active');
    }


</script>

<script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
<!-- Start Footer -->
<footer class="footer-wrapper">
    <div class="footer-inner pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 mb-8">
                    <div class="footer-widget first-block">
                        <div class="mb-4">
                            <a href="index.html" class="logo-light"><img src="./images/logo-white.png" alt="brand"></a>
                            <a href="index.html" class="logo logo-dark"><img src="./images/logo-dark.png" alt="brand"> </a>
                        </div>
                        <p class="mb-5">3DXP is a limited company based in London, United Kingdom.<br><br>
                            All services and designs are offered online.</p>
                        <div class="social">
                            <a class="icon-twitter" href="https://twitter.com/3dxpStudios"><i class="ri-twitter-line"></i></a>
                            <a class="icon-facebook" href="https://discord.gg/jh8NS4PJpG"><i class="ri-discord-fill"></i></a>
                            <div class="pavia-logo">
                                <img src="images/creatorlogov2.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col -->

                <div class="col-lg-2 col-md-6 mb-8">
                    <div class="footer-widget">
                        <h4>Site Links</h4>
                        <ul class="footer-list-widget">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="index.php#about-us">About Us</a></li>
                            <li><a href="design.php">Design Services</a></li>
                            <!-- <li><a href="gaming.php">Gaming Studios</a></li>
                            <li><a href="marketing.php">Marketing Studios</a></li>
                            <li><a href="#">Marketplace</a></li> -->
                            <!-- <li><a href="projects.php">Project</a></li> -->
                        </ul>
                    </div>
                </div>
                <!-- End .col -->

                <div class="col-lg-2 col-md-6 mb-8">
                    <div class="footer-widget">
                        <h4>Information</h4>
                        <ul class="footer-list-widget">
                            <!-- <li><a href="experience.php">Submit a Request</a></li> -->
                            <li><a href="book-meeting.php">Book a Meeting</a></li>
                            <li><a href="index.php#request">Send us a message</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End .col -->
            </div>
        </div>
        <!-- End .container -->
    </div>
    <div class="copyright text-center">
        <div class="container">
            <p>© 2022 <a href="#" target="_blank">3DXP Limited.</a> All Rights Reserved.</p>
        </div>
    </div>

    <div id="loader"></div>
</footer>
<!-- End Footer -->
