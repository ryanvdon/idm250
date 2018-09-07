<?php
/*
Template Name: Search Results
*/
get_header(); ?>
 <!--Hero Image-->
	<div class="heroimage3">
		<img class="heroimage2" src="<?php echo get_template_directory_uri();?>/dist/img/batman-header.jpg" alt="Dragon cropped hero image">

		<div class="textoverlay"><?php the_title();?></div>

	</div>




    <div class="results">
				<!--<picture>
					<source media="(min-width: 650px)" srcset="images/beaker404.jpg">
					<img class="image404img" src="images/beaker404.jpg" alt="Not Found">	
				</picture>-->
			<h1>3 Search results found for "Dragon"</h1>
			<div class="result">
              <a href="project.html" class="thumbnail"><img src="images/12.jpg" width="150"></a>
              <a href="project.html" class="thumbnail"><div class="resultdesc">
                <h1>Abyssal Leviathan</h1>
                <h3>2015</h3>
                <h5>This one is a personal TCG-style illustration piece I finished about a year ago in February 2015...</h5>
                </div></a>
            </div>
      
            <div class="result">
              <a href="project.html" class="thumbnail"><img src="images/8.jpg" width="150"></a>
              <a href="project.html" class="thumbnail"><div class="resultdesc">
                <h1>Dragon Portrait</h1>
                <h3>2017</h3>
                <h5>A close-up dragon portrait I made for an art test...</h5>
                </div></a>
            </div>
      
            <div class="result">
              <a href="project.html" class="thumbnail"><img src="images/7.jpg" width="150"></a>
              <a href="project.html" class="thumbnail"><div class="resultdesc">
                <h1>The Burning Cold</h1>
                <h3>2016</h3>
                <h5>Personal artwork from 2016, featured in the Not So Tiny Dragons artbook...</h5>
                </div></a>
            </div>
      
          
          
	</div>
	



	
	<div class="generalsection">
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
<?php get_footer(); ?>
