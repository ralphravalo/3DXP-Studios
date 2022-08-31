<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic metas
      ======================================== -->
    <meta charset="utf-8" />
    <title>Home | 3DXP</title>
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

<!-- Start banner area -->
<section class="hero-banner-style bg-1 bg-image top-section-gap ">
    <div class="hero-banner_inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-xl-5 col-lg-5">
                    <div class="banner-content">
                        <h1 class="mb-6 title" data-aos="fade-up">Shaping ideas for a
                            <span>better</span><b class="color_primary"> 3DXPerience!</b>
                        </h1>
                        <!--<p data-aos="fade-up" data-aos-delay="100">3DXP Design Studio build 3D virtual space<br>
                            and interactive experience. </p>-->
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-lg-7">
                    <!--<script src="https://threejs.org/build/three.min.js"></script>
                    <script src='https://threejs.org/examples/js/postprocessing/EffectComposer.js'></script>
                    <script src='https://threejs.org/examples/js/postprocessing/RenderPass.js'></script>
                    <script src='https://threejs.org/examples/js/postprocessing/ShaderPass.js'></script>
                    <script src='https://threejs.org/examples/js/shaders/CopyShader.js'></script>
                    <script src="https://threejs.org/examples/js/shaders/FXAAShader.js"></script>
                    <script src="https://threejs.org/examples/js/shaders/LuminosityHighPassShader.js"></script>
                    <script src="https://threejs.org/examples/js/postprocessing/UnrealBloomPass.js"></script>
                    <script type="module">
                        import {OrbitControls} from "./js/OrbitControls.js";
                        import {GLTFLoader} from "./js/GLTFLoader.js";


                        var camera, scene, renderer, controls, spotLight, hemiLight , model, purpleneon, effectFXAA, composer;

                        scene = new THREE.Scene();
                        camera = new THREE.PerspectiveCamera(75,window.innerWidth / window.innerHeight, 0.01,1000);
                        camera.position.set(0,0,20);
                        camera.layers.enable(1);

                        renderer  = new THREE.WebGLRenderer({antialias: true});
                        renderer.toneMapping = THREE.ReinhardToneMapping;
                        renderer.toneMappingExposure = 2.3;
                        renderer.shadowMap.enabled = true;
                        renderer.setSize(window.innerWidth, window.innerHeight);
                        document.body.appendChild(renderer.domElement);

                        controls = new OrbitControls(camera, renderer.domElement);

                        var light = new THREE.DirectionalLight(0x0a1524, 0.75);
                        light.position.setScalar(100);
                        scene.add(light);


                        var loader = new GLTFLoader();
                        loader.load("./shared-assets/models/neo-pad.glb",function (gltf) {
                            model = gltf.scene;
                            model.traverse(n => {
                                if (n.isMesh){
                                    n.castShadow = true;
                                    n.receiveShadow = true;
                                    if (n.material.map) n.material.map.anisotropy = 16;
                                }
                            });
                            scene.add(gltf.scene);
                        });

                        loader.load("./shared-assets/models/neo-pad-layers/purple-emission.glb",function (gltf) {
                            const detail1 = gltf.scene;
                            detail1.traverse( function( child ) {
                                child.layers.enable(1);
                            });
                            detail1.traverse(n => {
                                if (n.isMesh){
                                    n.castShadow = true;
                                    n.receiveShadow = true;
                                    if (n.material.map) n.material.map.anisotropy = 16;
                                }
                            });
                            scene.add(detail1);
                        });

                        loader.load("./shared-assets/models/neo-pad-layers/white-emission.glb",function (gltf) {
                            const detail2 = gltf.scene;
                            detail2.traverse( function( child ) {
                                child.layers.enable(1);
                            });
                            detail2.traverse(n => {
                                if (n.isMesh){
                                    n.castShadow = true;
                                    n.receiveShadow = true;
                                    if (n.material.map) n.material.map.anisotropy = 16;
                                }
                            });
                            scene.add(detail2);
                        });

                        loader.load("./shared-assets/models/neo-pad-layers/blue-emission.glb",function (gltf) {
                            const detail3 = gltf.scene;
                            detail3.traverse( function( child ) {
                                child.layers.enable(1);
                            });
                            detail3.traverse(n => {
                                if (n.isMesh){
                                    n.castShadow = true;
                                    n.receiveShadow = true;
                                    if (n.material.map) n.material.map.anisotropy = 16;
                                }
                            });
                            scene.add(detail3);
                        });


                        /** COMPOSER **/
                        const renderScene = new THREE.RenderPass( scene, camera );

                        effectFXAA = new THREE.ShaderPass( THREE.FXAAShader );
                        effectFXAA.uniforms.resolution.value.set( 1 / window.innerWidth, 1 / window.innerHeight );

                        const bloomPass = new THREE.UnrealBloomPass( new THREE.Vector2( window.innerWidth, window.innerHeight ), 1.5, 0.4, 0.85 );
                        bloomPass.threshold = 0;
                        bloomPass.strength = 1.8;
                        bloomPass.radius = 0.15;
                        bloomPass.renderToScreen = true;

                        composer = new THREE.EffectComposer( renderer );
                        composer.setSize( window.innerWidth, window.innerHeight );


                        hemiLight = new THREE.HemisphereLight(0x0a1524, 0x0a1524, 10);
                        scene.add(hemiLight);
                        camera.position.set(0,0,20);

                        spotLight = new THREE.SpotLight(0x0a1524,10);
                        spotLight.castShadow = true;
                        spotLight.shadow.bias = -0.0001;
                        spotLight.shadow.mapSize.width = 1024*8;
                        spotLight.shadow.mapSize.height = 1024*8;
                        scene.add(spotLight);

                        composer.addPass( renderScene );
                        composer.addPass( effectFXAA );
                        composer.addPass( bloomPass );

                        function animate() {
                            requestAnimationFrame(animate);
                            spotLight.position.set(
                                camera.position.x + 5,
                                camera.position.y + 5,
                                camera.position.z + 5
                            );
                            renderer.autoClear = false;
                            renderer.clear();

                            renderer.clearDepth();
                            camera.layers.set(0);
                            camera.layers.set(1);
                            composer.render();

                            renderer.render(scene, camera);



                        }
                        animate();
                    </script>-->

                    <model-viewer id="reveal" bounds="tight" enable-pan src="shared-assets/models/Neopad_House_Website.glb" camera-controls poster="poster.webp" shadow-intensity="0.9" camera-orbit="-101.1deg 81.69deg auto" exposure="0.91" shadow-softness="1" animation-name="StructureAction" environment-image="shared-assets/environments/industrial_sunset_02_1k.hdr"> </model-viewer>


                      <!--<model-viewer id="reveal" bounds="tight" enable-pan src="shared-assets/models/daltons.glb" camera-controls environment-image="shared-assets/environments/industrial_sunset_02_1k.hdr" poster="poster.webp" shadow-intensity="1"></model-viewer>
                    <!--<div class="col-xxl-8 col-xl-7 col-lg-7">
                        <!--<div style="padding-bottom: 56.25%; max-width: 100%; position: relative;" data-aos="fade-up" data-aos-delay="100"><iframe src="https://player.vimeo.com/video/472706535?autoplay=1&autopause=0&loop=1&title=0&portrait=0&byline=0&keyboard=0&speed=0&color=002e3d&quality=1080p#t=0s" width="800px" height="450px" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" frameborder="0"></iframe></div>
                        <!--Vimeo Embed Code Generated by https://www.onetools.me/-->
                    <!-- End .explore-content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner area -->

