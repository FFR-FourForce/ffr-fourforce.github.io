<?php get_header(); ?>
<main>
  <section class="p-md-5">
    <h1 class="text-center">FFRブログ</h1>
    <p class="text-center">FFRメンバーの日々をつづったブログです。</p>
  </section>
  <section class="p-md-5">
    <h2 class="text-center">最近の更新</h2>
    <?php
  //読み込みたい内容の指定
  $newarrival = get_posts(array(
    'posts_per_page' => 6, // 表示件数指定
  ));
  //記事データがある場合の処理
  if($newarrival):
  ?>
    <ul class="newarrival_list" style="list-style: none;">
    <?php
    //記事データを一つづつ表示処理
    foreach($newarrival as $post):
    setup_postdata($post);
    ?>
      <li class="mb-3">
        <?php the_time('Y/m/d'); ?> <?php the_author_posts_link();?> <a href="<?php echo get_permalink(); ?>"> <?php the_title(); ?></a>
      </li>
    <?php endforeach; ?>
    </ul>
  <?php
  //記事データがない場合の処理
  else:
  ?>
    <div class="newarrival_nodata">
    <p>記事がありません</p>
    </div>
  <?php
  endif;
  wp_reset_postdata();
  ?>
  </section>
</main>
<?php get_footer(); ?>