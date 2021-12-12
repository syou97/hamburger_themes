<?php get_header( ); ?>
            <article>
            <?php
            $title_bg = "style=''";
            if ( has_post_thumbnail() ) {
                $img_url = wp_get_attachment_url( get_post_thumbnail_id() );
                $title_bg = "style='background-image:url(".$img_url.");'";
            }
            ?>
            <div <?php echo $title_bg; ?> class="p-main__tit"><h2><?php single_post_title(); ?></h2></div>
                <div class="l-contents p-contents">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    <?php get_sidebar( ); ?>
</div>
<?php get_footer( ); ?>