<?php get_header(); ?>

<!-- Intro -->
<div id="about">
    <div class="light-wrapper">
        <div class="container inner">
        <li><?php the_archive_title(); ?></li>
            <div class="row">

            <?php if ( have_posts() ) : ?>
                <?php while( have_posts() ) : the_post(); ?>
            
                <?php get_template_part( 'partials/content' , 'post' ); ?>

                <?php endwhile; ?>

            <?php else : ?>
                Sorry, there is nothing for display!

            <?php endif; ?>
            </div>  
        </div>
        <div class="pagination">
            <?php 
                the_posts_pagination( array(
                    'mid_size'  => 1,
                    'prev_text' => __('Previous' , 'softuni' ),
                    'next_text' => __( 'Next' , 'softuni' ),
                ) );
            ?>
        </div>
    <!-- /.container --> 
    </div>
<!-- /.light-wrapper -->
</div>
<!-- /Intro -->

<?php get_footer(); ?>