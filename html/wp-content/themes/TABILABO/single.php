<?php get_header(); ?> <!-- ヘッダー読み込み -->

<main class="l-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <article <?php post_class(); ?> class="l-single">
            <div class="l-single__eyecatch"><?php the_post_thumbnail('large'); ?></div>
            <div class="l-single__contents">
                <h2 class="article-title"><?php the_title(); ?></h2> <!-- タイトル -->
                <p><?php the_time('Y/m/d'); ?></p>
                <p><?php get_the_excerpt();?></p>
                <!--本文(いじっちゃだめ♡)-->
                <?php the_content(); ?> 
                

            </div>
        </article>

    <?php endwhile; endif; ?>

        <div class="l-home">
            <div class="l-home__container">
                <?php search_posts(array('posts_per_page'=>20));?>
            </div>

        </div>
</main>


<?php get_footer(); ?> <!-- フッター読み込み -->



<!--
 h3->見出し/タイトル
 p->段落
 で良い。下手にh1使っても見づらいだけ
-->