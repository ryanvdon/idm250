<?php 

$searchQuery = $_GET['s'];

get_header(); ?>


<div class="results" style="background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.6)), url(<?php echo get_template_directory_uri();?>/dist/img/katana.jpg);">

<div class="container">

<br>
<br>
<br>
<h1>You searched for... "<?php echo $searchQuery; ?>"</h1>
<br>
<?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <!--article-->
              <div class="result">
              <article class="col-md-12 wow fadeInUp">
                <header class="entry-header">
                  
                  <a href="<?php the_permalink(); ?>">
                  <?php
                  // Check to see if the post has a featured image
                  if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('thumbnail');?>
                  <?php else: ?>
                    <img src="https://placehold.it/400x400" alt="">
                  <?php endif; ?>
                  </a>
                  <div class="resultdesc">
                  
                  <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title()?></h1>
                  </a>
                    <span class="date-article">
                    <i class="fa fa-calendar-o"></i><?php the_date();?></span>
                  </div>
                </header>
              </article>
              </div>
              <!--/article-->
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else : ?>
            <p>
              <?php echo 'Sorry, no posts matched your criteria.'; ?>
            </p>
          <?php endif; ?>

</div>


</div>








<?php get_footer(); ?>
