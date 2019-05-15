<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="web, web design, web development, developer, freelance, freelancer, front-end, job, Jin Redmond, San Francisco, bay area, bay area, ベイエリア、 WEBデザイン,　ディレクション, Webサイト作成、　ウェブサイト、　作成、　フリーランス、　サンフランシスコ">
        <meta name="description" content="Multifunctional designer/fontend developer based in San Francisco">
        <title>Jin - Web Developer</title>
        <!-- favicon -->
		<link rel="shortcut icon" href="./images/favicon.ico">
        <!-- google fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">         -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
		<!-- font awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- normalize -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/home.css">

    </head>
    <body>

    
        <!-- nav -->
        <nav>
            <?php include('header.php'); ?>
        </nav>

        <!-- title section -->
    	<header class='disp-flex justify-content--center align-items--center flex-dir-col'>
            <div>
                <h1 class='bold'>レスポンシブな<br hidden class='show-tablet'/>ホームページ制作</h1>
                <p>WebDesign</p>
            </div>    
           
                <!-- <p>
                    <a class='btn btn-green' href="mailto:jin@nieblo.com">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        Email
                    </a>
                </p> -->
                <!-- <p>
                    <a href="#myWork">check out my work below <i class="fa fa-chevron-circle-down" aria-hidden="true"></i></a>
                </p> -->
    	</header>

        <main>
            <!-- job detail section -->
            <section id='jobDetail'>
                <div class="padding50"></div>
                <h1 class='text-align-center'>個人事業・中小企業の<br hidden class='show-tablet'>ホームページ作成</h1>
                <div class="disp-flex">
                    <div class="flex-33 text-align-center padding-2">
                        <img src="./images/icon1.png" alt="thumbnail of responsive website">
                        <h2>スマホ対応</h2>
                        <p>スマホやタブレットに対応したレスポンシブなWebデザイン。スマートフォンの小さな画面でも内容が見やすくデザインします。</p>
                    </div>
                    <div class="flex-33 text-align-center padding-2">
                        <img src="./images/icon2.png" alt="thumbnail of ideas">
                        <h2>アイディアを実現</h2>
                        <p>お客様の制作したいホームーページを実現するため、お客様と相談し、ご自分でのメンテナンス方法などを探します。</p>
                    </div>
                    <div class="flex-33 text-align-center padding-2">
                        <img src="./images/icon3.png" alt="thumbnail of code">
                        <h2>フロントエンドの開発</h2>
                        <p>HTML5, CSS, Javascriptを利用したパフォーマンス、メンテナンス性、SEO内部対策を意識したフロントエンドの開発を行います。</p>
                    </div>
                </div>
                <div class="padding50"></div>
            </section>

            <!-- portfolio section -->
            <div class='portfolioSectionContainer'>
                <section class="portfolioSection">
            
                    <div class="padding50"></div>
                    <h1 class='text-align-center wow fadeIn' id="myWork">My Work</h1>
                    <div class="disp-flex">
                        <div class="flex-50 padding-2 wow fadeInLeft">
                            <img class="lazyload" data-src="./images/portfolio_pinit.png" alt="thumbnail of pinit website">
                        </div>
                        <div class="flex-50 padding-2 wow fadeInRight">
                            <h2>PinIt</h2>
                            <p>On this webapp, you are able to save Pins similar when you using Pinterest. Please create your account to use this site.</p>
                            <button class='btn btn-primary visitPinterestButton'>visit website</button>
                        </div>
                    </div>
                    
                    <div class="padding50"></div>
                    <div class="padding50"></div>
    
                    <div class="disp-flex">
                        <div class="flex-50 padding-2 wow fadeInLeft">
                            <img class="lazyload" data-src="./images/portfolio_vrooms.png" alt="thumbnail of vr-webapp">
                        </div>
                        <div class="flex-50 padding-2 wow fadeInRight">
                            <h2>Vrooms</h2>
                            <p>部屋をウェブサイト上でデザインできるサイトです。部屋の大きさを決めて家具を配置してください。完成した部屋を３６０度、ウェブーVRで見ることができます。</p>
                            <button class='btn btn-primary visitVroomButton'>visit website</button>
                        </div>
                    </div>
    
                    <div class="padding50"></div>
                    <div class="padding50"></div>
    
                    <div class="disp-flex">
                        <div class="flex-50 padding-2 wow fadeInLeft">
                            <img class="lazyload" data-src="./images/portfolio_whereAre.png" alt="thumbnail of webapp using instagram api">
                        </div>
                        <div class="flex-50 padding-2 wow fadeInRight">
                            <h2>Instagram-API</h2>
                            <p>インスタグラムで保存された写真を世界地図で表示できるサイトです。ピンをクリックすると写真が表示されます。</p>
                            <button class='btn btn-primary visitInstaAPIButton'>visit website</button>
                        </div>
                    </div>
    
                    <div class="padding50"></div>
                    <div class="padding50"></div>
                </section>
            </div>

            <!-- score section -->
            <section class='scoreSection'>
                <div class="padding50"></div>
                <h1 class='text-align-center'>スコアを知ろう</h1>

                <div class="disp-flex">
                    <div class="flex-50 padding-2 order2">
                        <h2>ウェブサイトのスコアとは?</h2>
                        <!-- <p>It is important to have a fast loading website! Fast load speed amplifies visitor engagement, retention and boosts sales.</p> -->
                        <p>ウェブサイトのページ表示速度は非常に重要なポイントです。訪問者の５０％が２秒以内のページ速度を期待し、読み込みが３秒以上かかると４０％のユーザーが離脱します。</p>
                        <!-- <p>Google announced in 2018. If your website is very slow. You’re in danger of entirely being taken out from mobile search result.</p> -->
                        <p>Googleは２０１８年に、モバイルページの表示速度が遅いとSEOに影響し、モバイルの検索から外される危険性があると発表しました。</p>
                        <p>Googleの公式発表（英文）：<a class='link' href="https://webmasters.googleblog.com/2018/01/using-page-speed-in-mobile-search.html">Google Webmaster</a> <br>
                        表示速度のチェック: <a class='link' href="https://developers.google.com/speed/pagespeed/insights/">Google PageSpeed Insights</a></p>

                    </div>
                    <div class="flex-50 order1">
                        <img src="./images/speed.png" alt="speed test">
                    </div>
                </div>
                
                <div class="padding50"></div>
                <div class="padding50"></div>
            </section>
            
        </main>

		<!-- footer -->
        <footer>
            <?php include('footer.php'); ?>
        </footer>
        
        <!-- jquery -->
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
           
        <!-- lazysizes -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js"></script>

        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
