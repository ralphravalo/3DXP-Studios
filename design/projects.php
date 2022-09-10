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
                    <model-viewer id="reveal" bounds="tight" enable-pan src="shared-assets/models/daltons.glb" camera-controls environment-image="shared-assets/environments/industrial_sunset_02_1k.hdr" poster="poster.webp" shadow-intensity="1"></model-viewer>
                </div>
                <!-- End col -->

                <div class="col-xxl-6 mb-6 mb-6">
                    <div class="details-content">

                        <!-- End .avatar-info-wrapper -->
                        <h2 class="main_title">Dalton's Apartment</h2>
                        <h4 class="mb-1">Architectural Style: <a href="#">Constructivism/Brutalism</a></h4>
                        <h4 class="mb-1">Type: <a href="#">Home</a></h4>
                        <h4 class="mb-1">Theme: <a href="#">Cyberpunk</a></h4>
                        <br>
                        <h4 class="mb-1">Description</h4>
                        <p class="subtitle">The living room sports a high ceiling level which helps elevate a sense of grandiose extravagance to the space.<br><br>
                            Accessways deviate from the norm, offering a unique experience to the users.<br><br>
                            Rooms are isolated to highlight the varying functions unique to each area.<br><br>
                            Bright neon lights provide a good contrast to the greys of the building exterior.<br><br>
                            Different building heights maximize the vertical space allowance of the lot.
                        </p>

                        <div class="d-flex-between mb-5">
                            <ul class="nav custom-tabs">
                                <li>
                                    <a class=" active" data-bs-toggle="tab" href="#fvpc">Front View (PC)</a>
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
                                        <div class="large-thumbnail"> <img src="images/projects/001/front-view.jpg" alt="popular collection"></div>
                                        <!-- End .large-thumbnail -->
                                    </a>
                                </div>
                                <!-- End .popular-collection-style-one -->
                            </div>

                            <!--<div class="tab-pane container fade" id="fvvr">
                                <div class="popular-collection-style-one">
                                    <iframe width="100%" height="420" allowfullscreen style="border-style:none;" src="360/daltons.html?panorama=360/daltons.html"></iframe>
                                </div>
                            </div>
                            <!-- End bids history -->

                            <div class="tab-pane container fade" id="snaps">
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_1">
                                                <div class="large-thumbnail"> <img src="images/projects/001/thumb/snap1.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_2">
                                                <div class="large-thumbnail"> <img src="images/projects/001/thumb/snap2.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_3">
                                                <div class="large-thumbnail"> <img src="images/projects/001/thumb/snap3.jpg" alt="popular collection"></div>
                                                <!-- End .large-thumbnail -->
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-6 col-lg-6">
                                        <div class="popular-collection-style-one">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#snaps_4">
                                                <div class="large-thumbnail"> <img src="images/projects/001/thumb/snap4.jpg" alt="popular collection"></div>
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
        <div class="d-flex-between flex-wrap">
            <div class="section-title">
                <h2>Projects</h2>
            </div>
        </div>
        <div class="grid-filter-wrapper">
            <div class="resizer"></div>
            <div class="grid-item cat--4">
                <div class="explore-style-one">
                    <div class="thumb">
                        <img src="images/projects/002/thumb/front.jpg" alt="neopad-thumb">
                        <!-- End .reaction-count -->
                    </div>
                    <!-- End .thumb -->
                    <div class="content">
                        <div class="header d-flex-between pt-4 pb-3">
                            <h3 class="title">Neo-Pad</h3>
                        </div>
                        <!-- .header -->
                        <div class="product-share-wrapper">
                            <div class="profile-share d-flex-center">
                                <p class="more-author-text" tabindex="0">The combination of high-ceilings, large spaces and open planning gives a sense of grandeur to the building interior.</p>
                            </div>
                        </div>
                        <!-- End product-share-wrapper -->
                        <div class="product-owner py-4 d-flex-between">
                            <span class="bid-owner">Owner: <strong><a href="https://twitter.com/3dxpDesign" target="_blank">@3dxpDesign</a></strong></span>
                            <span class="biding-price d-flex-center">Theme: Cyberpunk</span>
                        </div>
                        <!-- End .product-owner -->
                        <div class="action-wrapper d-flex-between pt-4">

                            <a href="neo-pad.php" class="btn btn-outline btn-small"><span><i
                                            class="ri-eye-line"></i> View Project</span></a>
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
            <div class="image-popup"> <img src="images/projects/001/front-view.jpg" alt="snap1"></div>
        </div>
    </div>
</div>

<!-- Front View popup -->
<div class="modal fade popup" id="360_view" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>

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
            <div class="image-popup"> <img src="images/projects/001/snap1.jpg" alt="snap1"></div>
        </div>
    </div>
</div>

<div class="modal fade popup" id="snaps_2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/001/snap2.jpg" alt="snap2"></div>
        </div>
    </div>
</div>

<div class="modal fade popup" id="snaps_3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/001/snap3.jpg" alt="snap3"></div>
        </div>
    </div>
</div>

<div class="modal fade popup" id="snaps_4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-images" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="image-popup"> <img src="images/projects/001/snap4.jpg" alt="snap4"></div>
        </div>
    </div>
</div>
<!-- End Snaps popup -->

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
