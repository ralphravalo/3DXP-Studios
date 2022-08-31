<?php
/**
 * Created by PhpStorm.
 * User: maven
 * Date: 5/5/2022
 * Time: 11:48 PM
 */?>
<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Projects | 3DXP Design Studio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <?php include 'header.php';?>
<body>
<!-- Start Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="icon"><img src="./images/logo-preloader.png" alt="logo" class="m-auto d-block"><span></span>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<?php include 'navmenu.php';?>

<!-- Start banner area -->
<section class="hero-banner-style bg-1 bg-image top-section-gap ">
    <div class="hero-banner_inner featured-project">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 mb-6">
                    <model-viewer id="reveal" bounds="tight" enable-pan src="shared-assets/models/Neopad_House_Website.glb" camera-controls poster="poster.webp" shadow-intensity="0.9" camera-orbit="-101.1deg 81.69deg auto" exposure="0.91" shadow-softness="1" animation-name="StructureAction" environment-image="shared-assets/environments/industrial_sunset_02_1k.hdr"> </model-viewer>
                </div>
                <!-- End col -->

                <div class="col-xxl-6 mb-6 mb-6">
                    <div class="details-content">

                        <!-- End .avatar-info-wrapper -->
                        <h2 class="main_title">Neo-Pad</h2>
                        <h4 class="mb-1">Architectural Style: <a href="#">Neo-Futurism/Brutalism</a></h4>
                        <h4 class="mb-1">Type: <a href="#">Home</a></h4>
                        <h4 class="mb-1">Theme: <a href="#">Neo-Futurism/Brutalism</a></h4>
                        <br>
                        <h4 class="mb-1">Description</h4>
                        <p class="subtitle">The combination of high-ceilings, large spaces and open planning gives a sense of grandeur to the building interior.
                            The building has an elevator as the access from ground to second, and has holographic TV and computers. It also has a couple of Mystery Vendo machines installed outside.
                        <br><br>
                            The building is highly accessible but secure at the same time, due to the nature of its singular access (via elevator).
                        <br><br>
                            One of the rooms in the building has a pair of lightsabers as a salute to one of the greatest scifi films in history.
                        <br><br>
                            The building exterior expresses a good contrast between the bleak facade of brutalist architecture and the vibrant expressionism of colors from the neon lighting.</p>

                        <div class="d-flex-between mb-5">
                            <ul class="nav custom-tabs">
                                <li>
                                    <a class=" active" data-bs-toggle="tab" href="#fvpc">Front View (VR)</a>
                                </li>
                                <!--<li>
                                    <a data-bs-toggle="tab" href="#fvvr">360° View</a>
                                </li>-->
                                <li>
                                    <a data-bs-toggle="tab" href="#snaps">Snapshots</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content custom-tab-content">
                            <div class="tab-pane fade show container active" id="fvpc">
                                <div class="popular-collection-style-one">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#front_view_snap">
                                        <div class="large-thumbnail"> <img src="images/projects/002/front-view.jpg" alt="popular collection"></div>
                                        <!-- End .large-thumbnail -->
                                    </a>
                                </div>
                                <!-- End .popular-collection-style-one -->
                            </div>

                            <!--<div class="tab-pane container fade" id="fvvr">
                                <div class="popular-collection-style-one">
                                    <iframe width="100%" height="420" allowfullscreen style="border-style:none;" src="360/neopad.html?panorama=360/neopad.html&amp;autoLoad=true"></iframe>
                                </div>
                            </div>
                            <!-- End bids history -->


                            <div class="tab-pane container fade" id="snaps">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-6 col-lg-6 mb-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_1">
                                                <div class="large-thumbnail"> <img src="images/projects/002/thumb/snap1.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-6 col-lg-6 mb-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_2">
                                                <div class="large-thumbnail"> <img src="images/projects/002/thumb/snap2.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-6 col-lg-6 mb-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_3">
                                                <div class="large-thumbnail"> <img src="images/projects/002/thumb/snap3.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-6 col-lg-6 mb-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_4">
                                                <div class="large-thumbnail"> <img src="images/projects/002/thumb/snap4.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End .col -->
                                </div>
                            </div>
                            <!-- End bid details -->
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End .col -->
        </div>
    </div>
    <!-- End .container -->
    </div>
