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
    <!-- top view -->
    <div class="blog-top">
        <div class="cmn-title2">お問い合わせ・資料請求</div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>

    <div class="contant">
        <div class="inner">
            <div class="first-msg">
                <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
            </div>
<?php
if (have_posts()) :
    while (have_posts()) :the_post(); ?>
    <div><?php echo the_content(); ?></div>
    <? endwhile; ?>
    <?php else: ?>
    <p>記事がありません</p>
    <?php endif; ?>
</main>
<?php get_template_part('includes/footer'); ?>
<?php get_footer(); ?>
</body>
</html>