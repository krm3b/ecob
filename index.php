<?php get_header(); ?>
<main>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    else :
        echo '<p>記事がありません。</p>';
    endif;
    ?>
</main>
<?php get_footer(); ?>