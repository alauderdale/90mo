<sidebar class="blog-sidebar right">
    <div class="four-col right">
        <div class="sidebar-widget row">
            <h2>
                Recent Entries
            </h2>
            <?php
            $postloop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '4') );
            ?>
            <?php while ( $postloop->have_posts() ) : $postloop->the_post(); ?>
                <div class="side-link border-bottom">
                    <a href="<?php the_permalink(); ?> ">
                        <?php the_title(); ?>  
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="sidebar-widget border-bottom">
            <h2>
                Categories
            </h2>
                <ul class="side-link">
                    <?php $args = array(
                    'title_li'           => __( '' ),
                    ); ?>
                    <?php wp_list_categories($args); ?> 
                </ul>
        </div>
        <div class="sidebar-widget row">
            <?php 
            if ( dynamic_sidebar('sidebar_ad') ) : 
            ?>
            <?php endif; ?>
        </div>
    </div><!-- end 4 col -->
<sidebar class="blog-sidebar">