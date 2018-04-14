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
        <nav class="nav-extended menu-bgColor" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="https://kitcompany.com.ua/" class="brand-logo">
                    <img src="/assets/img/_KIT_.png" alt="404" title="404">
                </a>
                <ul class="right hide-on-med-and-down"><li>
    <a href="/">Головна</a>
</li><li>
    <a href="sonyachnі-panelі/">Сонячні панелі</a>
</li><li>
    <a href="іnvertori/">Інвертори</a>
</li><li>
    <a href="faq">ЧаПи</a>
</li><li>
    <a href="news/">Новини</a>
</li></ul>
                <!-- Navbar Mobile -->
                <ul id="nav-mobile" class="side-nav"><li class="hoverable">
    <a href="/">Головна</a>
</li><li class="hoverable">
    <a href="sonyachnі-panelі/">Сонячні панелі</a>
</li><li class="hoverable">
    <a href="іnvertori/">Інвертори</a>
</li><li class="hoverable">
    <a href="faq">ЧаПи</a>
</li><li class="hoverable">
    <a href="news/">Новини</a>
</li></ul> 
                <a href="#" data-activates="nav-mobile" class="button-collapse">
                    <i class="material-icons">menu</i>
                </a>
            </div>
        </nav>
    </div>
    <!-- end Navbar -->

    <!-- Content -->
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 center">
                <h3 class="service-title header">404</h3>
                <p class="left-align grey-text text-darken-3 lighten-3"></p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                От халепа! Такой страницы нет! Но у нас есть много других интересных страничек!!!)))
            </div>
        </div>
    </div>
    <!-- end Content -->
    
    <div class="container">
        <div class="row">
            <div class="col s12 m12 l12 center">
                <a href="https://kitcompany.com.ua/" class="waves-effect waves-light btn"><i class="material-icons right">home</i>На головну сторінку</a>
            </div>
        </div>
    </div>
    
    <!-- Order_Form -->
    <div class="container">
        <div class="section scrollspy">
            <div id="order" class="row">
                <div class="col s12 center">
                    <h3>Зворотній звязок</h3>
                    <p>Щоб отримати пропозицією, будьласка, максимально заповніть поля, що знаходяться нижче:</p>
                    <div class="col m12">
                        <div class="row">
                           <form action="" method="post" class="ajax_form">

    <div class="form-group">
        <div class="controls input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" id="af_name" name="name" value="" class="form-control validate tooltipped" data-error="wrong" data-success="right" data-tooltip="Ваше ім'я" pattern="^[A-Za-zА-Яа-яЁёІіЇїҐґ\s]{2,15}$">
            <label class="control-label" for="af_name">Ім'я</label>
            <span class="error_name"></span>
        </div>
    </div>
    
    <div class="row">
        <div class="col s12 m6">
            <div class="form-group">
                <div class="controls input-field s12 m6">
                    <i class="material-icons prefix">phone</i>
                    <input type="tel" id="af_phone" name="phone" value="" data-error="wrong" data-success="right" class="form-control validate tooltipped" data-tooltip="+380(67)111-2233" pattern="[\+]\d{3}[\(]\d{2}[\)]\d{3}[\-]\d{4}">
                    <label class="control-label" for="af_email">Телефон</label>
                    <span class="error_phone"></span>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="form-group">
                <div class="controls input-field s12 m6">
                    <i class="material-icons prefix">email</i>
                    <input type="email" id="af_email" name="email" value="" data-error="wrong" data-success="right" class="form-control validate tooltipped" data-tooltip="user@domain.com">
                    <label class="control-label" for="af_email">E-mail</label>
                    <span class="error_email"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="controls input-field s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="af_message" name="message" class="form-control materialize-textarea validate tooltipped" data-error="wrong" data-success="right" data-tooltip="Залиште тут своє повідомлення..." rows="5"></textarea>
            <label class="control-label" for="af_message">Повідомлення</label>
            <span class="error_message"></span>
        </div>
    </div>

    <div class="form-group">
        <div class="controls">
            <div class="row center">
                <div class="col s12">
                    <input class="menu-bgColor text-CrystalWaters" type="checkbox" id="chkAgree" onclick="goFurther()">
                    <label for="chkAgree">
                        <small>Згоден з обробкою персональних даних, шо надаю</small>
                    </label>
                    <br>
                    <button id="btnSub" type="submit" class="btn btn-primary disabled">Submit <i class="material-icons right">send</i></button>
                </div>
            </div>
        </div>
    </div>

    
    

	<input type="hidden" name="af_action" value="756630d728c1c7fd1e20f78491da6786">
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- End_Order_Form -->
    

<?php 
require_once ('includes/footer.php');
require_once ('includes/scripts.php');
?>