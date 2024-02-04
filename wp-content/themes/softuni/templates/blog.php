<?php
/**
 * Template Name: Blog Template
 */
?>

<?php 
$blog_query_args = array(
    'post-type'     => 'post',
    'post-status'   => 'publish',
    'post_per_page' => 5,
    'paged'         => get_query_var( 'paged' ),
);

$blog_query = new WP_Query( $blog_query_args );
?>

<?php get_header(); ?>
    
<div>
    <div class="row">
        <?php if ( $blog_query->have_posts() ) : ?>

            <?php while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

                <?php get_template_part( 'partials/content' , 'post' ); ?>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="pagination">
    <?php
                $GLOBALS['wp_query'] = $blog_query;
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Previous', 'softuni' ),
                'next_text' => __( 'Next', 'softuni' ),
            ) );
            ?>	

    </div>
            </div>   
<?php wp_reset_postdata(); ?>
        
<?php get_footer(); ?>