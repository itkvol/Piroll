<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Piroll
 */

?>

	<footer>
	<div class="container">
    <div class="flex-wrapper">
      <div class="footer-col width-4">
        <h3>Piroll Design, Inc.</h3>
        <p>© 2017 Piroll. All rights reserved. <br>
            Designed by robirurk.</p>
      </div>
      <div class="footer-col width-3">
        <p>hello@pirolltheme.com <br>
            +44 987 065 908</p>
      </div>
      <div class="footer-links">
        <div>
          <a href="">projects</a> <br>
          <a href="">about</a> <br>
          <a href="">services</a> <br>
          <a href="">carreer</a>
        </div>
        <div>
          <a href="">news</a> <br>
          <a href="">events</a> <br>
          <a href="">contact</a> <br>
          <a href="">legals</a>
        </div>
      </div>
      <div class="footer-socials">
          <a href="">facebook</a> 
          <a href="">twitter</a> 
          <a href="">instagram</a> 
          <a href="">dribble</a>
      </div>  
  </div>
  </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
<script type="text/javascript" src="<?php echo(get_template_directory_uri()); ?>/slick/slick.min.js"></script>
<script src="<?php echo(get_template_directory_uri()); ?>/js/script.js"></script>
</body>
</html>
