<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Book a Meeting | 3DXP Studios</title>
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


<!-- Start Pricing -->
<section class="section-bg-separation-2 ptb-120" id="pricing-section">
    <div class="container">
        <div class="row mb-5" style="margin-top: 80px;">
            <div class="col-lg-10">
                <div class="section-title">
                    <h2>Package Pricing</h2>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="field-box">
                    <select class="w-100 isotop-filter">
                        <option value=".pricing--1x1" class="is-checked"><span class="filter-text">Parcel 1x1</span></option>
                        <!--<option value=".pricing--2x1"><span class="filter-text">Parcel 2x1</span></option>
                        <option value=".pricing--2x2"><span class="filter-text">Parcel 2x2</span></option>-->
                        <option value=".pricing--3x3"><span class="filter-text">Estate 3x3</span></option>
                    </select>
                </div>
                <!-- End isotop-filter -->
            </div>
        </div>

        <div class="grid-filter-wrapper-pricing mesonry-list">
            <div class="resizerpricing"></div>
            <div class="grid-item-pricing pricing--1x1">
                <div class="slider wallet-activation slick-gutter-15 mb-5">
                    <div class="card-block-style-one">
                        <h3 class="title mb-3">BASIC</h3>
                        <h2 class="title mb-3">350 ADA</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>3D Artist (Build, Model, Texture) - Up to 10 unique props</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">250 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Unity/Unreal Enginge Developer QA and Test</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">100 ADA</span></div>
                                </div>

                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p style="text-align: center;">-</p>
                                    </div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p style="text-align: center;">-</p>
                                    </div>
                                </div>


                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <h3>PRICE</h3>
                                    </div>
                                    <div class="price-history"><h4>350 ADA</h4>
                                        <span class="in-usd"><span id="basicUSD"></span> USD</span>
                                        <span class="in-usd"><span id="basicETH"></span> ETH</span>
                                        <span class="in-usd"><span id="basicPAVIA"></span> PAVIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .card-block-style-one -->

                    <div class="card-block-style-one">
                        <h3 class="title mb-3">PRO</h3>
                        <h2 class="title mb-3">500 ADA</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>3D Artist (Build, Model, Texture) - Up to 10 unique props</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">250 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Unity/Unreal Enginge Developer QA and Test</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">100 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Concept Artist (Visualization)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">50 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Architect (Exterior Design)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">100 ADA</span></div>
                                </div>


                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <h3>PRICE</h3>
                                    </div>
                                    <div class="price-history"><h4>500 ADA</h4>
                                        <span class="in-usd"><span id="proUSD"></span> USD</span>
                                        <span class="in-usd"><span id="proETH"></span> ETH</span>
                                        <span class="in-usd"><span id="proPAVIA"></span> PAVIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .card-block-style-one -->

                    <div class="card-block-style-one">
                        <h3 class="title mb-3">PREMIUM</h3>
                        <h2 class="title mb-3">650 ADA</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>3D Artist (Build, Model, Texture) - Up to 10 unique props</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">250 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Unity/Unreal Enginge Developer QA and Test</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">100 ADA</span></div>
                                </div>
                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Concept Artist (Visualization)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">50 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Architect (Exterior, Interior, Landscape)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">250 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->


                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <h3>PRICE</h3>
                                    </div>
                                    <div class="price-history"><h4>650 ADA</h4>
                                        <span class="in-usd"><span id="premiumUSD"></span> USD</span>
                                        <span class="in-usd"><span id="premiumETH"></span> ETH</span>
                                        <span class="in-usd"><span id="premiumPAVIA"></span> PAVIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .card-block-style-one -->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <h3>ADD-ONS</h3>
                            </div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>Additional unique props - 1 to 5</p>
                            </div>
                            <div class="price-history"><span class="in-usd">50 ADA</span></div>
                        </div>

                        <!-- End .single-item-history -->
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>Additional unique props - 6 to 10</p>
                            </div>
                            <div class="price-history"><span class="in-usd">100 ADA</span></div>
                        </div>
                        <!-- End .single-item-history -->
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>360 render - 1x1</p>
                            </div>
                            <div class="price-history"><span class="in-usd">100 ADA</span></div>
                        </div>

                        <!-- End .single-item-history -->
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>30 seconds video render - w/o sounds</p>
                            </div>
                            <div class="price-history"><span class="in-usd">100 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>30 seconds video render - with sounds</p>
                            </div>
                            <div class="price-history"><span class="in-usd">150 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>30 seconds animation</p>
                            </div>
                            <div class="price-history"><span class="in-usd">250 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>60 seconds animation</p>
                            </div>
                            <div class="price-history"><span class="in-usd">450 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>VR compatibility (props & testing)</p>
                            </div>
                            <div class="price-history"><span class="in-usd">150 ADA</span></div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="grid-item-pricing pricing--3x3">
                <div class=" slider wallet-activation slick-arrow-between slick-gutter-15 mb-5">
                    <div class="card-block-style-one">
                        <h3 class="title mb-3">BASIC</h3>
                        <h2 class="title mb-3">2,000 ADA</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>3D Artist (Build, Model, Texture) - Up to 10 unique props</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">1500 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Unity/Unreal Enginge Developer QA and Test</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">500 ADA</span></div>
                                </div>

                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p style="text-align: center;">-</p>
                                    </div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p style="text-align: center;">-</p>
                                    </div>
                                </div>


                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <h3>PRICE</h3>
                                    </div>
                                    <div class="price-history"><h4>2,000 ADA</h4>
                                        <span class="in-usd"><span id="basicUSD3x3"></span> USD</span>
                                        <span class="in-usd"><span id="basicETH3x3"></span> ETH</span>
                                        <span class="in-usd"><span id="basicPAVIA3x3"></span> PAVIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .card-block-style-one -->

                    <div class="card-block-style-one">
                        <h3 class="title mb-3">PRO</h3>
                        <h2 class="title mb-3">2,500 ADA</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>3D Artist (Build, Model, Texture) - Up to 10 unique props</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">1550 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Unity/Unreal Enginge Developer QA and Test</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">500 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Concept Artist (Visualization)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">150 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Architect (Exterior Design)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">300 ADA</span></div>
                                </div>


                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <h3>PRICE</h3>
                                    </div>
                                    <div class="price-history"><h4>2,500 ADA</h4>
                                        <span class="in-usd"><span id="proUSD3x3"></span> USD</span>
                                        <span class="in-usd"><span id="proETH3x3"></span> ETH</span>
                                        <span class="in-usd"><span id="proPAVIA3x3"></span> PAVIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .card-block-style-one -->

                    <div class="card-block-style-one">
                        <h3 class="title mb-3">PREMIUM</h3>
                        <h2 class="title mb-3">3,000 ADA</h2>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>3D Artist (Build, Model, Texture) - Up to 10 unique props</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">1600 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Unity/Unreal Enginge Developer QA and Test</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">500 ADA</span></div>
                                </div>
                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Concept Artist (Visualization)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">150 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <p>Architect (Exterior, Interior, Landscape)</p>
                                    </div>
                                    <div class="price-history"><span class="in-usd">750 ADA</span></div>
                                </div>

                                <!-- End .single-item-history -->


                                <!-- End .single-item-history -->
                                <div class="single-item-history d-flex-center">
                                    <div class="content">
                                        <h3>PRICE</h3>
                                    </div>
                                    <div class="price-history"><h4>3,000 ADA</h4>
                                        <span class="in-usd"><span id="premiumUSD3x3"></span> USD</span>
                                        <span class="in-usd"><span id="premiumETH3x3"></span> ETH</span>
                                        <span class="in-usd"><span id="premiumPAVIA3x3"></span> PAVIA</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .card-block-style-one -->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <h3>ADD-ONS</h3>
                            </div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>Additional unique props - 1 to 5</p>
                            </div>
                            <div class="price-history"><span class="in-usd">50 ADA</span></div>
                        </div>

                        <!-- End .single-item-history -->
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>Additional unique props - 6 to 10</p>
                            </div>
                            <div class="price-history"><span class="in-usd">100 ADA</span></div>
                        </div>
                        <!-- End .single-item-history -->
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>360 render - 3x3</p>
                            </div>
                            <div class="price-history"><span class="in-usd">300 ADA</span></div>
                        </div>

                        <!-- End .single-item-history -->
                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>30 seconds video render - w/o sounds</p>
                            </div>
                            <div class="price-history"><span class="in-usd">100 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>30 seconds video render - with sounds</p>
                            </div>
                            <div class="price-history"><span class="in-usd">150 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>30 seconds animation</p>
                            </div>
                            <div class="price-history"><span class="in-usd">250 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>60 seconds animation</p>
                            </div>
                            <div class="price-history"><span class="in-usd">450 ADA</span></div>
                        </div>

                        <div class="single-item-history d-flex-center">
                            <div class="content">
                                <p>VR compatibility (props & testing)</p>
                            </div>
                            <div class="price-history"><span class="in-usd">350 ADA</span></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End .explore-style-one -->
        </div>
        <!-- End .grid-filter-wrapper
    </div>
    <!-- End .container -->
