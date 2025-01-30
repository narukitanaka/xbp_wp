<div class="name-en config"><?php echo esc_html($name_en); ?></div>
<div class="contents flex">
  <div class="left">
    <div class="img-box obj-fit">
      <?php 
      $thumbnail = get_the_post_thumbnail_url($member_id, 'full');
      if ($thumbnail) : 
      ?>
          <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr($member->post_title); ?>">
      <?php endif; ?>
    </div>
  </div>
  <div class="right">
    <div class="flex">
      <div class="name">
        <span class="config con-re"><?php echo esc_html($position); ?></span>
        <?php echo esc_html($name_jp); ?>
      </div>
      <div class="sns">
        <?php if ($sns_x) : ?>
          <a href="<?php echo esc_url($sns_x); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_member-sns_x.svg" alt=""></a>
        <?php endif; ?>
        <?php if ($sns_facebook) : ?>
          <a href="<?php echo esc_url($sns_facebook); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_member-sns_facebook.svg" alt=""></a>
        <?php endif; ?>
        <?php if ($sns_instagram) : ?>
          <a href="<?php echo esc_url($sns_instagram); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/common/icon_member-sns_insta.svg" alt=""></a>
        <?php endif; ?>
      </div>
    </div>
    <div class="in-charge">
      <?php echo esc_html($area_label); ?>：<span class="config con-re"><?php echo esc_html($in_charge); ?></span>
    </div>
    <div class="text">
      <?php echo wpautop($profile_text); ?>
    </div>
  </div>
</div>