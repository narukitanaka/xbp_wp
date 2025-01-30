<footer class="footer">
      <div class="logo img-box"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt=""></div>
      <nav>
        <ul class="flex">
          <!-- <li><a href="<?php echo home_url('/#concept'); ?>">Concept</a></li>
          <li><a href="<?php echo home_url('/#business'); ?>">Business</a></li> -->
          <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
          <li><a href="<?php echo home_url('/#project'); ?>">Projects</a></li>
          <li><a href="<?php echo home_url('/members'); ?>">Members</a></li>
          <li><a href="<?php echo home_url('/news'); ?>">News</a></li>
          <li><a href="<?php echo home_url('/press'); ?>">Pless Rerease</a></li>
          <li><a href="<?php echo home_url('/company'); ?>">Company</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
        </ul>
      </nav>
      <div class="footer-bottom flex">
        <a href="<?php echo home_url('/policy'); ?>">
          <?php if (strpos($_SERVER['REQUEST_URI'], '/en/') !== false) { ?>
            Privacy Policy
          <?php } else { ?>
            プライバシーポリシー
          <?php } ?>
        </a>
        <p><small class="config con-l">© XPB Inc. all rights reserved.</small></p>
      </div>
    </footer>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>

    <?php if ( is_page('members') ) : ?>
      <script>
        jQuery(document).ready(function ($) {
          $('a[href="#modal"]').on("click", function (e) {
            e.preventDefault(); // デフォルトのリンク動作を無効化
            var memberId = $(this).data("member-id");
            // モーダル内容をリセット
            $(".modal-inner").html(""); // モーダル内を空に
            // Ajaxリクエストで新しいデータを取得
            $.ajax({
              url: ajax_object.ajax_url,
              type: "POST",
              data: {
                action: "get_member_detail",
                member_id: memberId,
                nonce: ajax_object.nonce,
              },
              success: function (response) {
                if (response.success) {
                  // 新しいデータでモーダル内容を更新
                  $(".modal-inner").html(response.data);
                  // モーダルを開く
                  $('[data-remodal-id="modal"]').remodal().open();
                } else {
                  console.error("Error:", response);
                }
              },
              error: function (xhr, status, error) {
                console.error("Ajax error:", error);
              },
            });
          });
        });
      </script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/remodal.js"></script>
    <?php endif; ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

    <?php
      wp_localize_script('jquery', 'ajax_object', array(
          'ajax_url' => admin_url('admin-ajax.php'),
          'nonce' => wp_create_nonce('member_modal_nonce')
      ));
    ?>
  </div>

<?php wp_footer(); ?>
</body>

</html>