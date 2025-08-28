<?php

function search_posts( $args = array() ) {
    $defaults = array(
        'tag'            => '',
        'posts_per_page' => 5,
        'date_query'     => array(),
    );
    $args = wp_parse_args( $args, $defaults );
    $article_Query=new WP_Query( $args );
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
}

function search_posts__category($target_category,$nums){
    $args=array(
        'category_name'=>$target_category,
        'posts_per_page'=>$nums,
        'orderby'=>'rand'
    );
    $article_Query=new WP_Query( $args );
    if($article_Query->have_posts()){
        while($article_Query->have_posts()){
            $article_Query->the_post();
            echo '<article>';
                echo '<a href=';
                echo the_permalink();
                echo ' class="c-article-card--category">';    
                echo '<div class=c-article-card--category__eyecatch>';
                    the_post_thumbnail();
                echo '</div>';
                echo '<div class=c-article-card--category__title>';
                the_title();
                echo '</div>';

                echo '</a>';
            echo '</article>';
        }
    }else{
        echo 'COMING SOON...';
    }
    wp_reset_postdata();
}

function get_worldtopics(){
    $args=array(
        'tag'=>'worldtopic',
        'posts_per_page'=>6
    );
    $article_Query=new WP_Query( $args );
    if($article_Query->have_posts()){
        while($article_Query->have_posts()){
            $article_Query->the_post();
            echo '<article>';
                echo '<a href=';
                echo the_permalink();
                echo ' class=c-article-card--worldtopic>';    
                echo '<div class=c-article-card--worldtopic__text>';
                    echo '<div class=c-article-card--worldtopic__text__title>';
                    the_title();
                    echo '</div>';

                    echo '<div class=c-article-card--worldtopic__text__date>';
                    the_modified_date();
                    echo '</div>';
                echo '</div>';  
                
                echo '<div class=c-article-card--category__eyecatch>';
                    the_post_thumbnail();
                echo '</div>';
                echo '</a>';
            echo '</article>';
        }
    }else{
        echo 'COMING SOON...';
    }
    wp_reset_postdata();
}


function mytheme_enqueue_styles() {
    // テーマのメインCSS
    wp_enqueue_style('mytheme-style', get_stylesheet_directory_uri().'/scss/style.css');

    // FontAwesome（CDN版）
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
        array(),
        '6.5.1'
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        null
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true // フッターで読み込み
    );

    wp_enqueue_script(
        'swiper',
        get_template_directory_uri().'/js/swiper.js',
        array('swiper-js'),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
add_theme_support('post-thumbnails');
//set_post_thumbnail($post_id,$thumbnail_id);




?>