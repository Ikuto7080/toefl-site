
<?php wp_body_open(); ?>

<!-- ヘッダー -->
<header class="header">
	<div class="header-inner">
		<div class="header-fixed">
			<div class="logo-nav">
				<h1 class="header-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo (2).png" alt="">
				</h1>
				<button class="nav-btn SP_on" id="nav-btn" type="button" aria-label="メニュー"><span></span><span></span><span></span></button>
			</div>
			<div class="nav header-nav" id="nav">
				<nav class="nav-wrap">
					<ul class="nav-list">
						<li class="item"><a href="/">ホーム</a></li>
						<li class="item"><a href="/notice/">お知らせ</a></li>
						<li class="item"><a href="/blog/">ブログ</a></li>
						<li class="item"><a href="/price/">コース・料金</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="header-right-wrapper">
			<div class="address-tel">
				<p class="add">平日08:00〜20:00</p>
				<div class="tel">
					<img src="<?php echo get_template_directory_uri(); ?>/img/phone-logo.png" alt="tel-icon">
					<p class="SP_fz12">0123-456-7890</p>
				</div>
			</div>
			<div class="header-link SP_none">
				<div class="info"><a href="#">資料請求</a></div>
				<div class="inquiry"><a href="/contact/">お問い合わせ</a></div>
			</div>
		</div>
	</div>
</header>

