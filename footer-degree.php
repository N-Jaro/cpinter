
<?php
	$css_path = get_template_directory_uri(); 
?>
<div class="footer container-fluid">
    <div class="container">
        <div class="row">
            <div class="logo col-sm-5 col-lg-6"><img src="<?php echo $css_path."/"?>img/footer-logo.png"></div>
            <div class="right col-sm-7 col-lg-5 col-lg-offset-1 text-right">
                <div class="contact">
                    <p>
                            <strong>CONTACT US</strong>
                            <br>Department of Computer Engineering, Chulalongkorn University<br/> Phayathai Rd., Pathumwan, Bangkok 10330, Thailand
                        </p>
                    <p>
                        <span><strong>Telephone:</strong>+66 2218 6959</span>
                        <span><strong>Email:</strong> grad@cp.eng.chula.ac.th</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo $css_path."/"?>js/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="<?php echo $css_path."/"?>js/bootstrap.min.js"></script>
<script src="<?php echo $css_path."/"?>js/jquery.slicknav.min.js"></script>
    <script src="<?php echo $css_path."/"?>js/morphext.min.js"></script>
<script>
        $('#main-nav').slicknav({
            label: '',
            duration: 400,
            prependTo:'nav',
	        closedSymbol:"<span class='glyphicon glyphicon-plus pull-right' aria-hidden='true'></span>",
	        openedSymbol:"<span class='glyphicon glyphicon-remove pull-right' aria-hidden='true'></span>",
            allowParentLinks:false
        });
</script>
<script>
                                 var slideIndex = 1;
                                 showSlides(slideIndex);

                                 function plusSlides(n) {
                                     showSlides(slideIndex += n);
                                 }

                                 function currentSlide(n) {
                                     showSlides(slideIndex = n);
                                 }

                                 function showSlides(n) {
                                     var i;
                                     var slides = document.getElementsByClassName("mySlides");
                                     if (n > slides.length) { slideIndex = 1 }
                                     if (n < 1) { slideIndex = slides.length }

                                     for (i = 0; i < slides.length; i++) {
                                         slides[i].style.display = "none";
                                     }
                                     slides[slideIndex - 1].style.display = "block";

                                     var prodBtn = document.getElementsByClassName("menu-btn");
                                     for (i = 0; i < prodBtn.length; i++) {

                                         if ($(prodBtn[i]).hasClass("active")) {
                                             $(prodBtn[i]).removeClass("active");
                                         }
                                     }
                                     $(prodBtn[slideIndex - 1]).addClass("active");
                                 }
                                         $("#main-nav li.menu-item-has-children>a").append(' <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>');
</script>
<?php wp_footer(); ?>
</body>

</html>