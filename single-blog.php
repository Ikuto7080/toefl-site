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
    <div class="blog-whole">

        <!-- blog-detail -->
        <section class="blog-detail">
            <div class="inner">
    <?php 
     $cat = get_the_category();
     $cat = $cat[0];
    ?>
                <span class="category"><?php echo $cat->cat_name; ?></span>
                <h2 class="blog-ttl"><?php the_title(); ?></h2>
                <div class="sns-date">
            
                    <div class="sns">
                        <!-- cssが反映されない -->
                        <?php if (function_exists("wp_social_bookmarking_light_output_e")) { wp_social_bookmarking_light_output_e(null, get_permalink(), the_title("", "", false)); } ?>
                    </div>
                    <div class="date">2020-01-01</div>
                </div>
                <div class="image">
                <?php if(has_post_thumbnail()): the_post_thumbnail('post-thumbnails', array('width' => '590px', 'alt' => the_title_attribute('echo=0')));
                else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="<?php the_title(); ?>">
                <?php endif; ?>
                </div>
                <?php 
                $header2 = get_field('header2'); 
                $header3 = get_field('header3'); 
                $quote= get_field('quote'); 
                ?>
                <h2 class="h2-wrapper">
                    <div class="h2-ttl">見出しh2</div>
                    <p><?php echo $header2; ?></p>
                </h2>
                <h3 class="h3-wrapper">
                    <div class="h3-ttl">見出しh3</div>
                    <p><?php echo $header3; ?></p>
                </h3>
    
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

            <div class="rec-article">
                <h2 class="rec-title">おすすめの記事</h2>
                <ul class="rec-list">
                <?php
$current_tag= get_queried_object();
$slug=$current_tag->slug;
$term_id=$current_tag->term_id;

$tag_posts = get_posts(array(
    'post_type' => 'blog', // 投稿タイプ
    'tag_id' => 9, // タグIDを番号で指定する場合
    'tag'    => "pickup", // タグをスラッグで指定する場合
    'post_per_page' => -1,
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if($tag_posts): foreach($tag_posts as $post): setup_postdata($post);
$category=get_the_category();
$category=$category[0];
$category = $category->cat_name;
$title = max_excerpt_length(get_the_title( $post->ID ), 30);
?>
                    <li class="rec-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="image">
                                <span><?php echo $category; ?></span>
                                <div class="image">
                                <?php if(has_post_thumbnail()): the_post_thumbnail(array(100, 73));
                                else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="<?php the_title(); ?>">
                                 <?php endif; ?>
                                </div>
                            </div>
                            <div class="txt">
                                <div class="date"><?php the_time(get_option('date_format')); ?></div>
                                <p><?php echo $title; ?></p>
                            </div>
                        </a>
                    </li>
<?php endforeach; ?>
                </ul>
<?php else: ?>
    <p>まだ投稿がありません。</p>
<?php endif; wp_reset_postdata(); ?>
            </div>
        </section>
        <section class="related-field">
            <div class="inner-article">
                <h2 class="related-title">関連記事</h2>
                <?php
    
    $categ = get_the_category($post->ID);
    $catID = array();
    foreach($categ as $cat){
        array_push($catID, $cat -> cat_ID);
    }
    
    $args = array(
        'post_type' => 'blog',
        'post__not_in' => array($post->ID),  //現在の記事は表示しない
        'category__in' => $catID,  //カテゴリー ID を使って、そのカテゴリー (子カテゴリーではない)に属する記事を表示:
        'posts_per_page' => 3,
        'orderby' => 'rand', //記事をランダムに表示
    );
    
    $the_query = new WP_Query($args);

    if($the_query -> have_posts()) :?>
    
    <ul class="related-blog-list">
    <?php while($the_query -> have_posts()) : $the_query -> the_post();
     $title = max_excerpt_length(get_the_title( $post->ID ), 30);//記事タイトルを取得し、文字数を制限（functions.php）
    ?>
    
    <li class="related-blog-item">
            <a href="<?php the_permalink(); ?>">
                    <div class="image">
                    <?php if(has_post_thumbnail()): the_post_thumbnail(array(100, 73));
                else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/noimg.png" alt="<?php the_title(); ?>">
                <?php endif; ?>
                    </div>
                    <div class="ttl">
                        <p><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></p>
                    </div>
                </a>
            </li>
            </a>
    
    <?php endwhile; ?>
    </ul>
    <?php endif; wp_reset_postdata(); ?>
    
            </div>
            <div class="inner-category">
                <h2 class="related-title">カテゴリー</h2>
                <?php
	// 親カテゴリーのものだけを一覧で取得
	$args = array(
		'parent' => 0,
		'orderby' => 'term_order',
		'order' => 'ASC'
	);
	$categories = get_categories( $args );
?>
<ul class="category-list">
<?php foreach( $categories as $category ) : ?>
    
	<li class="category-item">
		<a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
	</li>
<?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>

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