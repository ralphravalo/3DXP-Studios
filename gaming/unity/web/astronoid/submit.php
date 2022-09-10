<?php
include "config.php";


// Define variables and initialize with empty values
$pscore=$_GET['4466974732969947674938942756887993695565789383864495996982533378667252763988573325349627872969268763624292366547583924587669852767394948837682945888976375779957948722988223589577675682324939342666425992497825572364933498768558927352242274295359582965745899476224822687375636446688753754877844785949677669977875464376483263758486942477869397825653874947623248442894359285955533746373825738485968362472724683998977447972259555593277747238592899334469983223559793552394745782899995693984369682559576472754227328345297244475424875882335886957488555973367884744295889683763843632996435658534364982264586243783568876364468256246755926375444256478824868582333593967472769788833293332256393642475922655933893834232885756867858855877234844669984352543895764937324844285368472928342298377263594856585292323396363553982928298496532645633868498867486423673966636433482633422485928969563388564295634356399343733683385885626927553835694729675222999442725295834923883656627629292763265253937278437393254984844643555848688393354672946585462'];
$pname= "";
$pname_err = "";
// Processing form data when form is submitted

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $pname = trim($_POST["pname"]);
    // Validate username

    if (empty($pname) OR empty($pscore)) {
        # Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo '<p class="alert alert-warning">Please complete the form and try again.</p>';
        exit;
    }else{
        if(empty(trim($_POST["pname"]))){
            $pname_err = "Enter username";
        } else{
            // Prepare a select statement
            $sql = "SELECT id FROM astronoidlb WHERE pname = ?";

            if($stmt = mysqli_prepare($conn, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_pname);

                // Set parameters
                $param_pname = trim($_POST["pname"]);

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    /* store result */
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $sql = "UPDATE astronoidlb SET pscore = '$pscore' WHERE pname = '$pname' AND pscore < '$pscore'";
                        if (mysqli_query($conn, $sql)) {
                            header("Location: https://3dxp.co/gaming/unity/web/astronoid/");
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    } else{
                        $sql = "INSERT INTO astronoidlb (pname, pscore) VALUES ('$pname', '$pscore')";
                        if (mysqli_query($conn, $sql)) {
                            header("Location: https://3dxp.co/gaming/unity/web/astronoid/");
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Astronoid | 3DXP Gaming Studios</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <!-- Mobile specific metas
      ======================================== -->
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Icon fonts
      ======================================== -->
    <link rel="stylesheet" href="../fonts/remixicon.css" />

    <!-- links for favicon
      ======================================== -->
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon.png" />

    <!-- CSS
      ======================================== -->
    <link rel="stylesheet" href="../css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/vendor/slick.css">
    <link rel="stylesheet" href="../css/vendor/slick-theme.css">
    <link rel="stylesheet" href="../css/vendor/aos.css">

    <!-- Style css -->
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
<!-- Start Preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="icon"><img src="../images/logo-preloader.png" alt="logo" class="m-auto d-block"><span></span>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- start header area -->
<header class="ib-header header-default header-fixed header--sticky fluid-header">
    <div class="header-inner d-flex align-items-center justify-content-between">
        <div class="header-left d-flex align-items-center">
            <div class="logo-wrapper">
                <a href="https://3dxp.co/gaming/unity/web/astronoid/" class="logo logo-light"><img src="../images/logo-white.png" alt="brand"> </a>
                <a href="https://3dxp.co/gaming/unity/web/astronoid/" class="logo logo-dark"><img src="../images/logo-dark.png" alt="brand"> </a>
            </div>
            <!-- End .logo-wrapper -->
        </div>
        <!-- End .header-left -->

        <div class="header-right d-flex align-items-center">
            <ul class="header-right-inner">
                <div class="mainmenu-wrapper">
                    <nav id="sideNav" class="mainmenu-nav d-none d-xl-block">
                        <!-- Start Mainmanu Nav -->
                        <ul class="mainmenu">

                            <!--<li><a href="#">Marketplace</a></li>-->
                            <li><a href="https://3dxp.co/gaming/unity/web/astronoid/">Game</a></li>

                            <li><a href="https://3dxp.co/gaming/unity/web/astronoid/#leaderboards-section">Leaderboards</a></li>
                            <!--<li><a href="projects.php">Projects</a></li>-->
                            <!--<li class="has-dropdown has-menu-child-item">

                                <a href="#">Services</a>
                                <ul class="submenu">

                                    <!--<li><a href="experience.php">3DXP NFT's</a></li>
                                    <li><a href="experience.php">3DXP Rentals</a></li>
                                </ul>
                            </li>-->
                        </ul>
                        <!-- End Mainmanu Nav -->
                    </nav>
                </div>

                <!--<li class="wallet-button submit-request"> <a href="experience.php#request" class="btn btn-small btn-outline">
                        <span>Submit a Request</span></a></li>
                <!-- End .wallet-button -->

                <li class="setting-option mobile-menu-bar d-block d-xl-none">
                    <button class="hamberger-button">
                        <i class="ri-menu-2-fill"></i>
                    </button>
                </li>
                <!-- End .mobile-menu-bar -->

                <li>
                    <label class="theme-switcher-label d-flex" for="theme-switcher">
                        <input type="checkbox" class="theme-switcher" id="theme-switcher">
                    <div id="toggle" class="active">
                        <div class="indicator switch-handle">
                            <i class="ri-moon-line light-text"></i>
                            <i class="ri-sun-line dark-text"></i>
                        </div>
                        <div id="switch-titles" class="switch-text">
                            <span class="light-title light-text">DARK<br>MODE</span>
                            <span class="dark-title dark-text">LIGHT<br>MODE</span>
                        </div>
                    </div>
                    </label>
                </li>
                <!-- End Dark & Light Swither -->

                <!--<li class="wallet-button"> <a class="btn btn-small btn-disabled">
                        <span><i class="ri-wallet-3-line"></i>Beta</span></a></li>-->

            </ul>

        </div>
        <!-- End .header-left -->
    </div>
</header>
<!-- End header area -->
<!-- Start mobile menu area -->
<div class="popup-mobile-menu">
    <div class="inner">
        <div class="header-top">
            <div class="logo logo-custom-css">
                <a href="#" class="logo logo-light"><img src="./images/logo-white.png" alt="brand"> </a>
                <a href="#" class="logo logo-dark"><img src="./images/logo-dark.png" alt="brand"> </a>
            </div>
            <div class="close-menu">
                <button class="close-button">
                    <i class="ri-close-fill"></i>
                </button>
            </div>
        </div>
        <nav>
            <!-- Start Mainmanu Nav -->
            <ul class="mainmenu">
                <li><a href="https://3dxp.co/gaming/unity/web/astronoid/">Game</a></li>
                <li><a href="https://3dxp.co/gaming/unity/web/astronoid/#leaderboards-section">Leaderboards</a></li>
                <!--<li><a href="experience.php">3DXP NFT's</a></li>
                <li><a href="experience.php">3DXP Rentals</a></li>
                <!-- Services Dropdown
                <li class="has-dropdown has-menu-child-item">
                    <a href="#">Services</a>
                    <ul class="submenu">
                        <li>
                            <a href="#">3DXPerience</a>
                        </li>
                        <li>
                            <a href="#">3DXP NFT's</a>
                        </li>
                        <li>
                            <a href="#">3DXP Rentals</a>
                        </li>
                    </ul>
                </li>-->
        </ul>
        <!-- End Mainmanu Nav -->
        </nav>
    </div>
</div>
<!-- End mobile menu area -->



<section class="ptb-120 submitscore">
    <div class="container">
        <div class="row ">
            <div class="col-xl-3"></div>
            <div class="col-xl-6">
                <div class="signup-wrapper signup">
                    <h2 class="mb-2 text-center">Your score:</h2>
                    <br>
                    <h1 class="mb-2 text-center"><?php echo $pscore?></h1>
                    <p class="medium text-center">Enter your name to add your total score to Astronoid Leaderboards!</p>
                    <br>
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <div class="field-box">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="pname" id="name" type="text" placeholder="" required>
                                </div>
                            </div>
                            <!-- End .col -->
                        </div>
                        <!-- End .row -->
                    
                        <br>
                        <div class="col-lg-12 mt-0">
                            <button class="btn btn-gradient btn-medium justify-content-center" type="submit" name="cont-submit"><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End .col -->
            <div class="col-xl-3"></div>
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</section>
<!-- End Contact area -->


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
                            <a href="#" class="logo-light"><img src="../images/logo-white.png" alt="brand"></a>
                            <a href="#" class="logo logo-dark"><img src="../images/logo-dark.png" alt="brand"> </a>
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
                                <img src="../images/creatorlogov2.png">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col -->

                <div class="col-lg-2 col-md-6 mb-8">
                    <div class="footer-widget">
                        <h4>Site Links</h4>
                        <ul class="footer-list-widget">
                            <li><a href="https://3dxp.co/gaming/unity/web/astronoid/">Game</a></li>
                            <li><a href="https://3dxp.co/gaming/unity/web/astronoid/#leaderboards-section">Leaderboards</a></li>
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

<!-- JS ============================================ -->
<script src="../js/vendor/jquery.js"></script>
<script src="../js/vendor/jquery.nice-select.min.js"></script>
<script src="../js/vendor/modernizer.min.js"></script>
<script src="../js/vendor/slick.min.js"></script>
<script src="../js/vendor/bootstrap.min.js"></script>
<script src="../js/vendor/waypoint.js"></script>
<script src="../js/vendor/js.cookie.js"></script>
<script src="../js/vendor/count-down.js"></script>
<script src="../js/vendor/counter-up.js"></script>
<script src="../js/vendor/isotop.js"></script>
<script src="../js/vendor/imageloaded.js"></script>
<script src="../js/vendor/aos.js"></script>
<script src="../js/vendor/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="../js/vendor/jquery.custom-file-input.js"></script>


<!-- main JS -->
<script src="../js/main.js"></script>
<script src="../js/ap.js"></script>
</body>

</html>