</section>
<!-- End banner area -->

<!-- Similar Projects Section -->
<section class="section-bg-separation-2 ptb-120">
    <div class="container">
        <h2 class="mb-2">Projects</h2>
        <div class="grid-filter-wrapper">
            <div class="resizer"></div>
            <div class="grid-item">
                <div class="explore-style-one">
                    <div class="thumb">
                         <img src="images/projects/001/thumb/front.jpg" alt="daltons-thumb">
                        <!-- End .reaction-count -->
                    </div>
                    <!-- End .thumb -->
                    <div class="content">
                        <div class="header d-flex-between pt-4 pb-3">
                            <h3 class="title">Dalton's Apartment</h3>
                        </div>
                        <!-- .header -->
                        <div class="product-share-wrapper">
                            <div class="profile-share d-flex-center">
                                <p class="more-author-text" tabindex="0">The living room sports a high ceiling level which helps elevate a sense of grandiose extravagance to the space.</p>
                            </div>
                        </div>
                        <!-- End product-share-wrapper -->
                        <div class="product-owner py-4 d-flex-between">
                            <span class="bid-owner">Owner: <strong><a href="https://twitter.com/3dxpDesign" target="_blank">@3dxpDesign</a></strong></span>
                            <span class="biding-price d-flex-center">Theme: Cyberpunk</span>
                        </div>
                        <!-- End .product-owner -->
                        <div class="action-wrapper d-flex-between pt-4">

                            <a href="projects.php" class="btn btn-outline btn-small"><span><i class="ri-eye-line"></i> View Project</span></a>
                        </div>
                        <!-- action-wrapper -->
                    </div>
                    <!-- End .content -->
                </div>
            </div>

        </div>
        <!-- End .grid-filter-wrapper -->
    </div>
    <!-- End .container -->
</section>
<!-- Similar Projects Section End -->





<?php include 'footer.php';?>

<!-- Front View popup -->
<div class="modal fade popup" id="front_view_snap" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/002/front-view.jpg" alt="snap1"></div>
        </div>
    </div>
</div>

<!-- Snaps popup -->
<div class="modal fade popup" id="snaps_1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/002/snap1.jpg" alt="snap1"></div>
        </div>
    </div>
</div>

<!-- Snaps popup -->
<div class="modal fade popup" id="snaps_2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/002/snap2.jpg" alt="snap1"></div>
        </div>
    </div>
</div>

<!-- Snaps popup -->
<div class="modal fade popup" id="snaps_3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/002/snap3.jpg" alt="snap1"></div>
        </div>
    </div>
</div>
<!-- Snaps popup -->
<div class="modal fade popup" id="snaps_4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/002/snap4.jpg" alt="snap1"></div>
        </div>
    </div>
</div>


<!-- JS ============================================ -->
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/jquery.nice-select.min.js"></script>
<script src="js/vendor/modernizer.min.js"></script>
<script src="js/vendor/slick.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/vendor/waypoint.js"></script>
<script src="js/vendor/js.cookie.js"></script>
<script src="js/vendor/count-down.js"></script>
<script src="js/vendor/counter-up.js"></script>
<script src="js/vendor/isotop.js"></script>
<script src="js/vendor/imageloaded.js"></script>
<script src="js/vendor/aos.js"></script>
<script src="js/vendor/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="js/vendor/jquery.custom-file-input.js"></script>


<!-- main JS -->
<script src="js/main.js"></script>
<script src="js/ap.js"></script>
</body>

</html>

