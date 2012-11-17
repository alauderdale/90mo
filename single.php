<?php get_header(); ?>


        <div class="hero">
            <h1 class="page-title">News</h1>
            <div class="single-bg">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="posts inner">
            <div class="post-index">
                <div class="eleven-col left">
                    <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <div class="post-top border-bottom">
                                <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
                                <div class="post-meta"><p>by: <?php the_author(); ?> posted on: <?php the_date(); ?></p></div>
                            </div>
                            <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            echo '<div class="post-featured-img">';
                            the_post_thumbnail();
                            echo '</div>';
                            } 
                            ?> 
                            <?php the_content(); ?> 
                        </div>
                    <!--end the loop-->
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div><!-- end 11 col -->
            </div>
            <?php get_sidebar(); ?>
        </div><!-- end inner -->

<?php get_footer(); ?>