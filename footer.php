<footer>
    <div class="container">
        <span class="bigicon icon-speedometer "></span>

        <div class="footerlinks">
            <!-- FOOTER LINKS START -->
            <?php wp_nav_menu(array(
    'theme_location' => 'footer_menu',
    'container_class' => '',
    'menu_class' => ''
)); ?>
           <!--<ul>
    <li><a href="#hero">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#testimonials">Testimonials</a></li>

    replace the email address below with your email address
    <li><a href="mailto:you@yourmail.com">Contact</a></li>
</ul>-->
        </div>
        <!-- FOOTER LINKS END -->

        <div class="copyright">
            <!-- FOOTER COPYRIGHT START -->
            <p><a href="#">Drifolio</a> stands for Dribbble-Portolio. This is a free HTML template designed and coded by <a href="http://creativealiens.com">Creative Aliens</a>. All logo and images in this template used for preview purpose only. You are free to use the template but make sure to use your own images.</p>
        </div>
        <!-- FOOTER COPYRIGHT END -->

        <div class="footersocial wow fadeInUp" data-wow-duration="3s">
            <!-- FOOTER SOCIAL ICONS START -->
            <ul>
                <li><a href="http://facebook.com/MamunSrizon"><span class="icon-social-facebook"></span></a></li>
                <li><a href="http://twitter.com/MamunSrizon"><span class="icon-social-twitter"></span></a></li>
                <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                <li><a href="http://dribbble.com/srizon"><span class="icon-social-dribbble"></span></a></li>
                <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
            </ul>
        </div>
        <!-- FOOTER SOCIAL ICONS END -->
    </div>
</footer>
<!-- FOOTER END -->
<script src="<?php bloginfo(template_url); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo(template_url); ?>/js/jquery.appear.js" type="text/javascript"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<!--Other necessary scripts-->
<script src="<?php bloginfo(template_url); ?>/js/jquery.nicescroll.min.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/jribbble.min.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/drifolio.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/wow.min.js"></script>
<script src="<?php bloginfo(template_url); ?>/js/progress-bar.min.js" type="text/javascript"></script>

<!--  <script src="js/jquery.min.js" type="text/javascript"></script> -->
<!-- <script src="js/jquery.appear.js" type="text/javascript"></script> -->
<script>
    new WOW().init();

</script>
</body>

</html>
