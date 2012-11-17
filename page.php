<?php get_header(); ?>


        <div class="hero">
            <div class="page-hero">
                <div class="page-bg">
                    <div class="inner">
                        <h1 class="page-title-default"><?php the_title(); ?></h1>
                        <div class="left eleven-col">
                            <h2>
                                <?php echo get_post_meta($post->ID, 'page_headline', true); ?>
                            </h2>
                            <h3>
                                <?php echo get_post_meta($post->ID, 'page_sub_headline', true); ?>

                            </h3>
                        </div>
                        <div class="right four-col">
                            <h4>
                                <?php echo get_post_meta($post->ID, 'page_quote', true); ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="page inner">
            <div class="main">
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
                <!--end the loop-->
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div><!-- end inner -->

<?php get_footer(); ?>