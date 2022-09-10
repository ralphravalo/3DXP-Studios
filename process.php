<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Our Process | 3DXP</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <?php include 'header.php';?>

<body data-spy="scroll" data-offset="170" >
<!-- Start Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="icon"><img src="./images/logo-preloader.png" alt="logo" class="m-auto d-block"> <span></span>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<?php include 'navmenu.php';?>

<!-- Start Our Process area -->
<section class="section-bg-separation-2 ptb-120" id="process">
    <br><br><br>
    <div class="container">
        <div class="row ">
            <div class="col-xl-4 ">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">Our Process</h2>
                <p class="medium" data-aos="fade-up" data-aos-delay="100">Whatever the type of business you dream to build in the metaverse, we are able to
                    provide end-to full property design and development services for your virtual real estate properties including:</p>
                <ul class="check-lists" data-aos="fade-up" data-aos-delay="100">
                    <li>Visualizing your concepts</li>
                    <li>Architecting your design</li>
                    <li>Developing your build</li>
                    <li>Reviewing the design</li>
                    <li>Testing the final product in the game engine</li>
                </ul>
                <p class="medium" data-aos="fade-up" data-aos-delay="100">Click each icon to the right to learn more!<br><br>
                    We also create NFT designs, develop props, sculpt characters, produce wearables and build games</p>
                <div class="group-btn mt-8" data-aos="fade-up" data-aos-delay="100">
                    <a href="contact.php" class="btn btn-gradient"><span>Contact Us</span></a>
                </div>

            </div>
            <div class="col-xl-8">
                <div class="approach-process" data-aos="fade-up">
                    <img class="logo logo-light" src="images/ourprocess/approach-dark.png" usemap="#image-map">
                    <img class="logo logo-dark" src="images/ourprocess/approach-light.png" usemap="#image-map">

                    <map name="image-map">
                        <area class="concept-coord" alt="concept-map" title="concept-map" href="#" data-bs-toggle="modal" data-bs-target="#concept-popup" coords="339,337,2,466" shape="rect">
                        <area alt="design-map" title="design-map" href="#n" data-bs-toggle="modal" data-bs-target="#design-popup" coords="337,204,57,65" shape="rect">
                        <area alt="build-map" title="build-map" href="#" data-bs-toggle="modal" data-bs-target="#build-popup" coords="424,5,745,135" shape="rect">
                        <area alt="test-map" title="test-map" href="#" data-bs-toggle="modal" data-bs-target="#test-popup" coords="598,152,893,298" shape="rect">
                        <area alt="deploy-map" title="deploy-map" href="#" data-bs-toggle="modal" data-bs-target="#deploy-popup" coords="630,387,910,569" shape="rect">
                    </map>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Our Process area -->

<?php include 'footer.php';?>



<!-- Concept popup -->
<div class="modal fade popup" id="concept-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-process" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="modal-body pa-8">
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="mb-2">Concept</h2>
                        <p class="medium">Conceptualization is initiated (head by a lead Concept Artist) and ideas are pooled together from the results of the information-gathering.<br><br>
                            The concept artist envisions designs taken from the client’s perspective, conjuring visual representation of the structure and represents them through images and art that invoke a similar feel, thus shaping a comprehensive perception of what the project could and would look like.<br><br>
                            Other necessary details, such as the selection of a color palette, the general shape of a structure, and other aesthetic-driven factors are also collected at this stage.</p>
                    </div>
                    <div class="col-xl-6">
                        <div class="image-popup"> <img src="images/ourprocess/concept-graphics.png" alt="concept-graphics"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Design popup -->
<div class="modal fade popup" id="design-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-process" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="modal-body pa-8">
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="mb-2">Design</h2>
                        <p class="medium">During the design phase, the architect drafts a floorplan using the chosen concept as a guide<br><br>
                            It is in this phase that the experimentation of the structure’s mass and overall shape occurs.<br><br>
                            The architect starts with a sketch of the building’s exterior, then works their way through until the interior and landscaping. Careful attention.
                            is given even to the tiniest details to ensure that the product doesn’t deviate from the concept.</p>

                    </div>
                    <div class="col-xl-6">
                        <div class="image-popup"> <img src="images/ourprocess/design-graphics.png" alt="design-graphics"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Build popup -->
<div class="modal fade popup" id="build-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-process" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="modal-body pa-8">
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="mb-2">Build</h2>
                        <p class="medium">Throughout the build phase, 3D artists gather the data -such as measurements and other specifications- from the architect and start turning the project into reality.<br><br>
                            It is during this phase that details such as lighting, asset modelling, texturing are accomplished.<br><br>
                            The addition of furniture and fixtures helps develop a cohesive atmosphere within the structure.</p>
                    </div>
                    <div class="col-xl-6">
                        <div class="image-popup"> <img src="images/ourprocess/build-graphics.png" alt="build-graphics"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Test popup -->
<div class="modal fade popup" id="test-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-process" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="modal-body pa-8">
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="mb-2">Test</h2>
                        <p class="medium">After asset modelling and texturing, it is passed on to a Quality Assurance specialist who in turn makes sure that the product is free of errors and of the highest standard.<br><br>
                            This is done by crosschecking the product with a set of stringent guidelines to ensure consistency and quality.<br>
                    </div>
                    <div class="col-xl-6">
                        <div class="image-popup"> <img src="images/ourprocess/test-graphics.png" alt="test-graphics"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Deploy popup -->
<div class="modal fade popup" id="deploy-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-process" role="document">
        <div class="modal-content bid-success-content">
            <button type="button" class="btn-custom-closer" data-bs-dismiss="modal" aria-label="Close">
                <i class="ri-close-fill"></i>
            </button>
            <div class="modal-body pa-8">
                <div class="row">
                    <div class="col-xl-6">
                        <h2 class="mb-2">Deploy</h2>
                        <p class="medium">The final phase is deployment, where the files are given to the client in a format that is most convenient for them.<br><br>
                            The product can also be directly loaded into the client’s chosen programs, should they wish to do so.</p>
                            <br>
                            Summary:
                        <ul class="random-list">
                            <li>Give files to client</li>
                            <li>Screenshot of actual files (filename.extension)</li>
                            <li>Delivered through convenient method (files can be formatted to suit software/program</li>
                        </ul>
                    </div>
                    <div class="col-xl-6">
                        <div class="image-popup"> <img src="images/ourprocess/deploy-graphics.png" alt="deploy-graphics"></div>
                    </div>
                </div>
            </div>
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
</body>

</html>
