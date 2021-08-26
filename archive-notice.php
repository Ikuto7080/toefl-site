<!doctype html>
<html>
<head>
	<?php get_header(); ?>
</head>
<body>
<?php get_template_part('includes/header'); ?>
<main>
    <!-- top view -->
    <div class="page-top">
        <div class="cmn-title2"><?php wp_title(''); ?></div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>

    <!-- notice list -->
    <section class="notice-list">
        <div class="inner">
            <div class="cmn-title2">お知らせ一覧</div>
            <div class="ul-align-center">

<?php
  $args = [
    'post_status'=> 'publish',
    'post_type'=> 'notice',
    'order'=>'DESC',
    'posts_per_page'=>10,
  ];
  $the_query = new WP_Query($args);
?>
 
<?php if ($the_query->have_posts()): // 投稿がある場合 ?>
    <ul class="notice-cont">
<?php while ($the_query->have_posts()) : $the_query->the_post(); 
?>
 
    <!-- ▽ ループ開始 ▽ -->
    <li class="notice-item">
        <div class="date"><?php the_time(get_option('date_format')); ?></div>
        <?php the_title('<p><a href="' . esc_url(get_permalink() ) . '">', '</a></p>'); ?>
    </li>
 
    <!-- △ ループ終了 △ -->
 
    <?php endwhile; ?>
 
  </ul>
 
<?php else: // 投稿がない場合?>
 
  <p>まだ投稿がありません。</p>
 
<?php endif; wp_reset_postdata(); ?>

<?php
$args = array(
    'mid_size' => 1,
    'prev_text' => '',
    'next_text' => '',
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
            </div>
        </div>
    </section>
    <!-- inquiry -->
    <section class="inquiry">
        <div class="inner">
            <h2 class="title">まずは無料で資料請求から</h2>
            <div class="cmn-link"><a href="">資料請求</a></div>
            <div class="sub-text"><a href="/contact/">お問い合わせ</a></div>
        </div>
    </section>
    <div class="phone-number">
        <div class="inner">
            <div class="ttl">お電話でのお問い合わせはこちら</div>
            <div class="num">0123-456-7890</div>
            <div class="open-time SP_mt20">平日 08:00~20:00</div>
        </div>
    </div>
    

</main>

    <?php get_template_part('includes/footer'); ?>
    <?php get_footer(); ?>
</body>
</html>
