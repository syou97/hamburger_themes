<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <figure class="p-archive__contents__card">
                <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/menu-pht.jpg' ); ?>
                    <?php endif ; ?>
                    <figcaption class="p-archive__contents__card__caption">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="c-btn--contents__card">詳しく見る</a>
                    </figcaption>
                </figure>
            <?php endwhile;?>
            <?php else: ?>
                <p>投稿はありません</p><!-- 投稿データが取得できない場合の処理 -->
            <?php endif; ?>