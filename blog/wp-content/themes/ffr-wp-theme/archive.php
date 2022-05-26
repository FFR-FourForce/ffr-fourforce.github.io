<!-- 共通ヘッダー読み込み -->
<?php get_header(); ?>
<main>
    <!-- アクセスされたページ種別でタイトルの文字を調整 -->
    <?php
        $page_title = "";
        if(is_category()){
            $page_title = "カテゴリー「" . single_cat_title("", false) . "」";
        }else if(is_tag()){
            $page_title = "タグ「" . single_tag_title("", false) . "」";
        }else if(is_date()){
            $page_title = get_the_date("Y年n月");
        }
        $page_title .= "の記事一覧";
    ?>
    <!-- タイトルを出力 -->
    <section>
        <h1><?php echo $page_title; ?></h1>
        <!-- WordPressループで記事一覧を表示 -->
        <?php if(have_posts()): ?>
            <?php while(have_posts()): ?>
                <section class="p-3 border-bottom border-2">
                    <?php the_post(); ?>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-3 d-flex align-items-center text-center">
                                <?php $attr = array('class' => "d-block m-auto"); the_post_thumbnail("medium", $attr); ?></div>
                            <div class="col-md-9">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                投稿者:<?php the_author_posts_link() ?>
                                <time><?php the_date()?></time>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- ページネーションを表示する関数を呼び出し -->
        <div class="text-center">
            <?php the_pagenation(); ?>
        </div>
    </section>
</main>
<!-- 共通フッター読み込み -->
<?php get_footer();