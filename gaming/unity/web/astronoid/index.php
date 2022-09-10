<?php
include "config.php";
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
    <?php include 'header.php';?>

<body>
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

<!-- Start banner area -->
<section class="hero-banner-style bg-1 bg-image top-section-gap ptb-120">
    <div class="hero-banner_inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-2"></div>
                <div class="col-lg-6">
                    <div id="unity-container" class="unity-desktop">
                  <canvas id="unity-canvas" width=600 height=960></canvas>
                  <div id="unity-loading-bar">
                    <div id="unity-logo"></div>
                    <div id="unity-progress-bar-empty">
                      <div id="unity-progress-bar-full"></div>
                    </div>
                  </div>
                  <div id="unity-mobile-warning">
                    
                  </div>
                  <div id="unity-footer">
                    <div id="unity-webgl-logo"></div>
                    <div id="unity-fullscreen-button"></div>
                    <div id="unity-build-title">3DXP Gaming Studios | Astronoid</div>
                  </div>
                </div>
                <script>
                  var buildUrl = "Build";
                  var loaderUrl = buildUrl + "/Pavia_Astronoid.loader.js";
                  var config = {
                    dataUrl: buildUrl + "/Pavia_Astronoid.data",
                    frameworkUrl: buildUrl + "/Pavia_Astronoid.framework.js",
                    codeUrl: buildUrl + "/Pavia_Astronoid.wasm",
                    streamingAssetsUrl: "StreamingAssets",
                    companyName: "Astronoid",
                    productName: "Pavia Game [The Game Center]",
                    productVersion: "1.0",
                  };
            
                  var container = document.querySelector("#unity-container");
                  var canvas = document.querySelector("#unity-canvas");
                  var loadingBar = document.querySelector("#unity-loading-bar");
                  var progressBarFull = document.querySelector("#unity-progress-bar-full");
                  var fullscreenButton = document.querySelector("#unity-fullscreen-button");
                  var mobileWarning = document.querySelector("#unity-mobile-warning");
            
                  // By default Unity keeps WebGL canvas render target size matched with
                  // the DOM size of the canvas element (scaled by window.devicePixelRatio)
                  // Set this to false if you want to decouple this synchronization from
                  // happening inside the engine, and you would instead like to size up
                  // the canvas DOM size and WebGL render target sizes yourself.
                  // config.matchWebGLToCanvasSize = false;
            
                  if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
                    container.className = "unity-mobile";
                    // Avoid draining fillrate performance on mobile devices,
                    // and default/override low DPI mode on mobile browsers.
                    config.devicePixelRatio = 1;
                    mobileWarning.style.display = "block";
                    setTimeout(() => {
                      mobileWarning.style.display = "none";
                    }, 5000);
                  } else {
                    canvas.style.width = "600px";
                    canvas.style.height = "960px";
                  }
                  loadingBar.style.display = "block";
            
                  var script = document.createElement("script");
                  script.src = loaderUrl;
                  script.onload = () => {
                    createUnityInstance(canvas, config, (progress) => {
                      progressBarFull.style.width = 100 * progress + "%";
                    }).then((unityInstance) => {
                      loadingBar.style.display = "none";
                      fullscreenButton.onclick = () => {
                        unityInstance.SetFullscreen(1);
                      };
                    }).catch((message) => {
                      alert(message);
                    });
                  };
                  document.body.appendChild(script);
                </script>
                    <!-- End banner-content -->
                </div>
                <!-- End .col -->
                <div class="col-lg-4">
                    <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">Astronoid</h2>
                    <p class="medium" data-aos="fade-up" data-aos-delay="100">Play Astronoid here online for free. Click Start on the screen to get started. <br><br>
                        Use Left and Right arrow keys to move (← →)<br>
                        Game created by 3DXP Gaming Studios.<br><br>
                        For feedback and suggestions, please send it to <a href="https://discordapp.com/users/802991027648331796/"><b>Franz.3DXP#8062</b></a> via Discord or <a href="https://twitter.com/3dxpStudios"><b>@3DXPStudios</b></a> via Twitter.
                    <p class="medium" data-aos="fade-up" data-aos-delay="100">Enjoy! 😊</p>
                </div>
            </div>
            <!-- End .col -->
        </div>
    </div>
    <!-- End .container -->
    </div>
</section>
<!-- End banner area -->

<!-- Start Pricing -->
<section class="section-bg-separation-2 ptb-120" id="leaderboards-section">
    <div class="container">
        <div class="row mb-5" style="margin-top: 80px;">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Leaderboards</h2>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h2>Top 10 All Time Scorers</h2><br><br>
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <h4>Player Name</h4>
                            </div>
                            <div class="price-history">
                                <h4>Score</h4>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id, pname, CAST(pscore AS UNSIGNED) AS playerscores FROM astronoidlb ORDER BY playerscores DESC LIMIT 10";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo ' <div class="single-item-history d-flex-center">
                                        
                                            <div class="content">
                                                <p>'.$row["pname"].'</p>
                                            </div>
                                        <div class="price-history"><span class="in-usd">'.$row["playerscores"].'</span></div>
                                    </div>';
                            }
                        } else {
                            echo ' <div class="single-item-history d-flex-center">
                                        
                                            <div class="content">
                                                <p>NaN</p>
                                            </div>
                                        <div class="price-history"><span class="in-usd">NaN</span></div>
                                    </div>';
                        }
                        ?>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <h2>Top 10 Daily Scorers</h2><br><br>
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <h4>Player Name</h4>
                            </div>
                            <div class="price-history">
                                <h4>Score</h4>
                            </div>
                        </div>

                        <?php
                        $sql = "SELECT id, pname, CAST(pscore AS UNSIGNED) AS playerscores FROM astronoidlb WHERE DATE(created_at)=CURDATE() ORDER BY playerscores DESC LIMIT 10";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo ' <div class="single-item-history d-flex-center">
                                            <div class="content">
                                                <p>'.$row["pname"].'</p>
                                            </div>
                                        <div class="price-history"><span class="in-usd">'.$row["playerscores"].'</span></div>
                                    </div>';
                            }
                        } else {
                             echo ' <div class="single-item-history d-flex-center">
                                        
                                            <div class="content">
                                                <p>NaN</p>
                                            </div>
                                        <div class="price-history"><span class="in-usd">NaN</span></div>
                                    </div>';
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- End .grid-filter-wrapper
    </div>
    <!-- End .container -->
</section>
<!-- End Pricing -->

<?php include 'footer.php';?>







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