<!-- About Us Section -->
<section class="ptb-120" id="about-us">
    <div class="container">
        <div class="row ">
            <div class="col-xl-6">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">About Us</h2>
                <p class="medium" data-aos="fade-up" data-aos-delay="100">
                    We are a team of creative professionals – architects, interior designers, graphic artists, concept artists, storyboard artists, 3D artists, animators, visual and sound effect artists, and game developers. <br>
                    <br>
                    We have decades of combined experience in 3D asset design, modelling, texturing animation, and game development. 
                </p>
            </div>
            <div class="col-xl-6">
                <div class="section-media" data-aos="fade-up">
                    <img class="logo logo-light" src="images/assets/3dxp-logo-light.png">
                    <img class="logo logo-dark" src="images/assets/3dxp-logo-dark.png">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Tools Section -->
<section class="section-bg-separation-2 ptb-120" id="tools">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">Tools</h2>
                <p class="medium" data-aos="fade-up" data-aos-delay="100">3DXP have strong knowledge and experience in using the following tools:</p>
                <div class="row ">
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/blender-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Blender</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img class="logo logo-light" src="images/tools/unity-logo-light.png">
                            <img class="logo logo-dark" src="images/tools/unity-logo-dark.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Unity 3D</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img class="logo logo-light" src="images/tools/unreal-engine-logo-light.png">
                            <img class="logo logo-dark" src="images/tools/unreal-engine-logo-dark.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Unreal Engine</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/photoshop-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Adobe Photoshop</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/after-effects-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Adobe After Effects</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/premiere-logo.svg">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Adobe Premiere</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/illustrator-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Adobe Illustrator</h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/indesign-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Adobe inDesign</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/creative-cloud-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Adobe Creative Suite</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/csharp-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">C#</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/autodesk-maya-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Autodesk Maya</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/sketchup-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">SketchUp</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/autocad-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">AutoCAD</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/lumion-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Lumion</h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/substance-3d-painter-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Substance 3D Painter</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/substance-3d-designer-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Substance 3D Designer</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/marvelous-designer-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Marvelous Designer</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/megascans-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Megascans</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img class="logo logo-light" src="images/tools/quixel-mixer-logo-light.png">
                            <img class="logo logo-dark" src="images/tools/quixel-mixer-logo-dark.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Quixel Mixer</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img src="images/tools/filmora-logo.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Filmora</h4>
                    </div>
                    <div class="col section-list-col">
                        <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                            <img class="logo logo-light" src="images/tools/zbrush-logo-light.png">
                            <img class="logo logo-dark" src="images/tools/zbrush-logo-dark.png">
                        </div>
                        <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">ZBrush</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tools Section End -->

