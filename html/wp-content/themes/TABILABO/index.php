<?php get_header(); ?>
<body class="l-body">
    <div class="p-hero">
        <div class="p-hero__main">
                <div class="c-article-card--hero">
                <a href="<?php the_permalink();?>">
                    <div class="c-article-card--hero__eyecatch"><?php the_post_thumbnail();?></div>
                    <div class="c-article-card--hero__title"><?php the_title();?></div>
                </a>
                </div>
        </div>
        <div class="p-hero__sub">
            <div class="p-hero__sub__top">
                <div class="c-article-card--hero">
                    <a href="<?php the_permalink();?>">
                        <div class="c-article-card--hero__eyecatch"><?php the_post_thumbnail();?></div>
                        <div class="c-article-card--hero__title"><?php the_title();?></div>
                    </a>
                </div>
            </div>
            <div class="p-hero__sub__bottom">
                <div class="c-article-card--hero">
                    <a href="<?php the_permalink();?>">
                        <div class="c-article-card--hero__eyecatch"><?php the_post_thumbnail();?></div>
                        <div class="c-article-card--hero__title"><?php the_title();?></div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <main class="l-main">
        <div class="l-home">
            <div class="l-home__title">NEW ARRIVALS</div>
            <div class="l-home__container">
                <?php search_posts(array('posts_per_page'=>14));?>
                
            </div>
            <button class="c-button__ShowMore" type="button">VIEW MORE</button>
        </div>

        <div class="l-category">
            <div class="l-category__header">CATEGORY</div>
            <div class="l-category__container">
                <div class="l-category__container__title">LOVE</div>
                <div class="l-category__container__contents">
                    <?php search_posts__category('love',3);?>                
                </div>
                <button class="c-button__ShowMore" type="button">VIEW MORE</button>
            </div>

            <div class="l-category__container">
                <div class="l-category__container__title">ITEM</div>
                <div class="l-category__container__contents">
                    <?php search_posts__category('item',3);?>                
                </div>                
                <button class="c-button__ShowMore" type="button">VIEW MORE</button>
            </div>            

            <div class="l-category__container">
                <div class="l-category__container__title">WELL-BEING</div>
                <div class="l-category__container__contents">
                    <?php search_posts__category('well-being',3);?>                
                </div>            
                <button class="c-button__ShowMore" type="button">VIEW MORE</button>
            </div>   

        </div>

        <div class="l-feature">
            <div class="l-feature__title">特集</div>
            <div class="l-feature__container">
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
                <div class="l-feature__contents">*特集の記事</div>
            </div>
            <button class="c-button__ShowMore" type="button">特集一覧</button>
        </div>
       
        <div class="l-worldtopics">
            <img src="<?php echo get_template_directory_uri(); ?>/img/worldtopics_title.svg" class="l-worldtopics__title">
            <div class="l-worldtopics__container">
                <?php get_worldtopics();?>
            </div>
            <button class="c-button__ShowMore" type="button">VIEW MORE</button>
        </div>
        <div class="l-video">
            <div class="l-video__title">VIDEO(作業中に聞いていた曲)</div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=K4xLi8IF1FM" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/K4xLi8IF1FM/maxresdefault.jpg"></video>
                            <div class="c-videos__title">可愛くてごめん feat. ちゅーたん（CV：早見沙織）／HoneyWorks</div>
                        </a>   
                    </div>

                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=LLjfal8jCYI" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/LLjfal8jCYI/maxresdefault.jpg"></video>
                            <div class="c-videos__title">オーバーライド - 重音テトSV[吉田夜世]</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=hwZNL7QVJjE" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/FhwZNL7QVJjE/maxresdefault.jpg"></video>
                            <div class="c-videos__title">Ben E. King - Stand By Me (Audio)</div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="https://youtube.com/watch?v=F9sWMsUNDw0" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/F9sWMsUNDw0/maxresdefault.jpg"></video>
                            <div class="c-videos__title">ツユ - どんな結末がお望みだい？ MV</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=-tKVN2mAKRI" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/-tKVN2mAKRI/maxresdefault.jpg"></video>
                            <div class="c-videos__title">DAOKO × 米津玄師『打上花火』MUSIC VIDEO</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=TA-cfz9P3gY" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/TA-cfz9P3gY/maxresdefault.jpg"></video>
                            <div class="c-videos__title">『 手嶌葵 / さよならの夏 ～コクリコ坂から～ 』 High-quality sound</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=PEnJbjBuxnw" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/PEnJbjBuxnw/maxresdefault.jpg"></video>
                            <div class="c-videos__title">AJR - World's Smallest Violin (Official Video)</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=ALZHF5UqnU4" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/ALZHF5UqnU4/maxresdefault.jpg"></video>
                            <div class="c-videos__title">Marshmello - Alone (Official Music Video)</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=ip2U3w6b9rU" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/ip2U3w6b9rU/maxresdefault.jpg"></video>
                            <div class="c-videos__title">上を向いて歩こう 坂本 九 歌詞付き</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://youtube.com/watch?v=F9sWMsUNDw0" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/F9sWMsUNDw0/maxresdefault.jpg"></video>
                            <div class="c-videos__title">ツユ - どんな結末がお望みだい？ MV</div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="https://www.youtube.com/watch?v=e3-5YC_oHjE" class="c-videos">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/play-button.svg" class="c-button__play">
                            <video class="c-videos__media" poster="https://img.youtube.com/vi/e3-5YC_oHjE/maxresdefault.jpg"></video>
                            <div class="c-videos__title">U2 - I Still Haven't Found What I'm Looking For</div>
                        </a>
                    </div>

                </div>
                <!-- 必要に応じてナビゲーションやページネーションを追加 -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>




        

    </main>
</body>
<?php get_footer(); ?>
