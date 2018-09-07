<?php


get_header(); ?>

  
  

<!--page body-->
  
<div class="project" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.6)), url(<?php the_post_thumbnail_url() ?>);">
		
				<!--<picture>
					<source media="(min-width: 650px)" srcset="images/beaker404.jpg">
					<img class="image404img" src="images/beaker404.jpg" alt="Not Found">	
				</picture>-->
			
			<div class="projectimage">
              
            <?php the_post_thumbnail('full', ['class'=>'img-responsive']) ?>
            
            </div>
      
          <div class="projectdesc">
            <h1><?php the_title();?><?php echo get_the_post_thumbnail('full', ['class'=>'img-responsive']) ?></h1>
            <h3>2018</h3>
            <h5><?php
                          // Get categories associated with this post
                          $categories = get_the_category();
                          
                        ?>
                        <?php foreach($categories as $category): ?>
                        
                          <a href="<?php echo get_category_link($category); ?>"><?php echo $category->name ?></a>
                        <?php endforeach; ?></h5><h5> <?php if (have_posts()): ?>
             
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?></h5>
            <div class="next">
              <a href="<?php echo home_url() ?>/portfolio" class="button"><h5>&lt; Back to Portfolio </h5></a>
              
            </div>
            
          </div>
          
</div>


  
  
<?php get_footer(); ?>