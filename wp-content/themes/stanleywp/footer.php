<?php
/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2011 - 2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */
?>
</div><!-- end of wrapper-->
<?php gents_wrapper_end(); // after wrapper hook ?>


<?php gents_container_end(); // after container hook ?>


<!---->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

<script src="<?php echo get_template_directory_uri();?>/js/cbpAnimatedHeader.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/smoothscroll.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/app.js"></script>


<?php wp_footer(); ?>

</body>
</html>