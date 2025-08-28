<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="l-header">
    <nav class="l-header__navigation">
        <ul>
            <!-- サイトのロゴ -->
            <li>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/tl_logo.svg" alt="<?php bloginfo('name'); ?>">
                </a>
            </li>

            <!-- Facebook -->
            <li>
                <a href="https://www.facebook.com/tabilabonews/">
                    <i class="fab fa-facebook-f l-header__navigation__icon"></i>
                </a>
            </li>

            <!-- Twitter -->
            <li>
                <a href="https://twitter.com/intent/follow?screen_name=tabilabo_news">
                    <i class="fab fa-twitter l-header__navigation__icon"></i>
                </a>
            </li>

            <!-- Instagram -->
            <li>
                <a href="https://www.instagram.com/tabilabo/">
                    <i class="fab fa-instagram l-header__navigation__icon"></i>
                </a>
            </li>

            <!-- YouTube -->
            <li>
                <a href="https://www.youtube.com/channel/UCosiTouV3orvNLj_mLwpxiA">
                    <i class="fab fa-youtube l-header__navigation__icon"></i>
                </a>
            </li>

            <!-- その他 -->
            <li>
                <a href="#"><i class="fas fa-ellipsis l-header__navigation__icon"></i></a>
            </li>

            <!-- 検索アイコン -->
            <li>
                <a href="#"><i class="fas fa-magnifying-glass l-header__navigation__icon"></i></a>
            </li>
        </ul>
    </nav>
</header>

