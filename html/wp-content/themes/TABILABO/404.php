<?php get_header()?>

<main class="l-main">
    <h1>404 NOTFOUND</h1>
    <p>ページは見つかりませんでした</P>

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



<?php get_footer()?>

