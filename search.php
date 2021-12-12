<?php get_header( ); ?>
            <div class="p-main__tit p-main__tit__archive"><h2>Search:<span><?php echo get_search_query(); ?></span></h2></div>
            <?php if (have_posts()): ?>
            <article class="p-archive__contents">
            <aside class="l-search-result">
                <?php
                if (isset($_GET['s']) && empty($_GET['s'])) {
                    echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
                } else {
                    echo '“'.$_GET['s'] .'”の検索結果：'.$wp_query->found_posts .'件'; // 検索キーワードと該当件数を表示
                }
                ?>
                <?php else: ?>
                検索されたキーワードにマッチする記事はありませんでした
                <?php endif; ?>
            </aside>

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