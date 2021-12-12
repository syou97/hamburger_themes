<?php get_header( ); ?>
            <div class="l-contents c-wrap__404">
            <h2>404 Not Found（ページが見つかりませんでした）</h2>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/error.png' ); ?>" alt="ページは見つかりませんでした。" class="c-wrap__404__img">
            <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
            <p class="error_url">URL ：<span><?php echo esc_url(get_pagenum_link()); ?></span></p>
            <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ</a></p>
            </div>
        </div>
<?php get_sidebar( ); ?>
</div>
<?php get_footer( ); ?>