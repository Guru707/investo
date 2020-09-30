<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Investo</title>
   <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,400&display=swap"
      rel="stylesheet">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/slick.css">
   <link rel="stylesheet" href="css/slick-theme.css">
   <link rel="stylesheet" href="css/fancybox.css"> 
   <link rel="stylesheet" href="css/icons.css">
   <link rel="stylesheet" href="css/style.css">

</head>

   <footer class="bg-blue footer-element">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-lg-3">
               <div class="footer-box">
                  <h4>Email Address</h4>
                  <a href="mailto:support@investotrade.net">support@investotrade.net</a>
               </div>
            </div>
            <div class="col-md-4 col-lg-3">
               <div class="footer-box">
                  <h4>Contact Us</h4>
                  <p>Address:
                     <span>71-75 Shelton Street Covent</span>
                     Garden, London , UK, WC2H9JQ</p>

                  <p>Phone: <a href="tel:+441414162798">+441414162798</a></p>
               </div>
            </div>
            <div class="col-md-4 col-lg-3">
               <div class="footer-box">
                  <h4>Follow Us</h4>
                  <p class="social-icon-block">
                     <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                     <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                     <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                     <a href="#" class="social-icon"> <i class="fab fa-whatsapp"></i></a>
                  </p>
               </div>
            </div>
            <div class="col-md-4 col-lg-3">
           
               <div class="footer-box ">
               <h4>Quick Link</h4>
                  <p class="mb-1"><a href="#" class="text-white ">Terms And Condition</p>         
                  <p><a href="#" class="text-white">Privacy Policy</a></p>          
                </div>
            </div>
         </div>
      
      <div class="row pt-4 pb-4">
         <div class="col-md-4 col-lg-3">
            <div class="footer-box pb-3">
               <img src="images/brand.png" alt="brand" class="img-responsive" />
            </div>
         </div>
         <div class="col-md-8 col-lg-9">
            <div class="footer-box">
               <p class="font-300">
                  Risk Warning: Investing in financial instruments as well as trading FOREX and other
                  leveraged derivatives involves a high degree of risk and may not be suitable to all investors.
                  Trading such financial instruments can increase losses as well as gains on the relatively small
                  movements of the underlying market. or its officials are not responsible for any losses,
                  and before trading, one should consult an independent advisor or professional entity if necessary.
                  For further information please refer to the Risk Warning that is available on our web site.</p>
            </div>
         </div>
      </div>
      </div>
      <div class="footer-bottom text-center pt-4 pb-4">
            <p class="mb-0 text-white">&copy; Copyright 2019 Investo Trade . All Rights Reserved.</p>
      </div>
   </footer>

<!-- Use CSS to replace link text with flag icons -->
<!-- <ul class="translation-links">
   <li><a href="#" class="spanish" data-lang="Spanish">Spanish</a></li>
   <li><a href="#" class="german" data-lang="German">German</a></li>
 </ul> -->
 
 <!-- Code provided by Google -->
 <div id="google_translate_element"></div>
 <script src="js/jquery-2.1.4.js"></script>

 <script type="text/javascript">
   function googleTranslateElementInit() {
     new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
   }
 </script>
 <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
 


 <!-- Flag click handler -->
  <script src="js/fancybox.js"></script> 

<script src="js/font-awesome.js" crossorigin="anonymous"></script>
<script src="js/popper-min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/slick.js"></script>
<script src="js/Winwheel.js"></script>
<script src="js/TweenMax.min.js"></script>    
<script src="js/custom.js"></script>
<script src="js/wheelspin_custom.js"></script>    

<script type="text/javascript">
 $(document).ready(function () {
     $('.dropdown a').click(function() {
       var lang = $(this).data('lang');
       var $frame = $('.goog-te-menu-frame:first');
       if (!$frame.size()) {
         alert("Error: Could not find Google translate frame.");
         return false;
       }
       $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
       return false;
     });
   });
 </script>
</body>
</html>