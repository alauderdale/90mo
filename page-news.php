<?php
/*
Template Name: news
 */
?>


<?php get_header(); ?>


        <div class="hero">
            <h1 class="page-title"><?php the_title(); ?> </h1>
            <img src="<?php
                    $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                    echo $imgsrc2[0];
                    ?>" href="<?php
                    echo $imgsrc2[0];
                    ?>"/>
        </div>
        <div class="clearfix"></div>
        <div class="posts inner">
            <div class="post-index">
                <div class="eleven-col left">
                    <?php
                    $postloop = new WP_Query( array( 'post_type' => 'post') );
                    ?>
                    <?php while ( $postloop->have_posts() ) : $postloop->the_post(); ?>
                        <div class="post border-bottom">
                            <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
                            <div class="post-meta"><p>by: <?php the_author(); ?> posted on: <?php the_date(); ?></p></div>
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            echo '<div class="post-featured-img">';
                            the_post_thumbnail();
                            echo '</div>';
                            } 
                            ?> 
                            <?php the_excerpt(); ?> 
                            <a href="<?php the_permalink(); ?>">Continue Reading.</a>
                        </div>
                    <!--end the loop-->
                    <?php endwhile; ?>
                </div><!-- end 11 col -->
            </div>
            <?php get_sidebar(); ?>
        </div><!-- end inner -->

<?php get_footer(); ?>