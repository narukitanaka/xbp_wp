<?php get_header(); ?>
<main>

  <div class="bg-line"></div>

  <div class="p-under p-company">

    <div class="wrap_p-under_mv">
      <h1 class="config con-l">Company</h1>
      <div class="img-box under-kv_geometory"><img src="<?php echo get_template_directory_uri(); ?>/images/common/p-under_geomero.svg" alt=""></div>
    </div>


    <div class="inner">

      <div class="block philosophy">
        <p class="num config">01</p>
        <h2><span class="config">philosophy</span><span class="line"></span>経営理念</h2>
        <h3>
          テクノロジーとエンタメの力で、<br>
          あらゆる既存の境界を拡張し、新たな地平を切り開く。
        </h3>
        <div class="content">
          <div class="img-box fig">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/p-company_img01_sp.png" media="(max-width: 768px)">
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/p-company_img01.png" alt="">
            </picture>
          </div>
          <div class="img-box xbp-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo02_a.svg" alt=""></div>
          <p class="txt">
            想像のボーダーラインを広げるのは純粋な好奇心。<br>
            それぞれが信じる可能性に投資していくことが新しい発見につながると私たちは信じています。<br>
            <br>
            ここは”思考と試行”の実験場。XBPはインスピレーションを形にできる、可能性にあふれた場所になります。
          </p>
        </div>
      </div><!-- /.block -->

      <div class="block company-info">
        <p class="num config"><span></span>02</p>
        <h2><span class="config">Company Info</span><span class="line"></span>会社概要</h2>
        <table>
          <tr>
            <th>会社名</th>
            <td>株式会社 XBP .Inc</td>
          </tr>
          <tr>
            <th>所在地</th>
            <td>
              〒103-0027<br>
              東京都中央区日本橋2-3-21 八重洲セントラルビル9F
            </td>
          </tr>
          <tr>
            <th>代表取締役</th>
            <td>川邊 晃</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>
              IPエンターテインメントビジネス協業&代行/<br>
              IPコンテンツ再生マネジメント/<br>
              新IP＆アクティビティ開発/<br>
              パワードスーツ開発/ファンド事業
            </td>
          </tr>
        </table>
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8163168090705!2d139.76916257592865!3d35.68152457258716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfd9f0e46db%3A0xd07a474a3a985d9b!2z44CSMTAzLTAwMjcg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL77yS5LiB55uu77yT4oiS77yS77yRIOWFq-mHjea0suOCu-ODs-ODiOODqeODq-ODk-ODqw!5e0!3m2!1sja!2sjp!4v1734770146870!5m2!1sja!2sjp"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div><!-- /.block -->

    </div><!-- /.inner -->

  </div><!-- /.p-company -->

  <?php include(get_theme_file_path('/include/common-cta.php')); ?>

</main>
<?php get_footer(); ?>