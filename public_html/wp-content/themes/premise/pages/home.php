<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header();
 ?>

<div id="home">
    <div class = "container">
        <div class = "front">
            <div>
                <?php if($image = get_field('logo_image')): ?>
                    <div class="image">
                        <img alt ="logo" src="<?php echo $image['url']; ?>">
                    </div>
                <?php endif; ?>
                <?php if($header = get_field('header')): ?>
                    <h1 class="headline"><?php echo $header; ?></h2>
                <?php endif; ?>
                <?php if($tagline = get_field('tagline')): ?>
                    <p class="text"><?php echo $tagline; ?></p>
                <?php endif; ?>
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
        </div>
    </div>


	<?php cfct_loop(); ?>

</div>

<?php get_footer(); ?>
