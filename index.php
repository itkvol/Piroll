<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Piroll
 */

get_header();
?>


<section id="banner">
  <div class="container">
      <div class="flex-wrapper-end">
          <div class="width-5 banner-text">
              <h1>We Design and Develop</h1>
              <p>We are a new design studio based in USA. We have over 
                20 years of combined experience, and know a thing or two 
                about designing websites and mobile apps.
              </p>
              <button id="js-button" class="main-button">CONTACT US</button>
            </div> 
        </div>
  </div>
</section>

<section id="about">
      <div class="container">  
          <div class="about-wrapper">
            <h2>About Us</h2>
            <p>Divide have don't man wherein air fourth. Own itself make have night won't make. 
                A you under Seed appear which good give. Own give air without fowl moveth dry first 
                heaven fruit, dominion she'd won't very all.</p>
                 <img src="<?php echo(get_template_directory_uri()); ?>/img/signature.png" alt="signature">
          </div>
      </div>
    </section>

    <section id="skills">
          <div class="flex-wrapper">
            <div class="width-6">
              <div class="skills-stats">
                <div>
                   <h2>Professional Skills</h2>
                    <p>UI/UX DESIGN &nbsp &nbsp &nbsp<span id="skills-design-num"></span></p>
                    <div class="skills-line">
                        <div id="skills-design" class="green-line"></div>
                    </div> 
                    <p>WEB DEVELOPMENT &nbsp &nbsp &nbsp<span id="skills-development-num"></span></p>
                    <div class="skills-line">
                        <div id="skills-development" class="green-line"></div>
                    </div> 
                    <p>MARKETING &nbsp &nbsp &nbsp<span id="skills-marketing-num"></span></p>
                    <div class="skills-line">
                        <div id="skills-marketing" class="green-line"></div>
                    </div> 
                </div>
           
          </div>
            </div>
           <div class="width-6">
             <div class="skills-bg"></div> 
           </div> 
          
          </div>
               
    </section>

    <section id="numbers">
      <div class="container">
        <div class="flex-wrapper flex-space-between">
           <div class="numbers-block">
            <div><img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-portfolio.png" alt="portfolio"></div> 
            <div class="numbers-block-text">
              <span id="numbers-projects"></span> <br>
              <span>PROJECTS COMPLETED</span>
            </div>
          </div>
          <div class="numbers-block">
            <div><img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-clock.png" alt="clock"></div>
            
            <div class="numbers-block-text">
              <span id="numbers-hours"></span> <br>
              <span>WORKING HOURS</span>
            </div>
          </div>
          <div class="numbers-block">
            <div><img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-star.png" alt="star"></div>
            
            <div class="numbers-block-text">
              <span id="numbers-feedbacks"></span> <br>
              <span>POSITIVE FEEDBACKS</span>
            </div>
          </div>
          <div class="numbers-block">
            <div><img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-like.png" alt="like"></div>
            
            <div class="numbers-block-text">
              <span id="numbers-clients"></span> <br>
              <span>HAPPY CLIENTS</span>
            </div>
          </div>
      </div>
      </div>
      
       
    </section>

    <section id="work">
      <div class="flex-wrapper">
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/airpods.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/bottle.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/cork.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/ipad.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/iphone.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/mac.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/perfume.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
        <div class="width-3 work-image" style="background: url('<?php echo(get_template_directory_uri()); ?>/img/pillow.jpg') center center / cover no-repeat;">
          <div class="work-image-filter">
          <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-look.png">
        </div>
      </div>
      </div>
        
      <div id="dark"></div>
      <div id="image"></div>
    </section>

