<?php get_header(); ?>

<!-- Intro -->
<div id="about">
    <div class="light-wrapper">
        <div class="container inner">
            <div class="row">

            <?php if ( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
                <div class="col-sm-8">
                  <h1><?php the_title(); ?></h1>
                  <div><?php the_content(); ?></div>
                </div>
                <?php endwhile; ?>
            <?php else : ?>
                Sorry, there is nothing for display!

            <?php endif; ?>
                
            </div>              
        </div>
    <!-- /.container --> 
    </div>
<!-- /.light-wrapper -->
</div>
<!-- /Intro -->

<?php get_footer(); ?>