</section>
<!-- End Pricing -->

<!-- Start Contact area -->
<section class="request ptb-120" id="request">
    <div class="container">
        <div class="row">

            <div class="section-title">
                <h2>Book a Meeting</h2>
            </div>
            <div class="col-xl-12">
                <div class="signup-wrapper signup d-flex align-items-center">
                    <form class="" method="post" action="xpmail.php" enctype="multipart/form-data">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="exp__msg" style="display: none">
                                    <p>Your message was sent successfully.</p>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="package-info mb-8">
                                        <div class="row">
                                            <h3 class="mb-4">Package Information</h3>
                                            <div class="col-md-12">
                                                <div class="field-box">
                                                    <label for="platform" class="form-label">Platform</label>
                                                    <select name="exp-platform" id="platform" class="w-100" required>
                                                        <option value="-" selected>-</option>
                                                        <option value="PC">PC</option>
                                                        <option value="Mobile">Mobile</option>
                                                        <option value="VR">VR</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!--<div class="col-md-6">
                                                <div class="field-box">
                                                    <label for="package" class="form-label">Package</label>
                                                    <select name="exp-package" id="theme" class="w-100 " required>
                                                        <option value="Parcel 1x1 - BASIC" selected>Parcel 1x1 - BASIC</option>
                                                        <option value="Parcel 1x1 - PRO">Parcel 1x1 - PRO</option>
                                                        <option value="Parcel 1x1 - PREMIUM">Parcel 1x1 - PREMIUM</option>
                                                        <option value="Parcel 3x3 - BASIC">Parcel 3x3 - BASIC</option>
                                                        <option value="Parcel 3x3 - PRO">Parcel 3x3 - PRO</option>
                                                        <option value="Parcel 3x3 - PREMIUM">Parcel 3x3 - PREMIUM</option>
                                                    </select>
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>


                                    <!--<div class="col-md-6 mb-4">
                                        <div class="field-box">
                                            <label for="purpose" class="form-label">Purpose</label>
                                            <select name="exp-purpose" id="purpose" class="w-100 " required>
                                                <option value="-" selected>-</option>
                                                <option value="Art and Design">Art and Design</option>
                                                <option value="Augment Reality">Augment Reality</option>
                                                <option value="Auto & Vehicles">Auto & Vehicles</option>
                                                <option value="Beauty">Beauty</option>
                                                <option value="Books & References">Books & References</option>
                                                <option value="Business">Business</option>
                                                <option value="Children">Children</option>
                                                <option value="Comics">Comics</option>
                                                <option value="Communication">Communication</option>
                                                <option value="Dating">Dating</option>
                                                <option value="Daydream">Daydream</option>
                                                <option value="Education">Education</option>
                                                <option value="Entertainment">Entertainment</option>
                                                <option value="Events">Events</option>
                                                <option value="Finance">Finance</option>
                                                <option value="Food & Drinks">Food & Drinks</option>
                                                <option value="Games">Games</option>
                                                <option value="Health & Fitness">Health & Fitness</option>
                                                <option value="House & Home">House & Home</option>
                                                <option value="Others">Others</option>
                                                <option value="Libraries & Demo">Libraries & Demo</option>
                                                <option value="Lifestyle">Lifestyle</option>
                                                <option value="Maps & Navigation">Maps & Navigation</option>
                                                <option value="Medical">Medical</option>
                                                <option value="Music & Audio">Music & Audio</option>
                                                <option value="News & Magazines">News & Magazines</option>
                                                <option value="Parenting">Parenting</option>
                                                <option value="Personalization">Personalization</option>
                                                <option value="Photography">Photography</option>
                                                <option value="Shopping">Shopping</option>
                                                <option value="Social">Social</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Tools">Tools</option>
                                                <option value="Travel & Local">Travel & Local</option>
                                                <option value="Video Players & Editors">Video Players & Editors</option>
                                                <option value="Weather">Weather</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                        <div class="field-box">
                                            <label for="style" class="form-label">Architectural Style</label>
                                            <select name="exp-style" id="style" class="w-100 " required>
                                                <option value="-" selected>-</option>
                                                <option value="Ancient Egyptian">Ancient Egyptian</option>
                                                <option value="Ancient Greek">Ancient Greek</option>
                                                <option value="Ancient Roman">Ancient Roman</option>
                                                <option value="Art Deco">Art Deco</option>
                                                <option value="Art Nouveau">Art Nouveau</option>
                                                <option value="Baronial">Baronial</option>
                                                <option value="Barque">Barque</option>
                                                <option value="Bauhaus">Bauhaus</option>
                                                <option value="Blobitecture">Blobitecture</option>
                                                <option value="Brutalism">Brutalism</option>
                                                <option value="Byzantine">Byzantine</option>
                                                <option value="Chicaco School">Chicaco School</option>
                                                <option value="Constructivist">Constructivist</option>
                                                <option value="Deconstructivism">Deconstructivism</option>
                                                <option value="Elizabethian">Elizabethian</option>
                                                <option value="Empire">Empire</option>
                                                <option value="Expressionist">Expressionist</option>
                                                <option value="Federal">Federal</option>
                                                <option value="Georgian">Georgian</option>
                                                <option value="Googie">Googie</option>
                                                <option value="Gothic">Gothic</option>
                                                <option value="Gothic Revival">Gothic Revival</option>
                                                <option value="IndoIslamic">IndoIslamic</option>
                                                <option value="Indosaracenic">Indosaracenic</option>
                                                <option value="International">International</option>
                                                <option value="Italianate">Italianate</option>
                                                <option value="Jacobean">Jacobean</option>
                                                <option value="Jacobethan">Jacobethan</option>
                                                <option value="Late-Modernism">Late-Modernism</option>
                                                <option value="Medieval">Medieval</option>
                                                <option value="Mid-Century ">Mid-Century </option>
                                                <option value="Modern">Modern</option>
                                                <option value="Moorish">Moorish</option>
                                                <option value="Moorish Revival">Moorish Revival</option>
                                                <option value="National Romantic">National Romantic</option>
                                                <option value="Neoclassical">Neoclassical</option>
                                                <option value="Neo-Futurism">Neo-Futurism</option>
                                                <option value="Neolithic">Neolithic</option>
                                                <option value="Norman">Norman</option>
                                                <option value="Not applicable">Not applicable</option>
                                                <option value="Others">Others</option>
                                                <option value="Palladian">Palladian</option>
                                                <option value="Parametricism">Parametricism</option>
                                                <option value="Post-Modernism">Post-Modernism</option>
                                                <option value="Prairie">Prairie</option>
                                                <option value="Regency">Regency</option>
                                                <option value="Rennaisance">Rennaisance</option>
                                                <option value="Rococo">Rococo</option>
                                                <option value="Romanesque">Romanesque</option>
                                                <option value="Tropical">Tropical</option>
                                                <option value="Tudor">Tudor</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mb-4" id="form-step-2">
                                        <div class="field-box">
                                            <label for="theme" class="form-label">Theme</label>
                                            <select name="exp-theme" id="theme" class="w-100 " required>
                                                <option value="-" selected>-</option>
                                                <option value="Action">Action</option>
                                                <option value="Adventure">Adventure</option>
                                                <option value="Animation">Animation</option>
                                                <option value="Cinema">Cinema</option>
                                                <option value="Classics">Classics</option>
                                                <option value="Comedy">Comedy</option>
                                                <option value="Crime">Crime</option>
                                                <option value="Cyberpunk">Cyberpunk</option>
                                                <option value="Documentary">Documentary</option>
                                                <option value="Drama">Drama</option>
                                                <option value="Family">Family</option>
                                                <option value="Fantasy">Fantasy</option>
                                                <option value="Horror">Horror</option>
                                                <option value="Medieval">Medieval</option>
                                                <option value="Music">Music</option>
                                                <option value="Mystery">Mystery</option>
                                                <option value="Others">Others</option>
                                                <option value="Romance">Romance</option>
                                                <option value="Sci-fi">Sci-fi</option>
                                                <option value="Sports">Sports</option>
                                                <option value="Thriller">Thriller</option>
                                            </select>
                                        </div>
                                    </div>-->
                                    <div class="personal-info mb-8">
                                        <div class="row">
                                            <h3 class="mb-4">Personal Information</h3>
                                            <div class="col-md-6 mb-4" id="form-step-3">
                                                <div class="field-box">
                                                    <label for="name" class="form-label">Nickname</label>
                                                    <input name="exp-name" id="name" type="text" placeholder="" required>
                                                </div>
                                            </div>
                                            <!-- End .col -->

                                            <div class="col-md-6 mb-4" id="form-step-3">
                                                <div class="field-box">
                                                    <label for="email" class="form-label">Email</label>
                                                    <input name="exp-email" id="email" type="text" placeholder="" required>
                                                </div>
                                            </div>
                                            <!-- End .col -->

                                            <div class="col-md-12 mb-4" id="form-step-3">
                                                <div class="field-box">
                                                    <label for="discord" class="form-label">Discord</label>
                                                    <input name="exp-discord" id="discord" type="text" placeholder="@discord" required>
                                                </div>
                                            </div>
                                            <!-- End .col -->

                                            <div class="col-md-12 mb-4" id="form-step-3">
                                                <div class="field-box">
                                                    <label for="twitter" class="form-label">Twitter</label>
                                                    <input name="exp-twitter" id="twitter" type="text" placeholder="@twitter" required>
                                                </div>
                                            </div>
                                            <!-- End .col -->

                                            <div class="col-md-12 mb-4" id="form-step-3">
                                                <div class="field-box">
                                                    <label for="telegram" class="form-label">Telegram</label>
                                                    <input name="exp-telegram" id="telegram" type="text" placeholder="@telegram" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="col-md-6 mb-4" id="form-step-1">
                                <div class="parcel-info">
                                    <div class="row">
                                        <h3 class="mb-4">Parcel Information</h3>
                                        <div class="col-md-4 mb-3" id="form-step-3">
                                            <div class="field-box">
                                                <label for="parcels" class="form-label">Parcels</label>
                                                <select name="exp-parcels" id="parcels" class="w-100">
                                                    <option value="-" selected>-</option>
                                                    <option value="1x1">1x1</option>
                                                    <option value="1x2">1x2</option>
                                                    <option value="2x2">2x2</option>
                                                    <option value="2x3">2x3</option>
                                                    <option value="3x3">3x3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- End .col -->

                                        <div class="col-md-4 mb-4" id="form-step-3">
                                            <div class="field-box">
                                                <label for="width" class="form-label">Width</label>
                                                <input name="exp-width" id="width" type="text" placeholder="16" required>
                                            </div>
                                        </div>
                                        <!-- End .col -->

                                        <div class="col-md-4 mb-4" id="form-step-3">
                                            <div class="field-box">
                                                <label for="length" class="form-label">Length</label>
                                                <input name="exp-length" id="length" type="text" placeholder="16" required>
                                            </div>
                                        </div>
                                        <!-- End .col -->

                                        <div class="col-md-6 mb-4" id="form-step-3">
                                            <div class="field-box">
                                                <label for="sampleidea1" class="form-label">Sample Idea 1</label>
                                                <input name="exp-sampleidea1" id="sampleidea1" type="text" placeholder="URL Link" required>
                                            </div>
                                        </div>
                                        <!-- End .col -->

                                        <div class="col-md-6 mb-4" id="form-step-3">
                                            <div class="field-box">
                                                <label for="sampleidea2" class="form-label">Sample Idea 2</label>
                                                <input name="exp-sampleidea2" id="sampleidea2" type="text" placeholder="URL Link" required>
                                            </div>
                                        </div>
                                        <!-- End .col -->

                                         <!-- file upload area -->
                                        <div class="upload-area" id="form-step-3">

                                            <div class="upload-formate mb-6">
                                                <h6 style="font-weight: 500;" class="title mb-1">
                                                    Upload Sample Ideas
                                                </h6>
                                                <p class="formate">
                                                    Drag or choose your files to upload
                                                </p>
                                            </div>

                                            <div class="brows-file-wrapper">
                                                <input name="exp-attachments[]" id="exp-attachments" type="file" class="inputfile"
                                                       data-multiple-caption="{count} files selected" multiple required/>
                                                <label for="file" title="No File Choosen">
                                                    <i class="ri-upload-cloud-line"></i>
                                                    <span class="text-center mb-2">Choose a File</span>
                                                    <span class="file-type text-center mt--10">PNG, JPG, JPEG, DOC, DOCX or PDF <br> Up to 5 files only.</span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- end upoad file area -->

                                        <div class="col-md-12 mb-4" id="form-step-3">
                                            <div class="field-box">
                                                <label for="description" class="form-label">Description of requirements</label>
                                                <textarea name="exp-description" id="description" rows="5" placeholder="Please detail out as much as possible" required></textarea>
                                            </div>
                                        </div>
                                        <!-- End .col -->
                                    </div>
                                    <!-- End .row -->
                                </div>
                                <div class="g-recaptcha" data-sitekey="6Lc5NbkfAAAAAP_sYDzI7sJbUOxPlbRDvRoQYEc6"></div>
                                <br>
                                <div class="mt-0" id="form-step-3">
                                    <button class="btn btn-gradient btn-medium justify-content-center" type="submit" name="exp-submit"><span>Submit Request</span></button>
                                </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
            <!-- End .col -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
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
