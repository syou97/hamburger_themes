<?php get_header( ); ?>
            <div class="p-main__tit p-main__tit__archive"><h2>Menu:<span><?php single_cat_title(); ?></span></h2></div>
            <article class="p-archive__contents">
                <section class="p-archive__contents__lead">
                    <h3>小見出しが入ります</h3>
                    <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </section>
                <?php get_template_part('post-card'); ?>               
                <div class="pager">
                    <?php wp_pagenavi(); ?> 
                </div>
            </article>
        </div>
<?php get_sidebar( ); ?>
</div>
<?php get_footer( ); ?>