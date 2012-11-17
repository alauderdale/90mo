        <div class="clearfix"></div>
        <footer class="inner left">
            <div class="top-footer left row border-bottom dark-border">
                <div class="seven-col left">
                        <?php 
                    if ( dynamic_sidebar('footer_descript') ) : 
                    ?>
                    <?php endif; ?>
                </div>
                <div class="four-col left">
                    <h2 class="uppercase">Who we are</h2>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_nav1' ) );   ?>
                </div>
                <div class="four-col left">
                    <h2 class="uppercase">Contact Us</h2>
                    <p>
                        90monkeys Inc.<br/>
                        1234 Elm st<br/>
                        Boulder CO 80304<br/>
                        303.555.1212<br/>
                    </p>
                    <a class="footer-email left" href="#">email</a>
                    <div class="clearfix"></div>
                    <p class="follow">follow:</p>
                    <ul class="social">
                        <li>
                            <a class="twitter" href="#">
                            </a>
                        </li>
                        <li >
                            <a class="linkedin" href="#">
                            </a>
                        </li>
                        <li >
                            <a class="facebook" href="#">
                            </a>
                        </li>
                    <ul>
                </div>
            </div><!-- end footer top -->
            <div class="footer-bottom left">
                <nav class="footer-bottom-nav">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer_nav2' ) );   ?>
                    <div class="clearfix"></div>
                    <p>
                        &copy; 2012 90Monkeys All rights reserved
                    </p>
                </nav>
            </div>
        </footer>
    </div><!-- end container -->
</body>
<?php wp_footer(); ?>
</html>