<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>


<div class="container">
    <div class="subpage">
        <div class="row">
            <div class="logo">
                <a href="<?php bloginfo('url'); ?>">
                    <?php if($image = get_field('logo_image')): ?>
                        <div class="image">
                            <img alt ="logo" src="<?php echo $image['url']; ?>">
                         </div>
                     <?php endif; ?>
                </a>
            </div>
        </div>
        <?php cfct_content(); ?>
    </div>
</div>

<?php get_footer(); ?>

