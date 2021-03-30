<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="home">

    <?php include(get_stylesheet_directory() . '/parts/hero.php'); ?>
    <div class = "front">
        <div class = "container">
            <div>
                <h1 class="headline">PushCal</h2>
                <p class="text">Tagline lorem ipsum dolor sit amet</p>
            </div>
            <section class="form-container">
                <div class="container">
                    <div class="row">
                        <div class="form content">
                            <?php cfct_loop(); ?>
                                <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>                                    
                        </div>
                    </div>
                </div>
            </section>
            <div class="buttons">
                <a href="<?php bloginfo('url'); ?>/sign-up/" class="button pink">SUBMIT</a>
            </div>
        </div>
    </div>


	<?php cfct_loop(); ?>

</div>

<?php get_footer(); ?>
