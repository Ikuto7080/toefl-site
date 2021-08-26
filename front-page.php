<!doctype html>
<html>
<head>
	<?php get_header(); ?>
</head>
<body>
<?php get_template_part('includes/header'); ?>
<main>

<!-- コンテンツ -->
<div class="top">
	<div class="top-content">
		<div class="title">TOEFL対策は <br class="SP_on"> Engress</div>
		<p class="desc">日本人へのTOEFL指導歴豊かな講師陣の <br>
			コーチング型TOEFLスクール</p>
		<div class="cmn-link"><a href="#">資料請求</a></div>
		<div class="inquery"><a href="/contact/">お問い合わせ</a></div>
	</div>
</div>

<section class="worries">
	<div class="inner">
		<h2 class="cmn-title">TOEFL学習で <br class="SP_on"> こんな悩みありませんか？</h2>
		<ul class="worries-cont SP_mt20">
			<li class="item SP_mr20">勉強の習慣が <br> 身についていない</li>
			<li class="item SP_mr20">勉強しているはず <br> なのに点数が伸びない</li>
			<li class="item">正しい勉強方法が <br> わからない</li>
		</ul>
		<div class="emphasis">
			<div class="emphasis-inner">
				<div class="main-cont">Engressは <br> <span>TOEFLに特化したスクール</span>です</div>
				<p class="sub-cont SP_fz12">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で <br> TOEFLの苦手分野を克服します。</p>
			</div>
		</div>
	</div>
</section>
<section class="strength">
	<div class="inner">
		<h2 class="cmn-title">TOEFL対策に特化したEngress3つの強み</h2>
		<ul class="feature-wrapper SP_mt30">
			<li class="item">
				<div class="txt">
					<span class="point">特長 １</span>
					<div class="feature-title">TOEFLに最適化された <br class="SP_none"> 無駄のないカリキュラム</div>
					<div class="feature-desc">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</div>
				</div>
				<div class="img SP_none"><img src="<?php echo get_template_directory_uri(); ?>/img/feature01.png" alt=""></div>
				<div class="img SP_on"><img src="<?php echo get_template_directory_uri(); ?>/img/feature01@2x.png" alt=""></div>
			</li>
			<li class="item -right">
				<div class="txt">
					<span class="point">特長 ２</span>
					<div class="feature-title">日本人指導歴10年以上の<br class="SP_none">経験豊富な講師陣</div>
					<div class="feature-desc">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</div>
				</div>
				<div class="img -left SP_none"><img src="<?php echo get_template_directory_uri(); ?>/img/feature02.png" alt=""></div>
				<div class="img SP_on"><img src="<?php echo get_template_directory_uri(); ?>/img/feature02@2x.png" alt=""></div>
			</li>
			<li class="item">
				<div class="txt">
					<span class="point">特長 ３</span>
					<div class="feature-title">平均3ヶ月でTOEFL iBT20点アップ</div>
					<div class="feature-desc">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</div>
				</div>
				<div class="img SP_none"><img src="<?php echo get_template_directory_uri(); ?>/img/feature03.png" alt=""></div>
				<div class="img SP_on"><img src="<?php echo get_template_directory_uri(); ?>/img/feature03@2x.png" alt=""></div>
			</li>
		</ul>
		<div class="price-wrapper">
			<div class="price-cont">
				<div class="plan">Engressの料金プランはこちら</div>
				<div class="cmn-link -bg-none"><a href="#">料金を見てみる</a></div>
			</div>
		</div>
	</div>
</section>
<section class="success-ex">
	<div class="inner">
		<h2 class="cmn-title">TOEFL成功事例</h2>
<!-- php -->
<?php
  $args = [
    'post_type' => 'student', // カスタム投稿名が「gourmet」の場合
    'posts_per_page' => 3, // 表示する数
  ];
  $the_query = new WP_Query($args); ?>
 
<?php if ($the_query->have_posts()): // 投稿がある場合 ?>
 
    <ul class="list SP_mt30">
 
    <?php while ($the_query->have_posts()) : $the_query->the_post(); 
    $achivement = get_field('achievement');
    $occupation = get_field('occupation');
    $score = get_field('score');
    $img=get_eycatch_with_default();
    ?>
 
    <!-- ▽ ループ開始 ▽ -->
 
    <li class="item">
				<div class="txt"><?php echo $achivement; ?></div>
				<div class="image">
					<img src="<?php echo $img[0]; ?>" alt="">
				</div>
				<div class="achievement">
					<div class="student-info">
						<div class="occupation"><?php echo $occupation; ?></div>
						<div class="name"><?php the_title(); ?></div>
					</div>
					<div class="score"><?php echo $score; ?></div>
				</div>
			</li>
 
    <!-- △ ループ終了 △ -->
 
    <?php endwhile; ?>
 
  </ul>
 
<?php else: // 投稿がない場合?>
 
  <p>まだ投稿がありません。</p>
 
<?php endif; wp_reset_postdata(); ?>
	</div>
