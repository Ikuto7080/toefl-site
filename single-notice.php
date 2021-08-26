<!doctype html>
<html>
<head>
	<?php get_header(); ?>
</head>
<body>
<?php get_template_part('includes/header'); ?>
<main>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>



    <section class="single-notice">
        <div class="inner">
<?php
$header1 = get_field('header1');
$header2 = get_field('header2');
$title = get_the_title();
$time = get_the_time(get_option('date_format'));
$quote = get_the_content();
?>
            <h2 class="notice-ttl"><?php echo $title; ?></h2>
            <div class="date"><?php echo $time ?></div>
            <h2 class="h1-wrapper">
                <div class="h1-ttl">見出し1</div>
                <p><?php echo $header1; ?></p>
            </h2>
            <h2 class="h2-wrapper">
                <div class="h2-ttl">見出し2</div>
                <p><?php echo $header2; ?></p>
            </h2>
            <?php if(!empty($post->post_content)): ?>
            <div class="quoute">
                <p><span><?php echo $quote; ?></span></p>
            </div>
            <?php endif; ?>

            <div class="image"><img src="<?php echo get_template_directory_uri(); ?>/img/sample4.png" alt=""></div>


            <ul class="list">
                <li class="item">リストリストリストリストリスト</li>
                <li class="item">リストリストリストリストリストリストリストリストリスト</li>
                <li class="item">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
            </ul>
            <div class="txt-link"><a href="#">テキストリンクテキストリンク</a></div>
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
    <?php get_footer(); ?>
</body>
</html>