<!-- Metaverse Section -->
<section class="ptb-120" id="metaverse">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">Metaverse we are building:</h2>
                <div class="row">
                    <div class="col section-list-col">
                        <a href="https://www.pavia.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/pavia-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Pavia</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://www.cornucopias.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/cornucopias-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Cornucopias</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://www.claynation.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/claynation-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">CLAY NATION</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://cardano.virtua.com/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/virtua-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Virtua</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://bossplanet.games/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/bossplanet-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Boss Planet</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://decentraland.org/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/decentraland-mana-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Decentraland</h4>
                        </a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col section-list-col">
                        <a href="https://register.sandbox.game/meta3?msclkid=f06690f51d8b15b561d3f3fc5637bf05&utm_source=bing&utm_medium=cpc&utm_campaign=%5BARSB%5D-%20Brand-%20EN-%20World&utm_term=sandbox&utm_content=Search-%20Brand%20-%20WW" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/the-sandbox-sand-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">The Sandbox</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://spatial.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img class="logo logo-light" src="images/metaverse/spatial-logo-light.png">
                                <img class="logo logo-dark" src="images/metaverse/spatial-logo-dark.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Spatial</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://www.somniumspace.com/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img class="logo logo-light" src="images/metaverse/somnium-space-logo-light.png">
                                <img class="logo logo-dark" src="images/metaverse/somnium-space-logo-dark.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Somnium Space</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://www.voxels.com/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/metaverse/voxels-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Voxels</h4>
                        </a>
                    </div>
                    <div class="col section-list-col">
                        <a href="https://www.mona.gallery/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img class="logo logo-light" src="images/metaverse/monaverse-logo-light.png">
                                <img class="logo logo-dark" src="images/metaverse/monaverse-logo-dark.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">MONA</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Metaverse Section End -->

<!-- Partners Section -->
<section class="section-bg-separation-2 ptb-120" id="partners">
    <div class="container">
        <div class="row ">
            <div class="col-xl-12">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">Partners and Collaborations:</h2>
                <div class="row">
                    <div class="col section-list-col partners-section">
                        <a href="https://thecardanotimes.wixsite.com/virtualrealty" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/partners/virtual-realty-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">Virtual Realty</h4>
                        </a>
                    </div>
                    <div class="col section-list-col partners-section">
                        <a href="https://adapunkz.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/partners/adapunkz-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">ADAPunkz</h4>
                        </a>
                    </div>
                    <div class="col section-list-col partners-section">
                        <a href="https://www.keyboardwarriorsinternetcafe.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/partners/kwic-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">KWIC</h4>
                        </a>
                    </div>
                    <div class="col section-list-col partners-section">
                        <a href="https://www.youngada.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/partners/youngada-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">#YoungAda</h4>
                        </a>
                    </div>
                    <div class="col section-list-col partners-section">
                        <a href="https://metalinq.io/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img src="images/partners/metalinq-logo.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">METALINQ</h4>
                        </a>
                    </div>
                    <div class="col section-list-col partners-section">
                        <a href="https://nft.blvck.com/" target="_blank">
                            <div class="section-list-logo" data-aos="fade-up" data-aos-delay="100">
                                <img class="logo logo-light" src="images/partners/blvck-logo-light.png">
                                <img class="logo logo-dark" src="images/partners/blvck-logo-dark.png">
                            </div>
                            <h4 class="section-list-title" data-aos="fade-up" data-aos-delay="100">BLVCK</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Partners Section End -->

