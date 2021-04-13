<div id="sub">
    <div class="container">
        <div class="subpage">  
            <div class="row">
                <div class="logo">
                    <a href="<?php bloginfo('url'); ?>/pages/home/">
                        <?php if($image = get_field('logo_image')): ?>
                            <div class="image">
                                <img alt ="logo" src="<?php echo $image['url']; ?>">
                             </div>
                         <?php endif; ?>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="content col-md-8 offset-md-2">
                    <?php the_sub_field('wysiwygg');  ?>
                </div>
            </div>
        </div>
    </div>
</div>

