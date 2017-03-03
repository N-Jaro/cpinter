
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
    <script src="<?php echo $css_path."/"?>js/equalize.min.js"></script>
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

    $(window).on('load',function() {
        if ($(window).width() >= 1024) {
            $('#fac-parent').equalize();
        }
    });
    
    $("#main-nav li.menu-item-has-children>a").append(' <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>');
    </script>
<?php wp_footer(); ?>
</body>

</html>