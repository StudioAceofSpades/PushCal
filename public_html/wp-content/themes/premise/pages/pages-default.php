<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<?php include(locate_template('parts/hero.php')); ?>

<div class="subpage">
    <div class="container">
        <?php cfct_content(); ?>
    </div>
</div>

<?php get_footer(); ?>

