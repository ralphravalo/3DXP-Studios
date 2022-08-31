<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Experience | 3DXP Design Studio</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <?php include 'header.php';?>

<body data-spy="scroll" data-offset="170">
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

<!-- Start Contact area -->
<section class="thankyou ptb-120" id="request">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <div class="col-lg-12 text-center">
                    <img class="logo " src="images/assets/nft-dark.png" data-aos="fade-up"><br><br>
                    <h1 data-aos="fade-up" data-aos-delay="100">Thank you!</h1>
                    <h4 data-aos="fade-up" data-aos-delay="200">Your request has been sent!</h4>
                    <div class="group-btn mt-8" data-aos="fade-up" data-aos-delay="300">
                        <a href="index.php" class="btn btn-gradient"><span>Go back to home</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</section>
<!-- End Contact area -->


<?php include 'footer.php';?>



<script>
    function copyFunc() {
        var copyText = document.getElementById("adaAddress");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);

        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied!";
    }

    function copyFuncHandle() {
        var copyText = document.getElementById("adaHandle");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);

        var tooltip = document.getElementById("myHandleTooltip");
        tooltip.innerHTML = "Copied!";
    }

    function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to Clipboard";
    }

    function outFuncHandle() {
        var tooltip = document.getElementById("myHandleTooltip");
        tooltip.innerHTML = "Copy to Clipboard";
    }
</script>


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
