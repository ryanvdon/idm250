<?php


get_header(); ?>
<!--blog body-->
<div id="Blog-post"> 
  <!-- banner Page
    ==========================================-->
    
  <header class="entry-header" style="background-image: url(<?php echo get_template_directory_uri();?>/dist/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1>Single / Post Detail</h1>
    </div>
  </header>
  <div class="container">
    <div class="row wow fadeInUp"> 
      
    </div>
  </div>
</div>
  
  

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row  wow fdeInUp">
    
    <!--Image block-->
    <div class="col-md-6 col-sm-12"><?php the_post_thumbnail('full', ['class'=>'img-responsive']) ?>
    </div><!--/Image block-->

    <!--content block-->
    <div class="col-md-6 col-sm-12 page-block ">
  
          <header class="entry-header" >
          <span>
                        <i class="fa fa-folder-o"></i>
                        <?php
                          // Get categories associated with this post
                          $categories = get_the_category();
                          
                        ?>
                        <?php foreach($categories as $category): ?>
                        
                          <a href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a>
                        <?php endforeach; ?>
          </span>
        <h2><?php the_title();?></h2>  
        <ul class=" custom-social">
        <li>Share :</li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-rss"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-linkedin-square"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-vimeo-square"></i></a></li>
              </ul>
           
  </header>
          
 
     <?php if (have_posts()): ?>
             
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>
    <ul>
          <li> <strong>Client:</strong> Designscrazed</li>
          <li> <strong>Task:</strong> Design, Prototype</li>
          <li> <strong>Dead line:</strong> 3 Months</li>
        </ul>
        
        <a class="btn btn-info chooser-btn" href="#">Visit website</a>
        
    </div><!--/content block-->
     <div class="clearfix"></div>
     
     <!--Portfolio nav-->
      <nav class="navigation posts-navigation" role="navigation">
          <ul>
            <li class="pull-left">
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i> Previous </a></div>
            </li>
            <li><a href="portfolio.html"><i class="fa fa-th-large"></i> Back to Portfolio</a></li>
            
            <li class="pull-right">
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/">Next  <i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav>  <!--/Portfolio nav-->
 
    </div>
  </div>
</div>
<!--/page body-->
<div class="clearfix"></div>


<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h4>Related Projects</h4>
      
      </div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
            <figure><img src="dist/img/01-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Codetowp branding</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="dist/img/02-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="dist/img/03-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
       
        </ul>
         </div>
    </div>
  </div>
</section>
  
  
<?php get_footer(); ?>