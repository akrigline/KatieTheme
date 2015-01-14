<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package KatieTheme
 */
?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory');?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="<?php bloginfo('template_directory');?>/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/vendor/skrollr.js"></script>
<script src="<?php bloginfo('template_directory');?>/js/vendor/jquery.bxslider.min.js"></script>

<script src="<?php bloginfo('template_directory');?>/js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<?php wp_footer(); ?>

</body>
</html>