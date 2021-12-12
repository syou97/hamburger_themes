<?php get_header( ); ?>
            <article>
                <div class="p-main__tit p-main__tit__page"><h2><?php the_title(); ?></h2></div>
                <div class="l-contents p-contents">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
<?php get_sidebar( ); ?>
</div>
<?php get_footer( ); ?>