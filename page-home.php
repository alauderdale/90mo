<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>

<div class="calendar">
    <div class="right">
        <h2 class="uppercase">Upcoming</h2>
        <div class="cal-inner">
        <?php echo do_shortcode("[events_calendar]"); ?>
        </div>
    </div>
</div>
<div class="slider">
            <div class="slider-wrapper theme-default">
                <div id="slider" class="nivoSlider">
                    <?php
                    $sliderloop = new WP_Query( array( 'post_type' => 'slider') );
                    ?>
                    <?php while ( $sliderloop->have_posts() ) : $sliderloop->the_post(); ?>
                    <img src="<?php
                    $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                    echo $imgsrc2[0];
                    ?>" href="<?php
                    echo $imgsrc2[0];
                    ?>" title="#caption-<?php the_ID(); ?>" alt="" />
                    <?php endwhile; ?>
                </div>
                <?php
                $sliderloop2 = new WP_Query( array( 'post_type' => 'slider') );
                ?>
                <?php while ( $sliderloop2->have_posts() ) : $sliderloop2->the_post(); ?>
                    <div id="caption-<?php the_ID(); ?>" class="nivo-html-caption">
                        <div class="inner">
                        <h1 class="uppercase">
                            <?php the_title(); ?> 
                        </h1>
                        <a href="<?php echo get_post_meta($post->ID, 'link_url', true); ?>"><?php echo get_post_meta($post->ID, 'link_text', true); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="home inner">
            <div class="main">
                <div class="eleven-col left">
                    <div class="highlighted-content row border-bottom">
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?> 
                            <h2>
                                <a href="<?php echo get_post_meta($post->ID, 'home_link_url', true); ?>"><?php echo get_post_meta($post->ID, 'home_link_text', true); ?></a>
                            </h2>
                        <!--end the loop-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <h2 class="uppercase">Featured</h2>
                        <?php
                            $featuredloop = new WP_Query( array( 'post_type' => 'post', 'category_name' => 'featured') );
                        ?>
                        <?php while ( $featuredloop->have_posts() ) : $featuredloop->the_post(); ?>
                            <div class="featured-block left">
                                <a href="<?php the_permalink(); ?>">
                                    <img class="featured-image" src="<?php echo get_post_meta($post->ID, 'upload_image', true); ?>"/>
                                </a>
                                <p><strong><?php the_title(); ?></strong></p>
                                <?php the_excerpt(); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div><!-- end 11 col -->
                <div class="four-col right">
                    <div class="sidebar-widget featured-event row border-bottom">
                        <?php
                            echo EM_Events::output(
                            array('orderby' => 'start_date',
                            'limit' => '1',
                            'format' => '

                            <h2>NEXT UP- #M #d, #Y #_EVENTNAME</h2>
                            <p>#_EVENTEXCERPT <a href="#_EVENTURL">See Details</a></p>

                            <a class="padding-top" href="index.php?pagename=events">
                            All events
                            </a>
                            '

                        ) );
                        ?>
                    </div>
                    <div class="sidebar-widget">
                        <h2 class="uppercase">
                            Social
                        </h2>
                        <p>
                            <strong><em>From Twitter<a href="#">@90 monkeys</a></em></strong>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                        </p>
                        <p>
                            <strong><em>From Twitter<a href="#">@90 monkeys</a></em></strong>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.
                        </p>
                    </div>
                </div><!-- end 4 col -->
            </div>
        </div><!-- end inner -->

<?php get_footer(); ?>