<!-- Specialization Section -->
<section class="ptb-120" id="studio">
    <div class="container">
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="100" class="col">
                <div class="card">
                    <div class="studio-img"></div>
                    <div class="card-body">
                        <h5 class="card-title">Design Studios</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col">
                <div class="card">
                    <div class="studio-img"></div>
                    <div class="card-body">
                        <h5 class="card-title">Gaming Studios <br> (Coming Soon)</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col">
                <div class="card">
                    <div class="studio-img"></div>
                    <div class="card-body">
                        <h5 class="card-title">Marketing Studios <br> (Coming Soon)</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Specialization Section End -->

<!-- 3DXPerience Section -->
<section class="section-bg-separation-2 ptb-120" id="experience">
    <div class="container">
        <div class="row ">
            <div class="col-xl-6">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">What makes 3DXP Stand Out?</h2>
                <ul  class="section-list-bullet" data-aos="fade-up" data-aos-delay="100">
                    <li data-aos="fade-up" data-aos-delay="200"><img src="images/icons/3dxp.png" class="thumb">  We have decades of combined experience in the 3D industry</li>
                    <li data-aos="fade-up" data-aos-delay="300"><img src="images/icons/3dxp.png" class="thumb">  We focus on creating “3DXPerience” rather than just building 3D assets</li>
                    <li data-aos="fade-up" data-aos-delay="400"><img src="images/icons/3dxp.png" class="thumb">  We create unique customizable property designs and props</li>
                    <li data-aos="fade-up" data-aos-delay="500"><img src="images/icons/3dxp.png" class="thumb">  We have a “QA” process to ensure quality of output</li>
                    <li data-aos="fade-up" data-aos-delay="600"><img src="images/icons/3dxp.png" class="thumb">  We value customer feedback</li>
                </ul>
            </div>
            <div class="col-xl-6">
                <div class="section-media" data-aos="fade-up">
                    <img src="images/assets/stand-out.png">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 3DXPerience Section End -->

<!-- 3DXPerience Section -->
<section class="ptb-120" id="promise">
    <div class="container">
        <div class="row ">
            <div class="col-xl-6">
                <div class="approach-process" data-aos="fade-up">
                    <img class="logo logo-light" src="images/assets/oculus.png">
                    <img class="logo logo-dark" src="images/assets/oculus-light.png">
                </div>
            </div>
            <div class="col-xl-6">
                <h2 class="mb-2" data-aos="fade-up" data-aos-delay="100">Our Promise</h2>
                <ul class="section-list-bullet">
                    <li data-aos="fade-up" data-aos-delay="200">
                        <img src="images/assets/quality-dark.png" class="thumb thumb-light">
                        <img src="images/assets/quality-light.png" class="thumb thumb-dark">
                        Quality at low costs.
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300">
                        <img src="images/assets/transparency-dark.png" class="thumb thumb-light">
                        <img src="images/assets/transparency-light.png" class="thumb thumb-dark">
                        Transparency on fee and billing schedule.
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300">
                        <img src="images/assets/collaborate-dark.png" class="thumb thumb-light">
                        <img src="images/assets/collaborate-light.png" class="thumb thumb-dark">
                        Collaboration with you to ensure you get what you expect.
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300">
                        <img src="images/assets/timely-dark.png" class="thumb thumb-light">
                        <img src="images/assets/timely-light.png" class="thumb thumb-dark">
                        Timely delivery on deadlines and milestones.
                    </li>
                    <li data-aos="fade-up" data-aos-delay="300">
                        <img src="images/assets/confidential-dark.png" class="thumb thumb-light">
                        <img src="images/assets/confidential-light.png" class="thumb thumb-dark">
                        Confidentiality of project undertaken.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- 3DXPerience Section End -->

