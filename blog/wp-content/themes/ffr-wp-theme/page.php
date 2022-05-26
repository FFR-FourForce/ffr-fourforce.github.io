<?php
/*
Template Name: メイン
*/
?>
<?php get_header(); ?>
<main>
  <section class="border-bottom border-3 mb-3 w-lg-50" style="border-color: black;">
    <h1 class="border-bottom border-3"><?php the_title()?></h1>
    <p class="text-right mb-0">
      投稿者:<?php
      $author = get_userdata($post->post_author);
      echo $author->display_name;?>
    </p>
    <p><?php the_content()?></p>
  </section>
</main>
<?php get_footer(); ?>