<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Contact Us | 3DXP Studios</title>
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
<section class="ptb-120" id="request">
    <div class="container">
        <div class="row">
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-2">Send us a message</h2>
                <br>
                <p class="medium">Interested in our service or have any queries? Send us a message and we will respond as soon as we can.</p>
                <br>
                <ul class="contact-informations">
                    <li><i class="ri-mail-line"></i> info@3dxp.co</li>
                    <li><i class="ri-global-line"></i> 3dxp.co</li>
                    <li><i class="ri-twitter-line"></i> @3dxpStudios</li>
                    <li><i class="ri-discord-line"></i> discord.gg/jh8NS4PJpG</li>
                    <li><i class="ri-time-line"></i> Monday to Sunday</li>
                    <li><i class="ri-map-pin-line"></i> 27 Old Gloucester Street, London, England, UK, WC1N 3AX</li>
                </ul>
            </div>
            <div class="col-xl-7" data-aos="fade-up" data-aos-delay="100">
                <div class="signup-wrapper signup d-flex align-items-center">
                    <form class="contact__form" method="post" action="mail.php">

                        <div class="row">
                            <div class="col-12">
                                <div class="contact__msg" style=" display: none">
                                    <p>Your message was sent successfully.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="field-box">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="cont-name" id="name" type="text" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="field-box">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="cont-email" id="email" type="text" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="field-box">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select name="cont-subject" id="subject" class="w-100" disabled>
                                        <option value="Design"selected>Design Services</option>
                                        <!-- <option value="Gaming">Gaming</option>
                                        <option value="Marketing">Marketing</option> -->
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-8 mb-4">
                                <div class="field-box">
                                    <label for="topic" class="form-label">Topic</label>
                                    <input name="cont-topic" id="topic" type="text" placeholder="" required>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4">
                                <div class="field-box">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="cont-message" id="message" rows="5" placeholder="Type your message" required></textarea>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="6Lc5NbkfAAAAAP_sYDzI7sJbUOxPlbRDvRoQYEc6"></div>
                        <br>
                        <div class="mt-0">
                            <button class="btn btn-gradient btn-medium justify-content-center" type="submit" name="cont-submit"><span>Submit</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact area -->


<?php include 'footer.php';?>

<input type="text" style="display: none;" value="addr1q93evgh7wzr8ykq5p064y82l8xe7hc2n5k9zgtyl669vspu3prsl5khjdamwxum0gx3jucwwp4sk8t8tnyn7zl6t20hqrmyyxq" id="adaAddress">
<input type="text" style="display: none;" value="$3dxp.design" id="adaHandle">



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