<!-- Start Our Process area -->
<!-- <section class="section-bg-separation-2 ptb-120" id="process">
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
                    <a href="experience.php" class="btn btn-gradient"><span>Submit a request</span></a>
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
</section> -->
<!-- End Our Process area -->

<!-- Start Contact area -->
<section class="section-bg-separation-2 ptb-120" id="request">
    <div class="container">
        <div class="row">
            <div class="col-xl-5" data-aos="fade-up" data-aos-delay="100">
                <h2 class="mb-2">Send us a message</h2>
                <br>
                <p class="medium">Interested in our services or have any queries? Send us a message and we will respond as soon as we can.</p>
                <br>
                <ul class="contact-informations">
                    <li><i class="ri-mail-line"></i> info@3dxp.co</li>
                    <li><i class="ri-time-line"></i> Monday to Sunday</li>
                    <li><i class="ri-global-line"></i> 3dxp.co</li>
                    <li><i class="ri-map-pin-line"></i> 27 Old Gloucester Street, London, England, UK, WC1N 3AX</li>
                </ul>
            </div>
            <div class="col-xl-7" data-aos="fade-up" data-aos-delay="100">
                <div class="signup-wrapper signup d-flex align-items-center">
                    <form class="contact__form" method="post" action="mail.php">

                        <!-- form message -->
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
                            <!-- End .col -->

                            <div class="col-md-6 mb-4">
                                <div class="field-box">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="cont-email" id="email" type="text" placeholder="" required>
                                </div>
                            </div>
                            <!-- End .col -->

                            <div class="col-md-4 mb-4">
                                <div class="field-box">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select name="cont-subject" id="subject" class="w-100">
                                        <option value="Design"selected>Design</option>
                                        <option value="Gaming">Gaming</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End .col -->

                            <div class="col-md-8 mb-4">
                                <div class="field-box">
                                    <label for="topic" class="form-label">Topic</label>
                                    <input name="cont-topic" id="topic" type="text" placeholder="" required>
                                </div>
                            </div>
                            <!-- End .col -->

                            <div class="col-md-12 mb-4">
                                <div class="field-box">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="cont-message" id="message" rows="5" placeholder="Type your message" required></textarea>
                                </div>
                            </div>
                            <!-- End .col -->
                        </div>
                        <!-- End .row -->
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
                        <p class="medium">Conceptualization is initiated (head by a lead Concept Artist) and ideas are pooled together from the results of the information-gathering<br><br>
                            The concept artist envisions designs taken from the client’s perspective, conjuring visual representation of the structure and represents them through
                            images and art that invoke a similar feel, thus shaping a comprehensive perception of what the project could and would look like.<br><br>
                            Other necessary details, such as the selection of a color palette, the general shape of a structure, and other aesthetic-driven factors
                            are also collected at this stage</p>
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
                            It is in this phase that the experimentation of the structure’s mass and overall shape occurs<br><br>
                            The architect starts with a sketch of the building’s exterior, then works their way through until the interior and landscaping. Careful attention
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
                        <p class="medium">Throughout the build phase, 3D artists gather the data -such as measurements and other specifications- from the architect and start turning the project into reality <br><br>
                            It is during this phase that details such as lighting, textures and (technical term) are accomplished<br><br>
                            The addition of furniture and fixtures helps develop a cohesive atmosphere within the structure</p>
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
                        <p class="medium">After the project has been (modeled? Rendered?), it is passed on to a Quality Assurance specialist who in turn makes sure that the product is
                            free of errors and of the highest standard<br><br>This is done by crosschecking the product with a set of stringent guidelines to ensure consistency and quality<br><br>
                            <i>Quality is our priority before anything else (already implied in “priority”)</i></p>
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
                        <p class="medium">The final phase is deployment, where the files are given to the client in a format that is most convenient for them<br><br>
                            The product can also be directly (delivered? Loaded?) into the client’s chosen programs, should they choose</p>
                        <ul class="random-list">
                            <li>Give files to client</li>
                            <li>Screenshot of actual files (filename.extension)</li>
                            <li>Delivered through convenient method (files can be formatted to suit software/program</li>
                        </ul>
                    </div>
                    <div class="col-xl-6">
                        <div class="image-popup"> <img src="images/ourprocess/concept-graphics.png" alt="popular collection"></div>
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
