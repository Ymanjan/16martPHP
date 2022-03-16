<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

	<footer class="footer">
        <div class="footer-top container">
            <a href="#" class="footer-logo">
                <img src="<?php echo get_template_directory_uri() ?> ./asset/img/Landing.png" alt="logo">
            </a>
            <div class="footer-bar">
                <ul class="footer-menu">
                    <li class="footer-menu-title"><a href="#">produrt</a></li>
                    <li><a href="#">popular</a></li>
                    <li><a href="#">trending</a></li>
                    <li><a href="#">catalog</a></li>
                    <li><a href="#">features</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-title"><a href="#">company</a></li>
                    <li><a href="#">releases</a></li>
                    <li><a href="#">mission</a></li>
                    <li><a href="#">strategi</a></li>
                    <li><a href="#">works</a></li>
                </ul>
                <ul class="footer-menu">
                    <li class="footer-menu-title"><a href="#">info</a></li>
                    <li><a href="#">service</a></li>
                    <li><a href="#">ger</a></li>
                    <li><a href="#">started</a></li>
                    <li><a href="#"></a>guide</li>
                </ul>
                <div class="footer-icon">
                    <p class="footer-menu-title">Follow us</p>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?> ./asset/img/baa.png" class="fecobook" alt="fecobook"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?> ./asset/img/vaaa.png" class="twitter" alt="twitter"></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?> ./asset/img/Shape (3).png" class="Path" alt="Path"></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-bottom">
            <p>© 2016 Landing. All rights reserved.</p>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
