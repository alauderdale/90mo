
<?php get_header(); ?>


        <div class="hero">
            <h1 class="page-title"><?php the_title(); ?> </h1>
            <img src="<?php bloginfo('template_url'); ?>/images/featured.png"/>
        </div>
        <div class="clearfix"></div>
        <div class="page inner">
            <div class="main">
                <div class="eleven-col left">
                    <div class="highlighted-content row border-bottom">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                <?php 
                                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                    echo '<div class="post-featured-img">';
                                    the_post_thumbnail();
                                    echo '</div>';
                                    } 
                                ?>
                            <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1> 
                            <?php the_content(); ?> 
                            <a href="<?php the_permalink(); ?>">Continue Reading.</a>
                        <!--end the loop-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div><!-- end 11 col -->
                <div class="four-col right">
                    <div class="sidebar-widget row border-bottom">
                        <h2>
                            NEXT UP -AUG 22, 2012
                            Course Title
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dut laoreet dolore.
                        <p>
                        <a href="#">
                            See details
                        </a>
                        <a class="padding-top" href="#">
                            All Events
                        </a>
                    </div>
                    <div class="sidebar-widget">
                        <h2 class="uppercase">
                            Social
                        </h2>
                        <p>
                            <strong><em>From Twitter<a href="#">@90 monkeys</a></em></strong>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                        <p>
                        <p>
                            <strong><em>From Twitter<a href="#">@90 monkeys</a></em></strong>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                        <p>
                    </div>
                </div><!-- end 4 col -->
            </div>
        </div><!-- end inner -->

<?php get_footer(); ?>