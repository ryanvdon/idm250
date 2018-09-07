<?php
/*
Template Name: General with Sidebar
*/

get_header(); ?>


<!-- banner Page
    ==========================================-->
    <div class="heroimage3">
		<img class="heroimage2" src="<?php echo get_template_directory_uri();?>/dist/img/batman-header.jpg" alt="Dragon cropped hero image">

		<div class="textoverlay"><?php the_title();?></div>

	</div>

<!--blog body-->
<div id="Blog-post">
  <div class="container">
    <div class="row split-sidebar"> 
      <!--blog posts container-->
      <div class="column-main single-post generalsectionleft"> 

      <div class="generalcontainer">
        <?php if (have_posts()): ?>
          <article class="post">   
            <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
          </article>
        <?php else: ?>
          <h2>Sorry, No Post Found</h2>
        <?php endif; ?>

      </div>
      </div>


      
      <!--aside-->
      <aside class="column-sidebar generalsectionright"> 
        <?php get_sidebar();?>
      </aside>
      <!--aside-->
      
      <div class="clearfix"></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
