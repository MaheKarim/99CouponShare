  <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- (!) Placed at the end of the document so the pages load faster -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="{{asset('/frontend')}}/assets/js/jquery-1.12.3.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{asset('/frontend')}}/assets/js/bootstrap.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Modernizer JS -->
    <script src="{{asset('/frontend')}}/assets/vendors/modernizr/modernizr-2.6.2.min.js"></script>
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="{{asset('/frontend')}}/assets/vendors/owl-carousel/owl.carousel.min.js"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="{{asset('/frontend')}}/assets/vendors/flexslider/jquery.flexslider-min.js"></script>

    <!-- Coutdown -->
    <script type="text/javascript" src="{{asset('/frontend')}}/assets/vendors/countdown/jquery.countdown.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="{{asset('/frontend')}}/assets/js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>


    <script>
      $.validate({
        modules : 'security',
        onModulesLoaded : function() {
          var optionalConfig = {
            fontSize: '12pt',
            padding: '4px',
            bad : 'Very bad',
            weak : 'Weak',
            good : 'Good',
            strong : 'Strong'
          };
      
          $('input[name="pass"]').displayPasswordStrength(optionalConfig);
        }
      });
      </script>