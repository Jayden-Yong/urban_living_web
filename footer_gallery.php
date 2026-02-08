 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">

                <!-- Footer Widget Area 
                <div class="col-12 col-lg-5">
                    <div class="footer-widget-area mt-50">
                         <a href="index.html" class="nav-brand"><img src="img/logo2.png" alt="" style="width:130px"></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. </p>
                    </div>
                </div>

                <!-- Footer Widget Area 
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Find us on the map</h6>
                        <img src="img/bg-img/footer-map.png" alt="">
                    </div>
                </div>

                <!-- Footer Widget Area 
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget-area mt-50">
                        <h6 class="widget-title mb-5">Subscribe to our newsletter</h6>
                        <form action="#" method="post" class="subscribe-form">
                            <input type="email" name="subscribe-email" id="subscribeemail" placeholder="Your E-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>

                <!-- Copywrite Text -->
                <div class="col-12">
                    <div class="copywrite-text mt-30">
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered <i class="fa fa-heart-o" aria-hidden="true"></i> by <a  target="_blank">SS Genius</a> | <a href="/urban_living/privacy_policy.php" target="_self" style="color:#FFF;">Privacy Policy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
 <!-- ##### All Javascript Script ##### -->
     <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script> 
    
    <script src="js/jquery.justifiedGallery.min.js"></script>
    <script>
        jQuery.noConflict();
        jQuery(document).ready(function ($) {
            $('.mygallery').each(function (i, el) {
                $(el).justifiedGallery({
                        rel: 'mygallery-' + i, 
                        rowHeight : 400,
                        captions:false,
                        lastRow : 'nojustify',
                        margins:3
            }).on('jg.complete', function () {
                    $(this).find('a').colorbox({
                        maxWidth : '80%',
                        maxHeight : '80%',
                        opacity : 0.8,
                        transition : 'elastic',
                        current : '',  
                    });
                });
            });
            
            $('#defaultOpen').click();
        });

        function openGallery(evt, galleryName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(galleryName).style.display = "block";
        evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        //document.getElementById("defaultOpen").click();    
    </script> 


    
      
</body>

</html>