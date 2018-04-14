<?php 
require_once ('includes/head.php');
?>
<body>
    <!-- Start Page Loading -->
   <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
<!-- End Page Loading -->
    <!-- Navbar -->
    <div class="navbar-fixed">
            <nav class="nav-extended light-blue darken-4" role="navigation">
                <div class="nav-wrapper container">
                    <a id="logo-container" class="brand-logo center"><img src="/assets/img/_KIT_.png" alt="KiT" title="KiT"></a>
                </div>
            </nav>
        </div>
    <!-- end Navbar -->

    <!-- Header Fullscreen Slider  -->

    <div class="slider fullscreen">
        <ul class="slides">
            <li>
                <img src="/assets/img/SP1.jpg" alt="Енергетика майбутнього" title="Енергетика майбутнього">
                <div class="caption center-align">
                    <h4 class="blue-text text-darken-4" style="text-shadow:0px 0px 60px #000;font-weight: 700;">Енергетика майбутнього</h4>
                    <br>
                    <h5 class="blue-text text-darken-4" style="text-shadow:0px 0px 60px #000;font-weight: 500;">Сонячні панелі та інвертори.</h5>
                    <br>
                    <hr>
                    <h5 class="blue-text text-darken-4" style="text-shadow:0px 0px 60px #000;">Наш сайт знаходиться в стадії розробки. <br>
Але зовсім скоро ми відкриваємось! </h5>
                    
                    
                </div>
            </li>
        </ul>
    </div>
    <?php 
require_once ('includes/footer.php');
require_once ('includes/scripts.php');
?>