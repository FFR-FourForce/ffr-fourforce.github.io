<?php

// アイキャッチを有効化する
add_theme_support("post-thumbnails");

// タイトルの動的出力を有効化する
add_theme_support("title-tag");

// ページネーションのHTMLを文字列として取得する
function get_the_pagenation(){
  global $wp_query;
  $big = 999999999;
  $args = array(
      "base" => str_replace($big, "%#%", esc_url(get_pagenum_link($big))),
      "total" => $wp_query->max_num_pages,
      "current" => max(1, get_query_var("paged")),
      "mid_size" => 1
  );

  return paginate_links($args);
}

// ページネーションのHTMLを出力する
function the_pagenation(){
  echo get_the_pagenation();
}