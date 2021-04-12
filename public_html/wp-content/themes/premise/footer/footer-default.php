<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); } if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>

</main>

<footer class="footer">
    <div class="links">
        <?php if(have_rows('links','options')): ?>
            <nav class="footer-nav">
                <ul>
                    <?php while(have_rows('links','options')): the_row(); ?>
                        <?php if($link = get_sub_field('link')): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>
                </ul>
            </nav>
        <?php endif; ?>
    </div> 
</footer>
</body>
<?php wp_footer(); ?>
</html>
