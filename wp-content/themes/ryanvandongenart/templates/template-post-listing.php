<?php
/*
 * Template Name: Post Listing
 *
 * This template will display all of my portfolio pieces
 *
 * @link https://codex.wordpress.org/Class_Reference/WP_Query
*/
$arg = [
  'post_type'     => 'post',
  'post_status'   => 'publish',
  'posts_per_page'=> 100
];
$posts = new WP_Query($arg);

get_header(); ?>


  <!-- banner Page
    ==========================================-->
  <!--Hero Image-->
	<div class="heroimage3">
		<img class="heroimage2" src="<?php echo get_template_directory_uri();?>/dist/img/whitedragon.png" alt="Dragon cropped hero image">

		<div class="textoverlay"><?php the_title();?></div>

	</div>
  
  <!--blog body-->
  <div class="generalsection">
        <!--Image Thumbnails-->
			<ul class="flexbox">
				
        <?php if ($posts->have_posts()) : ?>
            <?php while ($posts->have_posts()) : $posts->the_post(); ?>
              <!--article-->
              
              <li class="flex-item">
                <a href="<?php the_permalink(); ?>" class="thumbnail">
                      <?php //Check to see if the post has a featured image
                      if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('thumbnail');?>
                      <?php else: ?>
                        <img src="https://placehold.it/1280x720" class="thumbnail" alt="">
                      <?php endif; ?>
                    </a>
                
              </li>
              <!--/article-->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
          <?php endif; ?>
        </ul>

	</div>


  
  <?php get_footer(); ?>