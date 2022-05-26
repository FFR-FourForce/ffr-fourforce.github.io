<?php get_header(); ?>
<main>
   <section class="border-bottom border-3 mb-3 w-lg-50" style="border-color: black;">
      <!-- タイトルなど基本情報の読み込み -->
      <?php the_post_thumbnail()?>
      <!--タイトル-->
      <h1 class="border-bottom border-3" style="border-color: black;"><?php the_title();?></h1>
      </p>
      <!--投稿者-->
      <p class="text-right mb-0">
         投稿者:
         <?php
   $author = get_userdata($post->post_author);
   echo $author->display_name;
         ?>
      </p>
      <!--投稿日-->
      <time class="d-block text-right"><?php echo get_the_date(); ?></time>
      <p>
         <?php the_post();
         the_content();?>
      </p>
   </section>
         <!--カテゴリ読み込み-->
      カテゴリ:<?php the_category(","); ?>
      <!--タグ読み込み-->
      <p><?php the_tags(); ?></p>
   <?php if( get_previous_post()|| get_next_post()): ?>
      <div class="d-flex flex-row mb-3">
         <div class="w-50 text-center">
            <?php
            //前の記事へ
            if(get_previous_post());
               previous_post_link('前の記事:%link', '<span>%title</span>', TRUE, '');
            ?>
         </div>
         <div class="w-50 text-center">
            <?php
            //次の記事へ
            if(get_next_post());
               next_post_link('次の記事:%link', '<span>%title</span>', TRUE, '');
            ?>
         </div>
      </div>
   <?php endif ?>
</main>

<?php get_footer(); ?>