
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
        <div class="cmn-title2">ブログ</div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>

    <!-- all blog -->
    <section class="all-blog">
        <div class="inner">
            <h2 class="cmn-title2"><?php wp_title(''); ?>の一覧</h2>
            <ul class="blog-cont">
            <?php
$current_category= get_queried_object();
$slug=$current_category->slug;
$term_id=$current_category->term_id;

$cat_posts = get_posts(array(
    'post_type' => 'blog', // 投稿タイプ
    'category' => $term_id, // カテゴリIDを番号で指定する場合
    'category_name' => $slug, // カテゴリをスラッグで指定する場合
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); 
$category=get_the_category();
$category=$category[0];
$category = $category->cat_name;
?>
 

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
 
    <?php endforeach; ?>
 
  </ul>
 
<?php else: // 投稿がない場合?>
 
  <p>まだ投稿がありません。</p>
 
<?php endif; wp_reset_postdata(); ?>
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


