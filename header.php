<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Piroll
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Piroll</title>
  <link rel="profile" href="https://gmpg.org/xfn/11">
  
  <link rel="stylesheet" type="text/css" href="<?php echo(get_template_directory_uri()); ?>/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo(get_template_directory_uri()); ?>/slick-theme/slick-theme.css"/>
  <link rel="stylesheet" href="styles.css">
  <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> -->


	<!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header>
      <div class="container">
        <nav class="navbar">
          <a href="#" class="navbar-brand">
            <img src="<?php echo(get_template_directory_uri()); ?>/img/logo.png" alt="logo">
          </a>
            <ul class="navigation">
              <li>
                <a  href="#">Home</a>
              </li>
              <li>
                <a  href="#about">About</a>
              </li>
              <li>
                <a  href="#work">Work</a>
              </li>
              <li>
                <a  href="#work-process">Process</a>
              </li>
              <li>
                <a  href="#services">Services</a>
              </li>
              <li>
                <a  href="#testimonials">Testimonials</a>
              </li>
              <li>
                <a  href="#need-project">Contact</a>
              </li>
            </ul> 
        </nav>           
      </div>
    </header>
