<?php 
require_once ('includes/head.php');
?>
<body>

    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="nav-extended menu-bgColor" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="/index.html" class="brand-logo">
                    <img src="img/kit.png" alt="logo kitcompany.com.ua ">
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="main.html">Головна</a>
                    </li>
                    <li>
                        <a href="solarPanel.html">Сонячні панелі</a>
                    </li>
                    <li>
                        <a href="invertors.html">Інвертори</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="news.html">Новини</a>
                    </li>
                </ul>
                <!-- Navbar Mobile -->
                <ul id="nav-mobile" class="side-nav">
                    <li>
                        <div class="user-view hoverable">
                            <div class="background menu-bgColor"></div>
                            <a href="#!user">
                                <img src="img/kit.png">
                            </a>
                            <a href="#!name">
                                <span class="name">KiTcompany</span>
                            </a>
                            <a class="valign-wrapper sidebar_item" href="tel:+380(68)594-4495">
                                <i class="material-icons left">contact_phone</i>+380(68)594-4495</a>
                            <a href="mailto:KiT infoGAVkitcompanyDOTcomDOTTua" class="valign-wrapper sidebar_item" onclick="this.href=this.href
                                .replace(/GAV/,'@').replace(/DOT/,'.').replace(/DOTT/,'.')">
                                <i class="material-icons left">contact_mail</i>
                                <style type="text/css">
                                    my-email::after {
                                        content: attr(data-domain);
                                    }

                                    my-email::before {
                                        content: attr(data-user) "\0040";
                                    }
                                </style>
                                <my-email data-domain="kitcompany.com.ua" data-user="info"></my-email>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="divider"></div>
                    </li>
                    <li class="hoverable">
                        <a href="maine.html">Головна</a>
                    </li>
                    <li class="hoverable">
                        <a href="solarPanel.html">Сонячні панелі</a>
                    </li>
                    <li class="hoverable">
                        <a href="invertors.html">Інвертори</a>
                    </li>
                    <li class="hoverable">
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li class="hoverable">
                        <a href="news.html">Новини</a>
                    </li>
                    <li class="hoverable">
                        <div class="divider"></div>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
            </div>
            <div class="nav-wrapper container">
                <div class="col s12">
                    <a href="main.html" class="breadcrumb">Головна</a>
                    <a href="#!" class="breadcrumb">Новини</a>
                    <a href="#!" class="breadcrumb">Новина</a>
                </div>
            </div>
        </nav>
    </div>
<br>
<br>
<br>
    <!-- Title -->


    <div class="container">
        <div class="row">
            <div id="test1" class="col s12">
                <div class="section">
                    <h1>НОВИНИ</h1>
                </div>
            </div>
            <!--Main layout-->

            <div class="row">

                <!--Main column-->
                <div class="col s12">

                    <br>
                    <hr>

                    <!--Post-->
                    <div class="col s9">
                        <div class="">
                            <h3 class="myHeaderFont">Post Title</h3>
                        </div>
                        <div class="blogpostinfo">
                            <i class="material-icons">timer</i>30 JAN, 2018
                            <a href="!#" title="Show Comments">
                                <i class="fa fa-comments">
                                </i>11</a>
                        </div>
                        <div class="blogpostimageheader">
                            <img class="materialboxed responsive-img z-depth-5" src="img/work/solar-panels-1794467.jpg">
                        </div>
                        <div class="blogpostcontent">
                            <h3>Lorem ipsum dolor sit amet</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse mattis, nulla id pretium malesuada, dui est laoreet
                                risus, ac rhoncus eros diam id odio. Duis elementum ligula eu ipsum condimentum accumsan.
                            </p>
                            <p>
                                Vivamus euismod elit ac libero facilisis tristique. Duis mollis non ligula vel tincidunt. Nulla consectetur libero id nunc
                                ornare, vel vulputate tellus mollis. Sed quis nulla magna. Integer rhoncus sem quis ultrices
                                lobortis. Maecenas tempus nulla quis dolor vulputate egestas. Phasellus cursus tortor quis
                                massa faucibus fermentum vel sit amet tortor. Phasellus vehicula lorem et tortor luctus,
                                a dignissim lacus tempor. Aliquam volutpat molestie metus sit amet aliquam. Duis vestibulum
                                quam tortor, sed ultrices orci sagittis nec.
                            </p>
                            <h3>Sed sit amet metus sit</h3>
                            <p>
                                Proin fermentum, purus id eleifend molestie, nisl arcu rutrum tellus, a luctus erat tortor ut augue. Vivamus feugiat nisi
                                sit amet dignissim fermentum. Duis elementum mattis lacinia. Sed sit amet metus sit amet
                                leo semper feugiat. Nulla vel orci nec neque interdum facilisis egestas vitae lorem. Phasellus
                                elit ante, posuere at augue quis, porta vestibulum magna. Nullam non mattis odio. Donec eget
                                velit leo. Nunc et diam volutpat tellus ultrices fringilla eu a neque. Integer lectus nunc,
                                vestibulum a turpis vitae, malesuada lacinia nibh. In sit amet leo ut turpis convallis bibendum.
                                Nullam nec purus sapien. Quisque sollicitudin cursus felis sit amet aliquam.
                            </p>
                        </div>
                        <br>
                        <hr>
                    </div>

                    <!--Sidebar-->
                    <div class="col s3">
                        <div class="row">
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" class="tooltipped" data-tooltip="Пошук по новинам">
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col s3">
                        <div class="row">
                            <h4 class="">Categories:</h4>
                            <div class="collection">
                                <a href="#!" class="collection-item">
                                    <span class="badge">1</span>Технології</a>
                                <a href="#!" class="collection-item">
                                    <span class="new badge">4</span>Ринок</a>
                                <a href="#!" class="collection-item">Різне</a>
                                <a href="#!" class="collection-item">
                                    <span class="badge">14</span>Казнащо</a>
                            </div>
                        </div>

                        <br>
                        <hr>

                        <!-- Archieve -->
                        <section class="" data-wow-delay="0.4s">
                            <h4 class="">Архів</h4>
                            <!--List-->
                            <ul class="list mt-3">
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">August 2018</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">July 2018</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">June 2018</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">May 2018</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">April 2018</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="">
                                        <a href="#!" class="grey-text">March 2018</a>
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="mb-4">
                                        <a href="#!" class="grey-text">Febuary 2018</a>
                                    </h6>
                                </li>
                            </ul>
                            <!--List-->

                            <hr>

                        </section>
                        <!-- Archieve -->

                    </div>
                    <!--/.Sidebar-->
                </div>
            </div>
        </div>
    </div>
    <!--/.Main layout-->
<?php 
require_once ('includes/footer.php');
require_once ('includes/scripts.php');
?>