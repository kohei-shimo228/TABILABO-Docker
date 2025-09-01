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
                <?php
                    $article_Query=new WP_Query(array('posts_per_page'=>20));
                    if($article_Query->have_posts()){
                        while($article_Query->have_posts()){
                            $article_Query->the_post();
                            echo '<article>';
                                echo '<a href=';
                                echo the_permalink();
                                echo ' class="c-article-card">';    
                                echo '<div class=c-article-card__eyecatch>';
                                    get_template_part('template-parts/category','label');
                                    the_post_thumbnail();
                                echo '</div>';
                                echo '<div class=c-article-card__title>';
                                the_title();
                                echo '</div>';
                                echo '<div class=c-article-card__text>';
                                the_excerpt();
                                echo'</div>';
                                echo '</a>';
                            echo '</article>';
                        }
                    }else{
                        echo 'COMING SOON...';
                    }
                    wp_reset_postdata();
                ?>                
            </div>

        </div>
</main>


<?php get_footer(); ?> <!-- フッター読み込み -->



<!--
 h3->見出し/タイトル
 p->段落
 で良い。下手にh1使っても見づらいだけ
-->