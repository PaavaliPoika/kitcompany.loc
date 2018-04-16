<!--  Scripts-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/localization/messages_uk.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/dropify.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.maskedinput.min.js"></script>
    <script>
        document.getElementById.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("top_btn").style.display = "block";
            } else {
                document.getElementById("top_btn").style.display = "none";
            }
        }
    </script>
    <script>
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        /*Preloader*/
        $(window).load(function() {
            setTimeout(function() {
              $('body').addClass('loaded');      
            }, 200);
        });  

    </script>
    <script type="text/javascript">
        function goFurther() {
            var element = document.getElementById("btnSub");
            element.classList.toggle("disabled");
            
        }
    </script>
    <script type="text/javascript" src="assets/js/init.js"></script>
    <script type="text/javascript" src="assets/js/engine.js"></script>
    
<!--  end Scripts-->

</body>

</html>
