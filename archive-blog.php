<!doctype html>
<html>
<head>
	<?php get_header(); ?>
</head>
<body>
<?php get_template_part('includes/header'); ?>
<main>
    <!-- top view -->
    <div class="blog-top">
        <div class="cmn-title2"><?php wp_title(''); ?></div>
    </div>
    <!-- <div class="breadcrumbs"> -->
        <!-- <p>ホーム</p>
        <p>料金体系</p> -->
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    <!-- </div> -->
    
    
    <!-- all blog -->
    <section class="all-blog">
        <div class="inner">
            <h2 class="cmn-title2">新規一覧</h2>
            <?php
  $args = [
	'post_status'=> 'publish',
    'post_type'=> 'blog',
    'order'=>'DESC',
    'posts_per_page'=>10,
  ];
  $the_query = new WP_Query($args); ?>
 
<?php if ($the_query->have_posts()): // 投稿がある場合 ?>
 
    <ul class="blog-cont">
 
    <?php while ($the_query->have_posts()) : $the_query->the_post();
    $category=get_the_category();
    $category=$category[0];
    $category = $category->cat_name;
?>

 
    <!-- ▽ ループ開始 ▽ -->

    <a href="<?php the_permalink(); ?>">
        <li class="blog-item">
            <div class="image"><span><?php echo $category ?></span><?php the_post_thumbnail(array(240,148)); ?></div>
            <div class="txt">
                <div class="date"><?php the_time(get_option('date_format')); ?></div>
                <div class="ttl SP_mb10"><?php the_title(); ?></div>
                <p><?php the_content(); ?></p>
            </div>
        </li>
    </a>
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