<?php get_header(); ?>
<main>

      <div class="bg-line"></div>

      <div class="wrap_kv">
        <video src="<?php echo get_template_directory_uri(); ?>/images/video/kv.mp4" loop muted autoplay playsinline></video>
        <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
          <p>
            Unleash Your Imagination.<br>
            Transcending genre boundaries,<br>
            we give shape to new inspiration.<br>
            A collective of countless projects.
          </p>
        <?php } else { ?>
          <p>
            想像に限界を作らない。<br>
            ジャンルの境界を超え、<br>
            新しいインスピレーションを形にしていく。<br>
            無数のプロジェクトの集合体。
          </p>
        <?php } ?>

      </div><!-- /.wrap_kv -->

      <?php
        $args = array(
            'post_type' => 'post',          // デフォルトの投稿タイプ
            'posts_per_page' => 1,          // 1件のみ取得
            'orderby' => 'date',            // 日付順
            'order' => 'DESC',              // 降順（最新順）
        );
        $latest_post = new WP_Query($args);
        if ($latest_post->have_posts()) :
            while ($latest_post->have_posts()) : $latest_post->the_post();
        ?>

      <div class="wrap_top-news">
        <div class="inner-wide">
          <a href="<?php the_permalink(); ?>">
            <div class="config con-l ttl">News</div>
            <div class="cont flex">
              <p class="time-wrap"><span class="time config con-l"><?php echo get_the_date(); ?></span></p>
              <p class="txt"><?php the_title(); ?></p>
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="10.5" cy="10.5" r="10" stroke="black" />
                <path d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
              </svg>
            </div>
          </a>
        </div>
      </div><!-- /.wrap_top-news -->

      <?php
          endwhile;
          wp_reset_postdata(); // クエリのリセット
      endif;
      ?>


      <section class="wrap_concept buis-trigger">

        <div class="banner-area">
          <div class="img-box fadeIn">
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

        <div id="concept" class="inner">
          <div class="catch-wrap">

            <?php
            if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) {
            ?>
              <h1>
                Expanding<br>
                The frontiers of<br>
                Creativity.
              </h1>
            <?php
            } else {
            ?>
              <h1>
                創造の<br>
                ボーダーラインを<br>
                広げる
              </h1>
            <?php
            }
            ?>

          </div>
          <div class="contents">
            <div class="ttl-wrap">
              <div class="num"><span class="line"></span>01</div>
              <h2>Concept</h2>
            </div>
            <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
              <!-- 英語 -->
              <p class="gsapfadeIn">
                <span>Where Untapped Potential Takes Form.</span><br>
                <span>The initial spark always comes from human imagination.</span><br>
                <span>Dreams inspired by entertainment shape technological visions, </span><br>
                <span>and possibilities opened up by technology bring new expressions to entertainment.</span><br>
                <br>
                <span>What if we could create that cycle within a single company?</span><br>
                <span>With entertainment and technology as our driving forces,</span><br>
                <span>we break free from fixed ideas and give shape to new concepts.We make any fantasy a reality. </span><br>
                <span>That is the raison d'être of XBP Inc.</span>
              </p>
            <?php } else { ?>
              <p class="gsapfadeIn">
                <span>未知の可能性が、形になる。</span><br>
                <span>その最初のきっかけは、いつも人間の想像力。</span><br>
                <span>エンタメが刺激した夢が、テクノロジーのビジョンを作り、</span><br>
                <span>テクノロジーが切り拓いた可能性が、エンタメに新たな表現をもたらしてきた。</span><br>
                <br>
                <span>一つの会社のなかで、そのサイクルを作れたら。</span><br>
                <span>エンタメとテクノロジーを両輪に、固定観念に囚われず、</span><br>
                <span>新しい発想を形にしていく。どんな空想も、現実にしてみせる。</span><br>
                <span>それが私たちXBP Inc.の存在理由です。</span>
              </p>
            <?php } ?>
          </div>
        </div>
        <div class="con-logo img-box">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/logo02_a.svg" media="(max-width: 768px)">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/logo02_b.svg" alt="">
          </picture>
        </div>
      </section><!-- /.wrap_concept -->


      <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
      <section id="business" class="wrap_business lang-en">
      <?php } else { ?>
      <section id="business" class="wrap_business">
      <?php } ?>
        <div class="inner">
          <div class="ttl-wrap">
            <div class="num"><span class="line"></span>02</div>
            <h2>Business</h2>
          </div>
          <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
            <p>
              Pushing the Boundaries of Technology and Entertainment.New possibilities are born beyond the existing boundaries of technology and entertainment.<br>
              By refusing to distinguish between hardware and software, we discover groundbreaking ideas and turn inspiration into reality.<br>
              We realize ideas once confined to the realm of entertainment through technology.<br>
              And we continue to evolve, transforming the spirit born from the uncharted territories pioneered by technology into new forms of entertainment expression.
            </p>
          <?php } else { ?>
            <p>
              テクノロジーの境界と、エンターテイメントの境界。既存の境界を広げた先に生まれる、新しい可能性。<br>
              ハードとソフトの区別を設けないからこそ見つかる革新的なアイディアで、インスピレーションを現実に。<br>
              これまでエンタメの世界だけに存在するものだと思われていたアイディアを、テクノロジーで実現する。<br>
              そして、テクノロジーが切り拓いた未知の世界、そこから生まれる気概を、また新しいエンタメ表現へと転換し、進化し続けます。
            </p>
          <?php } ?>
          <div class="img-box fadeIn"><img src="<?php echo get_template_directory_uri(); ?>/images/common/business_img01.png" alt=""></div>
        </div>
        <div class="circle"></div>
      </section><!-- /.wrap_business -->


      <section id="projects" class="wrap_projects">
        <h2 class="config con-el">XBP Projects</h2>
        <div class="u-pc">
          <div class="top-pjblock flex">

            <div class="left">
              <div class="img-box obj-fit" data-default-image="<?php echo get_template_directory_uri(); ?>/images/common/projects-a_img01.jpg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/projects-a_img01.jpg" alt="">
              </div>
              <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                <div class="txt"
                  data-default-text="We manage and re-produce works (IP) in a wide range of fields, including anime, movies, comics, illustrations, literature, dramas, and music, that are highly creative but have not yet connected with the target audience, and we help them to be sold both domestically and overseas.It will also establish Japanese and Asian IP sales channels overseas and serve as a bridge between Japan and the rest of the world.">
                  <p>
                    We manage and re-produce works (IP) in a wide range of fields, including anime, movies, comics, illustrations, literature, dramas, and music, that are highly creative but have not yet connected with the target audience, and we help them to be sold both domestically and overseas.It will also establish Japanese and Asian IP sales channels overseas and serve as a bridge between Japan and the rest of the world.
                  </p>
                </div>
              <?php } else { ?>
                <div class="txt"
                  data-default-text="高いクリエイティビティーがありながら、ターゲット層につながらず埋もれているアニメ、映画、コミック、イラスト、文芸、ドラマ、音楽など幅広い分野の作品（IP）をマネジメント・再プロデュース。国内外での販売につなげます。">
                  <p>
                    高いクリエイティビティーがありながら、ターゲット層につながらず埋もれているアニメ、映画、コミック、イラスト、文芸、ドラマ、音楽など幅広い分野の作品（IP）をマネジメント・再プロデュース。国内外での販売につなげます。
                  </p>
                </div>
              <?php } ?>
            </div><!-- /.left -->

            <div class="right">

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
                $project_title_en = get_field('project_title_en');
                $top_project_description = get_field('top-project_description');
                $top_project_category = get_field('top-project_category');

                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                if (!$thumbnail_url) {
                    $thumbnail_url = get_template_directory_uri() . '/images/common/noimage.jpg';
                }
              ?>

              <div class="pj-select" data-image="<?php echo esc_url($thumbnail_url); ?>"
                data-text="<?php echo esc_attr($top_project_description); ?>">
                <a href="<?php the_permalink(); ?>" class="flex">
                  <div class="name">
                    <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                      <!-- 英語の時は無し -->
                    <?php } else { ?>
                      <p class="en congig con-l"><span></span><?php echo esc_html($project_title_en); ?></p>
                    <?php } ?>
                    <p class="anona"><?php the_title(); ?></p>
                  </div>
                  <div class="flex">
                    <div class="type config con-me"><?php echo nl2br(esc_html($top_project_category)); ?></div>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                      <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                    </svg>
                  </div>
                </a>
              </div><!-- /.pj-select -->

              <?php
                endwhile;
                wp_reset_postdata();
              endif;
              ?>

              <div class="pj-select comingsoon">
                <a href="#" class="flex">
                  <div class="name">
                    <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                      <!-- 英語の時は無し -->
                      <p class="anona">Powered Exosuit Development</p>
                    <?php } else { ?>
                      <p class="en congig con-l"><span></span>Powered Exosuit Development</p>
                      <p class="anona">パワードスーツ開発</p>
                    <?php } ?>
                    <p class="congig con-l cs-txt">coming soon...</p>
                  </div>
                  <div class="flex">
                    <div class="type config con-me">Technology</div>
                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                      <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                    </svg>
                  </div>
                </a>
              </div>

            </div><!-- /.right -->
          </div><!-- /.top-pjblock -->
        </div>

        <div class="top-pjblock_sp u-sp">

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
            $project_title_en = get_field('project_title_en');
            $top_project_category = get_field('top-project_category');

            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            if (!$thumbnail_url) {
              $thumbnail_url = get_template_directory_uri() . '/images/common/noimage.jpg';
            }
          ?>

          <div class="pj-select">
            <a href="<?php the_permalink(); ?>">
              <div class="img-box obj-fit">
                <img src="<?php echo esc_url($thumbnail_url); ?>" alt="">
              </div>
              <div class="type config con-me"><?php echo nl2br(esc_html($top_project_category)); ?></div>
              <div class="name">
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <!-- 英語の時は無し -->
                <?php } else { ?>
                  <p class="en congig con-l"><span></span><?php echo esc_html($project_title_en); ?></p>
                <?php } ?>
                <p class="anona"><?php the_title(); ?></p>
              </div>
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
              </svg>
            </a>
          </div>

          <?php
            endwhile;
            wp_reset_postdata();
          endif;
          ?>

          <div class="pj-select comingsoon">
            <a href="#">
              <div class="img-box obj-fit">
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/projects-d_img01.jpg" alt="">
              </div>
              <div class="type config con-me">Technology</div>
              <div class="name">
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <!-- 英語の時は無し -->
                  <p class="anona">Powered Exosuit Development</p>
                <?php } else { ?>
                  <p class="en congig con-l"><span></span>Powered Exosuit Development</p>
                  <p class="anona">パワードスーツ開発</p>
                <?php } ?>
                <p class="congig con-l cs-txt">coming soon...</p>
              </div>
              <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
              </svg>
            </a>
          </div>

        </div><!-- /.top-pjblock_sp -->
      </section><!-- /.wrap_projects -->


      <section class="wrap_members">
        <div class="inner">
          <div class="ttl-posi">
            <div class="ttl-wrap">
              <div class="num"><span class="line"></span>03</div>
              <h2>Members</h2>
            </div>
          </div>
          <div class="top-memblock flex topmember-fade_triger">
            <div class="left flex">
              <div class="img-box obj-fit member topmember-anime-fade">
                <?php
                $member_id = 52; 
                  if (has_post_thumbnail($member_id)) {
                      echo get_the_post_thumbnail($member_id, 'full', ['alt' => get_the_title($member_id)]);
                  }
                ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <p>Akira Kawabe</p>
                <?php } else { ?>
                  <p>
                    川邊 晃<br>
                    <span class="config con-l">Akira Kawabe</span>
                  </p>
                <?php } ?>
              </div><!-- /.member -->
              <div class="img-box obj-fit member topmember-anime-fade">
                <?php
                $member_id = 71; 
                  if (has_post_thumbnail($member_id)) {
                      echo get_the_post_thumbnail($member_id, 'full', ['alt' => get_the_title($member_id)]);
                  }
                ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <p>Maiko Saeki</p>
                <?php } else { ?>
                  <p>
                    佐伯 まいこ<br>
                    <span class="config con-l">Maiko Saeki</span>
                  </p>
                <?php } ?>
              </div><!-- /.member -->
              <div class="img-box obj-fit member topmember-anime-fade">
                <?php
                $member_id = 69; 
                  if (has_post_thumbnail($member_id)) {
                      echo get_the_post_thumbnail($member_id, 'full', ['alt' => get_the_title($member_id)]);
                  }
                ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <p>Youhei Mori</p>
                <?php } else { ?>
                  <p>
                    森 陽平<br>
                    <span class="config con-l">Youhei Mori</span>
                  </p>
                <?php } ?>
              </div><!-- /.member -->
              <div class="img-box obj-fit member topmember-anime-fade u-pc">
                <?php
                $member_id = 70; 
                  if (has_post_thumbnail($member_id)) {
                      echo get_the_post_thumbnail($member_id, 'full', ['alt' => get_the_title($member_id)]);
                  }
                ?>
                <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                  <p>Kohsuke Omae</p>
                <?php } else { ?>
                  <p>
                    大前 宏輔<br>
                    <span class="config con-l">Kohsuke Omae</span>
                  </p>
                <?php } ?>
              </div><!-- /.member -->
            </div><!-- /.left -->
            <div class="right">
              <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
                <p>
                  The seeds of possibility lie within human connections.<br>
                  We continue to generate new projects by combining the expertise of our members in their respective fields.<br>
                  A flexible business team that evolves by forming units for each project, driven by the curiosity of each member, which is the lifeblood of XBP.
                </p>
              <?php } else { ?>
                <p>
                  人と人との関わりのなかにこそ、可能性の種がある。<br>
                  メンバーそれぞれの得意とするジャンルの知見を掛け合わせ、<br class="u-pc">
                  新しいプロジェクトを生み出し続けます。<br>
                  プロジェクトごとにユニットを組み発展し続ける可塑的なビジネスチーム。<br>
                  それぞれが持つ好奇心こそが、XBPの活力です。
                </p>
              <?php } ?>
              <div class="btn-wrap">
                <a href="<?php echo home_url('/members'); ?>" class="btn01">
                  view All
                  <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                    <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                  </svg>
                </a>
              </div>
            </div><!-- /.right -->
          </div>
        </div>
        <div class="ashirai img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/common/top-geometry01.svg" alt=""></div>
      </section><!-- /.wrap_members -->


      <section class="wrap_news">
        <div class="inner flex">
          <div class="left">
            <div class="ttl-wrap">
              <div class="num"><span class="line"></span>04</div>
              <h2>News</h2>
            </div>
            <div class="btn-wrap">
              <a href="<?php echo home_url('/news'); ?>" class="btn01">
                view All
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                  <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                </svg>
              </a>
            </div>
          </div><!-- /.left -->
          <div class="right">

          <?php
            $args = array(
              'post_type' => 'post',          // デフォルトの投稿タイプ
              'posts_per_page' => 3,          // 3件取得
              'orderby' => 'date',            // 日付順
              'order' => 'DESC',              // 降順（最新順）
            );
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
              while ($news_query->have_posts()) : $news_query->the_post();
          ?>

            <dl>
              <a href="<?php the_permalink(); ?>">
                <dt class="config con-l"><?php echo get_the_date(); ?></dt>
                <dd><?php the_title(); ?></dd>
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                  <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                </svg>
              </a>
            </dl>

            <?php
                endwhile;
                wp_reset_postdata(); // クエリのリセット
            endif;
            ?>
            
          </div><!-- /.right -->
        </div>
      </section><!-- /.wrap_news -->


      <?php
      $args = array(
          'post_type' => 'press',
          'posts_per_page' => 6,
          'orderby' => 'date',
          'order' => 'DESC',
      );
      $press_query = new WP_Query($args);

      // プレスリリースの投稿が存在する場合のみセクションを表示
      if ($press_query->have_posts()) :
      ?>

      <section class="wrap_press">
        <div class="ttl-posi u-sp">
          <div class="ttl-wrap">
            <div class="num"><span class="line"></span>05</div>
            <h2>Press Release</h2>
          </div>
        </div>
        <div class="top-press_swiper">
          <div class="swiper-wrapper">

            <?php
              while ($press_query->have_posts()) : $press_query->the_post();
              ?>

            <div class="swiper-slide">
              <a href="<?php the_permalink(); ?>">
                <div class="img-box obj-fit">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage.jpg" alt="">
                  <?php endif; ?>
                </div>
                <div class="contents">
                  <div class="cate">
                    <?php
                      $terms = get_the_terms(get_the_ID(), 'press-cat');
                      if ($terms && !is_wp_error($terms)) {
                        $category_names = array();
                        foreach ($terms as $term) {
                          $category_names[] = '#' . $term->name;
                        }
                        echo implode('　', $category_names); // 全角スペースで結合
                      }
                    ?>
                  </div>
                  <p><?php the_title(); ?></p>
                  <div class="time config con-l"><?php echo get_the_date(); ?></div>
                </div>
              </a>
            </div>

            <?php
            endwhile;
            ?>

          </div>
        </div><!-- /.top-press_swiper -->
        <div class="ttl-posi u-pc">
          <div class="ttl-wrap">
            <h2>Press Release</h2>
            <div class="num"><span class="line"></span>05</div>
          </div>
        </div>
        <a href="<?php echo home_url('/press'); ?>" class="btn02">
          view All
          <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
            <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
          </svg>
        </a>
      </section><!-- /.wrap-press -->

      <?php
      wp_reset_postdata();
      endif;
      ?>


      <section class="wrap-company common-contact">
        <div class="inner">
          <div class="ttl-posi">
            <div class="ttl-wrap">
              <div class="num"><span class="line"></span>06</div>
              <h2>Company Info</h2>
            </div>
          </div>
          <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
            <table>
              <tr>
                <th>Company Name</th>
                <td>XBP .Inc</td>
              </tr>
              <tr>
                <th>Representative Director</th>
                <td>Akira Kawabe</td>
              </tr>
              <tr>
                <th>Address</th>
                <td>
                  Yaesu Central Building 9F, 2-3-21 Nihonbashi, Chuo-ku, Tokyo 103-0027, Japan
                </td>
              </tr>
            </table>
          <?php } else { ?>
            <table>
              <tr>
                <th>会社名</th>
                <td>XBP 株式会社</td>
              </tr>
              <tr>
                <th>代表取締役</th>
                <td>川邊 晃</td>
              </tr>
              <tr>
                <th>所在地</th>
                <td>
                  〒103-0027<br>
                  東京都中央区日本橋2-3-21 八重洲セントラルビル9F
                </td>
              </tr>
            </table>
          <?php } ?>
          <a href="<?php echo home_url('/company'); ?>" class="btn01">
            view More
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
              <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
            </svg>
          </a>
          <div class="contact_block flex">
            <div class="mail">
              <a href="<?php echo home_url('/contact'); ?>">
                Contact us
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle class="circle-s" cx="10.5" cy="10.5" r="10" stroke="black" />
                  <path class="arrow-f" d="M14 10.5L8.75 13.5311L8.75 7.46891L14 10.5Z" fill="black" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="ashirai geo01 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/common/common-geometry01.svg" alt=""></div>
        <div class="ashirai geo02 img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/common/common-geometry02.svg" alt=""></div>
      </section><!-- /.wrap-company -->

    </main>
<?php get_footer(); ?>