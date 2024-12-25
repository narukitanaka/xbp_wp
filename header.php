<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
  <!-- favicon -->
  <!-- <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/common/fav.png" /> -->
  <!-- <meta name="robots" content="index, follow"> -->
  <meta name="format-detection" content="telephone=no">

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
  <?php if ( is_page('members') ) : ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/remodal-default-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/remodal.css">
  <?php endif; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">


  <!-- adobefont -->
  <link rel="stylesheet" href="https://use.typekit.net/dyn1mky.css">
  <!-- googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">


  <!-- <script>
    window.onload = function () {
      document.getElementById('loading').classList.add('hidden');
    };
  </script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/ScrollTrigger.min.js"></script> -->


  <title>X Boder Project｜クロスボーダープロジェクト</title>
  <meta name="description" content="エンタメとテクノロジーを両輪に、固定観念に囚われず、新しい発想を形にしていく。どんな空想も、現実にしてみせる。それが私たちXBP Inc.の存在理由です。" />
  <meta name="keywords" content="" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <!-- <div id="loading" class="loading-container">
  </div> -->

  <div class="wrap-hidden">

    <?php if (  !is_front_page() ) : ?>
      <div class="transition-container">
      <div class="transition-panel panel1"></div>
      <div class="transition-panel panel2"></div>
      <div class="transition-panel panel3"></div>
      <div class="transition-panel panel4"></div>
      <div class="transition-panel panel5"></div>
    </div>
    <?php endif; ?>

    <header class="header">
      <div class="header-inner flex">
        <div class="logo img-box"><a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt=""></a></div>
        <div class="flex">
          <!-- <div class="lang-wrap"></div> -->
          <div class="hamberger-wrap">
            <div class="hambager-content">
              <button type="button" class="hambager">
                <span class="c-line"></span>
                <span class="c-line"></span>
                <span class="c-line"></span>
              </button>
            </div><!-- /.hambager-content -->
          </div><!-- hamberger-wrap -->
        </div>
      </div><!-- /.header-inner-->
    </header>

    <div class="mega-menu">
      <div class="bg-line"></div>
      <div class="inner">
        <div class="nav-area">
          <nav>
            <ul>
              <li class="ham-manulist"><a href="<?php echo home_url('/'); ?>">Home</a></li>
              <li class="ham-manulist">
                <a class="parent">
                  XBP Projects
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                    <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                  </svg>
                </a>
                <div class="little-nav">
                  <div><a href="project01.html">IP再生</a></div>
                  <div><a href="project02.html">映像作品国際共同制作</a></div>
                  <div><a href="project03.html">新IP&アクティビティ開発</a></div>
                  <div><a href="project04.html">パワードスーツ開発</a></div>
                  <div><a href="project05.html">ファンド</a></div>
                </div>
              </li>
              <li class="ham-manulist"><a href="<?php echo home_url('/members'); ?>">Members</a></li>
              <li class="ham-manulist"><a href="<?php echo home_url('/news'); ?>">News</a></li>
              <li class="ham-manulist"><a href="<?php echo home_url('/press'); ?>">Press Release</a></li>
              <li class="ham-manulist"><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="access">
          <div class="config con-me">Accsess</div>
          <p>
            〒103-0027<br>
            東京都中央区日本橋2-3-21 八重洲セントラルビル9F
          </p>
          <a class="config con-re" href="https://maps.app.goo.gl/A4sELBRHWV7JE1SV8" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-map.svg" alt="">
            GoogleMAP
          </a>
        </div>
        <div class="xbp-lo_bg img-box">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo02_b.svg" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo02_a.svg" alt="">
          </picture>
        </div>
        <p><small>© XPB Inc. all rights reserved</small></p>
      </div>
    </div>