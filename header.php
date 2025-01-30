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

  <title>X Boder Project｜クロスボーダープロジェクト</title>
  <meta name="description" content="エンタメとテクノロジーを両輪に、固定観念に囚われず、新しい発想を形にしていく。どんな空想も、現実にしてみせる。それが私たちXBP Inc.の存在理由です。" />
  <meta name="keywords" content="" />

  <!-- <script>
    window.onload = function () {
      document.getElementById('loading').classList.add('hidden');
    };
  </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <?php wp_body_open(); ?>

  <!-- <?php if ( is_front_page() ) : ?>
    <div id="loading" class="loading-container">
      <div class="cssload-container">
        <div class="cssload-whirlpool"></div>
      </div>
    </div>
  <?php endif; ?> -->

  <div class="wrap-hidden">

    <?php if ( !is_front_page() ) : ?>
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
          <div class="lang-wrap"><?php echo do_shortcode('[bogo]'); ?></div>
          <!-- <?php if (is_front_page() || is_page(['contact', 'policy'])) : ?>
            <div class="lang-wrap"><?php echo do_shortcode('[bogo]'); ?></div>
          <?php endif; ?> -->
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

                  <?php
                    $args = array(
                      'post_type' => 'project',
                      'posts_per_page' => -1,
                      'orderby' => 'menu_order',
                      'order' => 'ASC'
                    );
                    $projects = new WP_Query($args);
                    if ($projects->have_posts()) :
                      while ($projects->have_posts()) : $projects->the_post();
                  ?>

                  <div><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

                  <?php
                      endwhile;
                      wp_reset_postdata();
                  endif;
                  ?>

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
          <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
            <p>
              Yaesu Central Building 9F, 2-3-21 Nihonbashi, Chuo-ku, Tokyo 103-0027, Japan
            </p>
          <?php } else { ?>
            <p>
              〒103-0027<br>
              東京都中央区日本橋2-3-21 八重洲セントラルビル9F
            </p>
          <?php } ?>
          <a class="config con-re" href="https://maps.app.goo.gl/A4sELBRHWV7JE1SV8" target="_blank">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/icon-map.svg" alt="">
            GoogleMAP
          </a>
        </div>
        <div class="banner-area menu">
          <div class="img-box">
            <a href="https://x-border.jp/" target="_blank">
              <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/event-banner_sp_en.jpg" media="(max-width: 768px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/event-banner_pc_en.jpg" alt="">
                </picture>
              <?php } else { ?>
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/event-banner_sp.jpg" media="(max-width: 768px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/event-banner_pc.jpg" alt="">
                </picture>
              <?php } ?>
            </a>
          </div>
        </div><!-- /.banner-area -->
        <div class="xbp-lo_bg img-box">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo02_b.svg" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo02_a.svg" alt="">
          </picture>
        </div>
        <p><small>© XPB Inc. all rights reserved</small></p>
      </div>
    </div>