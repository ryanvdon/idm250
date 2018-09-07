<?php
/*
Template Name: 404
*/

get_header(); ?>






<div id="Blog-post">
    <header class="entry-header image404" style="background-image: url(<?php echo get_template_directory_uri(); ?>/dist/img/beaker404.jpg);">
        <div class="content  wow fadeInUp">
            <div class="text404 ">
                <h1>404</h1>
                <h2>Page not found.</h2>
                <h3><a href="<?php echo home_url() ?>">Back to Home</a></h3>
            </div>
    </header>
    <div class="container">
        <div class="row wow fadeInUp">
            <!--blog posts container-->
            <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
                <br>
                <div class="clearfix"></div>
            </div>
            <!--blog posts container-->
            <div class="clearfix"></div>
        </div>
    </div>
</div>
  
  
  
<?php get_footer(); ?>