<section id="work-process">
  <div class="container">
    
      <h2>Our Work Process</h2>
    <p>Was years it seasons was there form he in in them together over that, <br>
        third sixth gathered female creeping bearing behold years.</p>
    
    
    <div class="video-cover"><img src="<?php echo(get_template_directory_uri()); ?>/img/play-button.png" alt="play"></div>
    <video width="100%" height="572px" controls>
      <source src="http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4"
      type="video/mp4">
    </video>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="flex-wrapper">

    
      <div class="width-3">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-diamond-grey.png" alt="diamond">
        <h3>ui / ux design</h3>
        <p>Be set fourth land god darkness 
            make it wherein own</p>
      </div>
      <div class="width-3">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-arc-grey.png" alt="arc">
        <h3>web development</h3>
        <p>A she'd them bring void moving 
            third she'd kind fill</p>
      </div>
      <div class="width-3">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-phone-grey.png" alt="phone">
        <h3>app / mobile</h3>
        <p>Dominion man second spirit he,
            earth they're creeping</p>
      </div>
      <div class="width-3">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-joy-grey.png" alt="joy">
        <h3>game design</h3>
        <p>Morning his saying moveth it 
            multiply appear life be</p>
      </div>
      <div class="width-3">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-plane-grey.png" alt="plane">
        <h3>SEO / marketing</h3>
        <p>Give won't after land fill creeping 
            meat you, may</p>
      </div>
      <div class="width-3 services-item">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-star-grey.png" alt="star">
        <h3>photography</h3>
        <p>Creepeth one seas cattle grass 
            give moving saw give</p>
      </div>
      <div class="width-3 services-item">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-paint-bucket-grey.png" alt="bucket">
        <h3>illustrations</h3>
        <p>Be set fourth land god darkness 
            make it wherein own</p>
      </div>
      <div class="width-3 services-item">
        <img src="<?php echo(get_template_directory_uri()); ?>/img/pe-7s-magic-wand-grey.png" alt="wand">
        <h3>graphic design</h3>
        <p>Whales likeness hath, man kind 
            for them air two won't</p>
      </div> 
    </div> 
  </div>
</section>


<section id="testimonials">
  <div class="container">
    <div class="slick-slider-autoplay">
        <div class="slide">
            <h3>“ Outstanding job and exceeded all expectations. It was a pleasure 
              to work with them on a sizable first project and am looking 
              forward to start the next one asap.”</h3>
              <p>Michael Hopkins</p>
          </div>
          <div class="slide">
              <h3>“ It took me fifteen years to discover I had no talent for writing, but I couldn’t 
                give it up because by that time I was too famous.”</h3>
                <p>Robert Benchley</p>
            </div>
            <div class="slide">
                <h3>“ If you have other things in your life—family, friends, 
                  good productive day work—these can interact with your writing and the sum will be all the richer.”</h3>
                  <p>David Brin</p>
              </div>

    </div>
  </div>
</section>


<section id="clients">
    <div class="container">
      <div class="flex-wrapper flex-space-between">
        <div>
        <img src="<?php echo(get_template_directory_uri()); ?>/img/1.png" alt="">
      </div>
      <div>
        <img src="<?php echo(get_template_directory_uri()); ?>/img/2.png" alt="">
      </div>
      <div>
        <img src="<?php echo(get_template_directory_uri()); ?>/img/3.png" alt="">
      </div>
      <div>
        <img src="<?php echo(get_template_directory_uri()); ?>/img/4.png" alt="">
      </div>
      <div>
        <img src="<?php echo(get_template_directory_uri()); ?>/img/5.png" alt="">
      </div>
      </div>
      
    </div>  
  </section>

  <section id="need-project">
    <div class="container">

    
    <div class="form-wrapper">
      <h2 class="text-center">Need a Project?</h2>
      <p class="text-center">Let us know what you're looking for in an agency. We'll take a look and see <br>
          if this could be the start of something beautiful.</p>
          <form>
            <div class="name-email-wrapper">
              <input type="text" class="form-control" placeholder="Your Name">
              <input type="email" class="form-control" placeholder="Your Email">
  
            </div>
            <input type="text" class="form-control" placeholder="Your Title">
            <textarea class="form-control" placeholder="Your Comment"></textarea>
            <button class="main-button">send message</button>
          </form>
    </div>
  </div>
  </section>

<?php

get_footer();
