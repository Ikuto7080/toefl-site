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
        <div class="cmn-title2">コース・料金</div>
    </div>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
    <!-- price -->
    <section class="price">
        <div class="inner">
            <h2 class="cmn-title2">料金体系</h2>
            <div class="price-cont">
                <div class="fee">
                    <div class="entry-fee">入会金 39,800円</div>
                    <div class="monthly-fee">月額費用</div>
                </div>
                <p class="detail"> Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。</p>
            </div>
        </div>
    </section>
    <!-- price-table -->
    <section class="price-table">
        <div class="inner">
            <h2 class="cmn-title2">料金表</h2>
        </div>
        <div class="table-cont js-scrollable">
            <ul class="table-list">
                <li class="table-item">
                    <div class="plan">
                        <div class="plan-cont">
                            <p>基礎プラン</p>
                        </div>
                    </div>
                    <div class="plan-container">
                    <div class="price">
                        <span class="main">59,000円~</span><br>
                        <span class="sub">*月額（税抜価格）</span>
                    </div>
                    <div class="service">
                        <p class="curriculum">カリキュラム作成</p>
                        <p class="support">TOEFL学習サポート</p>
                        <p class="mtg base">週一回のビデオMTG</p>
                    </div>
                </div>
                </li>
                <li class="table-item">
                    <div class="plan"><div class="plan-cont"><p>演習プラン</p></div></div>
                    <div class="plan-container">                   <div class="price">
                        <span class="main">75,000円~</span><br>
                        <span class="sub">*月額（税抜価格）</span>
                    </div>
                    <div class="service">
                        <p class="curriculum">カリキュラム作成</p>
                        <p class="support">TOEFL学習サポート</p>
                        <p class="mtg">週一回のビデオMTG</p>
                        <p class="exam ex">月二回の模試（解説 <br> 付き）</p>
                    </div>
                    </div>
                </li>
                <li class="table-item">
                    <div class="plan recomend">
                            <p>おすすめ</p>
                            <p>志望校対策プラン</p>
                    </div>
                    <div class="plan-container">
                    <div class="price">
                        <span class="main">95,000円~</span><br>
                        <span class="sub">*月額（税抜価格）</span>
                    </div>
                    <div class="service">
                        <p class="curriculum">カリキュラム作成</p>
                        <p class="support">TOEFL学習サポート</p>
                        <p class="mtg">週一回のビデオMTG</p>
                        <p class="exam">月二回の模試（解説 <br> 付き）</p>
                        <p class="measures reco">週一の英語面接対策</p>
                    </div>
                    </div>
                </li>
                <li class="table-item">
                    <div class="plan"><div class="plan-cont"><p>フレックスプラン</p></div></div>
                    <div class="plan-container">                   <div class="price">
                        <span class="main">60,000円~</span><br>
                        <span class="sub">*月額（税抜価格）</span>
                    </div>
                    <div class="service">
                        <p class="another flex">＊別途ご相談ください</p>
                    </div>
                    </div>
                </li>
            </ul>
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