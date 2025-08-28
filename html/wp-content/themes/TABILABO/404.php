<?php get_header()?>

<main class="l-main">
    <h1>404 NOTFOUND</h1>
    <p>ページは見つかりませんでした</P>

            <div class="l-home">
            <div class="l-home__container">
                <?php search_posts(array('posts_per_page'=>20));?>
            </div>

        </div>
</main>



<?php get_footer()?>

