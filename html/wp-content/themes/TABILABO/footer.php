<footer class="l-footer">
    <!-- ロゴ -->
    <img src="<?php echo get_template_directory_uri(); ?>/img/tl_logo.svg" 
         class="l-footer__logo" 
         alt="<?php bloginfo('name'); ?>">

    <!-- OTHER セクション -->
    <div class="l-footer__container">
        <div class="l-footer__container__title">OTHER</div>
        <div class="l-footer__contents">

            <?php 
            // 仮に静的に書く場合（学習用）
            // 本当は WP のカスタム投稿やウィジェットで出すことが多い
            ?>
            <div class="c-footer-box">
                <div class="c-footer-box__title">MEDIA</div>
                <img src="https://placehold.jp/6a6ac0/ffffff/300x300.png" class="c-footer-box__image" alt="">
            </div>
            <div class="c-footer-box">
                <div class="c-footer-box__title">MEDIA</div>
                <img src="https://placehold.jp/6a6ac0/ffffff/300x300.png" class="c-footer-box__image" alt="">
            </div>
            <div class="c-footer-box">
                <div class="c-footer-box__title">VIDEO</div>
                <img src="https://placehold.jp/6a6ac0/ffffff/300x300.png" class="c-footer-box__image" alt="">
            </div>
            <div class="c-footer-box">
                <div class="c-footer-box__title">VIDEO</div>
                <img src="https://placehold.jp/6a6ac0/ffffff/300x300.png" class="c-footer-box__image" alt="">
            </div> 
            <div class="c-footer-box">
                <div class="c-footer-box__title">VIDEO</div>
                <img src="https://placehold.jp/6a6ac0/ffffff/300x300.png" class="c-footer-box__image" alt="">
            </div> 
            <!-- …省略 … -->
        </div>
    </div>

    <!-- FOLLOW US セクション -->
    <div class="l-footer__container">
        <div class="l-footer__container__title">FOLLOW US</div>
        <div class="l-footer__container__text">
            <?php bloginfo('name'); ?>の最新記事をCHECK!
        </div>
        <a href="https://www.facebook.com/tabilabonews/"><i class="fab fa-facebook-f c-footer-box__icon"></i></a>
        <a href="https://twitter.com/intent/follow?screen_name=tabilabo_news"><i class="fab fa-twitter c-footer-box__icon"></i></a>
        <a href="https://www.instagram.com/tabilabo/"><i class="fab fa-instagram c-footer-box__icon"></i></a>
        <a href="https://www.youtube.com/channel/UCosiTouV3orvNLj_mLwpxiA"><i class="fab fa-youtube c-footer-box__icon"></i></a>
        <a href="http://bit.ly/2iUk72I"><i class="fab fa-line c-footer-box__icon"></i></a>
    </div>

    <!-- JOIN US セクション -->
    <div class="l-footer__container">
        <div class="l-footer__container__title">JOIN US</div>
        <div class="l-footer__container__text">
            1日1通、メールで新着情報をCHECK!
            <a href="#" class="l-footer__container__link">詳しくはコチラ ></a>
        </div>

        <form action="#" method="post">
            <input type="email" placeholder="Mail Address" class="c-submit">
            <input type="submit" value="GO" class="c-button__submit">
        </form>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
