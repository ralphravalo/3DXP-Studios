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
                            <a href="#" class="logo-light"><img src="./images/logo-white.png" alt="brand"></a>
                            <a href="#" class="logo logo-dark"><img src="./images/logo-dark.png" alt="brand"> </a>
                        </div>
                        <p class="mb-5">We are a team of creative professionals – architects, interior designers, graphic artists, concept artists, storyboard artists, 3D artists,
                            animators, visual and sound effect artists, and game developers.<br>
                        <br>We have decades of combined experience in 3D asset design, 3D animation, and game development. Our team have strong knowledge and experience
                            in using AutoCAD, Maya, Sketchup, Blender, Adobe products, Unity 3D and Unreal Engine.<br><br>
                            Our business is focused on designing and building immersive 3DXPerience through Augment Reality (AR), Virtual Reality (VR), Mixed Reality,
                            Digital Twins, or 360º Content.<br><br>
                            All services and designs are offered online.</p>
                        <div class="social">
                            <a class="icon-twitter" href="https://twitter.com/3dxpStudios"><i class="ri-twitter-line"></i></a>
                            <a class="icon-facebook" href="https://discordapp.com/users/802991027648331796/"><i class="ri-discord-fill"></i></a>
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
                            <li><a href="#">Game</a></li>
                            <li><a href="#leaderboards-section">Leaderboards</a></li>
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
            <p>© 2022 <a href="#" target="_blank">3DXP Gaming Studios.</a> All Rights
                Reserved.</p>
        </div>
    </div>

    <div id="loader"></div>
</footer>
<!-- End Footer -->
