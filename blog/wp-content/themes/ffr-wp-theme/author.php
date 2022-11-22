<?php get_header();?>
<main>
    <h1><?php echo get_the_author_meta('nickname');?>の記事一覧</h1>
    <?php query_posts('author=2&showposts=5');?>
    <?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
    <section class="p-3 border-bottom border-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center text-center">
                <?php if(has_post_thumbnail()): ?>
                    <?php $attr = array('class' => "d-block m-auto"); the_post_thumbnail("medium", $attr); ?>
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/image/noimage.webp" alt="" >
                <?php endif; ?>
                </div>
                        <div class="col-md-9">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            投稿者:<?php the_author_posts_link()?>
                            <time><?php the_date()?></time>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;
    endif;
    wp_reset_query();
    ?>
</main>

<?php get_footer();?>