</section>
<section class="process">
	<div class="inner">
		<h2 class="cmn-title">ご利用の流れ</h2>
		<div class="ul-align-center">
			<table class="table SP_none">
			<tr>
				<th>01</th>
				<td class="ttl">お問い合わせ</td>
				<td class="detail">まずはフォームまたはお電話からお申し込みください。</td>
			</tr>
			<tr>
				<th>02</th>
				<td class="ttl">ヒアリング</td>
				<td class="detail">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
			</tr>
			<tr class="plan">
				<th>03</th>
				<td class="ttl plan">学習プランのご提供</td>
				<td class="detail">目標達成のために最適な学習プランをご提案致します。</td>
			</tr>
			<tr class="last">
				<th>04</th>
				<td class="ttl">ご入会</td>
				<td class="detail">お申込み完了後、レッスンがスタートします。</td>
			</tr>
			</table>
			<table class="tbl-r02 SP_on">
				<tr>
					<th></th>
					<td>お問い合わせ</td>
					<td>まずはフォームまたはお電話からお申し込みください。</td>
				</tr>
				<tr>
					<th>02</th>
					<td>ヒアリング</td>
					<td>現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
				</tr>
				<tr class="last">
					<th>03</th>
					<td>学習プランのご提供</td>
					<td>目標達成のために最適な学習プランをご提案致します。</td>
				</tr>
				<tr class="last">
					<th>04</th>
					<td>ご入会</td>
					<td>お申込み完了後、レッスンがスタートします。</td>
				</tr>
			</table>

		</div>
	</div>
</section>
<section class="faq">
	<div class="inner">
		<h2 class="cmn-title">よくある質問</h2>
		<div class="faq-cont">
			<ul class="faq-list">
				<li class="faq-item ">
					<a href="javascript:void(0)" class="title js-accordion">
						Engressはサラリーマンでも学習を続けられるでしょうか？
					</a>

					<div class="detail hide">
						<p>Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。</p>
					</div>
				</li>
				<li class="faq-item">
					<a href="javascript:void(0)" class="title js-accordion">教材はオリジナルのものを使用しているのでしょうか？</a>
					<div class="detail hide">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキス</p>
					</div>
				</li>
				<li class="faq-item">
					<a href="javascript:void(0)" class="title js-accordion">講師に日本人はいますか？</a>
					<div class="detail hide">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキス</p>
					</div>
				</li>
				<li class="faq-item">
					<a href="javascript:void(0)" class="title js-accordion">TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？</a>
					<div class="detail hide">
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキス</p>
					</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="blog-notice">
	<div class="inner">
		<div class="blog-wrapper">
			<div class="blog-notice-title">ブログ</div>

            <?php
  $args = [
		'post_status'=> 'publish',
    'post_type'=> 'blog',
    'order'=>'DESC',
    'posts_per_page'=>3,
  ];
  $the_query = new WP_Query($args); ?>
 
<?php if ($the_query->have_posts()): // 投稿がある場合 ?>
 
    <ul class="blog-cont">
 
    <?php while ($the_query->have_posts()) : $the_query->the_post();
	$img=get_eycatch_with_default();
	$title = max_excerpt_length(get_the_title( $post->ID ), 50);//記事タイトルを取得し、文字数を制限（functions.php）
?>
 
    <!-- ▽ ループ開始 ▽ -->
 

    <li class="blog-item">
					<div class="image">
						<span>カテゴリー</span>
						<img src="<?php echo $img[0]; ?>" alt="">
					</div>
					<div class="txt">
						<p><a href="/blog/"><?php echo $title; ?></a></p>
						<div class="date"><?php the_time(get_option('date_format')); ?></div>
					</div>
				</li>
 
    <!-- △ ループ終了 △ -->
 
    <?php endwhile; ?>
 
  </ul>
 
<?php else: // 投稿がない場合?>
 
  <p>まだ投稿がありません。</p>
 
<?php endif; wp_reset_postdata(); ?>

		</div>
		<div class="notice-wrapper">
			<div class="blog-notice-title">お知らせ</div>

<?php
  $args = [
    'post_type' => 'notice', // カスタム投稿名が「gourmet」の場合
    'posts_per_page' => 3, // 表示する数
  ];
  $the_query = new WP_Query($args);
?>
 
<?php if ($the_query->have_posts()): // 投稿がある場合 ?>
 
                <ul class="notice-cont">
<?php while ($the_query->have_posts()) : $the_query->the_post(); 
$title = max_excerpt_length(get_the_title( $post->ID ), 20);//記事タイトルを取得し、文字数を制限（functions.php）
?>
 
    <!-- ▽ ループ開始 ▽ -->
    <li class="notice-item">
        <div class="date"><?php the_time(get_option('date_format')); ?></div>
        <div class="desc"><a href="/notice/"><?php echo $title ?></a></div>
	</li>
    <!-- △ ループ終了 △ -->
 
    <?php endwhile; ?>
 
  </ul>
 
<?php else: // 投稿がない場合?>
 
  <p>まだ投稿がありません。</p>
 
<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

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
