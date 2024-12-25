<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-projects ip-revit">
    <div class="wrap_p-under_mv">
      <h1 class="config con-l">XBP Projects</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
      <nav>
        <ul class="flex">
          <li><a class="active" href="./">IP再生</a></li>
          <li><a href="project02.html">映像作品 国際共同制作</a></li>
          <li><a href="project03.html">新IP&アクティビティ開発</a></li>
          <li><a href="project04.html">パワードスーツ開発</a></li>
          <li><a href="project05.html">ファンド</a></li>
        </ul>
      </nav>
    </div>
    <section class="p-projects_contents">
      <div class="inner-wide">
        <div class="img-box project_mv obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/common/projects-a_img01.jpg" alt=""></div>
        <div class="inner">
          <div class="ttl">
            <p class="config">01<span></span>IP revitalization</p>
            <h2 class="anona">IP再生</h2>
          </div>
          <div class="postcont">
            <h3>埋もれている作品と才能を、求めている人のところへ</h3>
            <p class="first-txt">
              高いクリエイティビティーがありながら、ターゲット層につながらず埋もれているアニメ、映画、コミック、イラスト、文芸、ドラマ、音楽など幅広い分野の作品(IP）をマネジメント・再プロデュース。国内外での販売につなげます。<br>
              海外における日本・アジアのIP販売チャネルを確立し、海外との橋渡しとしての役割も担います。
            </p>
            <div class="img-wrap">
              <div class="img-box">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/ip-revit_fig_sp.png" media="(max-width: 768px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/common/ip-revit_fig.png" alt="">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /.p-projects_contents -->

    <div class="p-projecrts_press">
      <div class="ttl">
        <h2 class="config con-th">Press Release</h2>
        <a class="btn02" href="archive_press.html">
          View All
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
            <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
          </svg>
        </a>
      </div><!-- /.ttl -->
      <div class="p-projects_swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a href="#">
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/common/press_dammy02.jpg" alt=""></div>
              <div class="contents">
                <div class="cate">#Category</div>
                <p>投稿タイトルが入ります。テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <div class="time config con-l">2025.01.11</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/common/press_dammy02.jpg" alt=""></div>
              <div class="contents">
                <div class="cate">#Category</div>
                <p>投稿タイトルが入ります。テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <div class="time config con-l">2025.01.11</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/common/press_dammy02.jpg" alt=""></div>
              <div class="contents">
                <div class="cate">#Category</div>
                <p>投稿タイトルが入ります。テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <div class="time config con-l">2025.01.11</div>
              </div>
            </a>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="img-box obj-fit"><img src="<?php echo get_template_directory_uri(); ?>/images/common/press_dammy02.jpg" alt=""></div>
              <div class="contents">
                <div class="cate">#Category</div>
                <p>投稿タイトルが入ります。テキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <div class="time config con-l">2025.01.11</div>
              </div>
            </a>
          </div>
        </div>
      </div><!-- /.p-projects_swiper -->
    </div><!-- /.p-projecrts_press -->

  </div><!-- /.p-projects -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>