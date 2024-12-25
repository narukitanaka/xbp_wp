<?php

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');


//お知らせ
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news'; //URLとして使いたい文字列
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


//プレスリリース用のカスタム投稿タイプを作成
function create_press_release_post_type() {
    register_post_type('press', array(
        'labels' => array(
            'name' => 'プレスリリース',
            'singular_name' => 'プレスリリース',
            'add_new' => '新規追加',
            'edit_item' => '編集'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-media-text',
        'show_in_rest' => true,
    ));

    // プレスリリースのカテゴリーを追加
    register_taxonomy(
        'press-cat',
        'press',
        array(
            'labels' => array(
                'name' => 'カテゴリー',
                'add_new_item' => '新規カテゴリーを追加',
            ),
            'hierarchical' => true,
            'show_in_rest' => true,
        )
    );
}
add_action('init', 'create_press_release_post_type');


// メンバー用カスタム投稿タイプを登録
function create_member_post_type() {
    register_post_type('member', array(
        'labels' => array(
            'name' => 'メンバー',
            'singular_name' => 'メンバー',
            'add_new' => '新規追加',
            'edit_item' => '編集'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
    ));
}
add_action('init', 'create_member_post_type');


// メンバーモーダル用のAjax処理
function get_member_detail() {
  if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'member_modal_nonce')) {
    wp_send_json_error('Invalid nonce');
    return;
  }
  $member_id = isset($_POST['member_id']) ? intval($_POST['member_id']) : 0;
  if (!$member_id) {
    wp_send_json_error('Invalid member ID');
    return;
  }
  $member = get_post($member_id);
  if ($member) {
    $position = get_field('position', $member_id);
    $name_en = get_field('name_en', $member_id);
    $name_jp = get_field('name_jp', $member_id);
    $sns_x = get_field('sns_x', $member_id);
    $sns_facebook = get_field('sns_facebook', $member_id);
    $sns_instagram = get_field('sns_instagram', $member_id);
    $in_charge = get_field('in_charge', $member_id);
    $profile_text = get_field('profile_text', $member_id);
    ob_start();
    include(get_theme_file_path('/include/modal-member.php'));
    $html = ob_get_clean();
    wp_send_json_success($html);
  }
}
add_action('wp_ajax_get_member_detail', 'get_member_detail');
add_action('wp_ajax_nopriv_get_member_detail', 'get_member_detail');
// スクリプトの読み込み
function enqueue_member_scripts() {
  if (is_page('members')) {
    wp_enqueue_script('member-modal', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
    wp_localize_script('member-modal', 'ajax_object', array(
      'ajax_url' => admin_url('admin-ajax.php'),
      'nonce' => wp_create_nonce('member_modal_nonce')
    ));
  }
}
add_action('wp_enqueue_scripts', 'enqueue_member_scripts');



// 投稿の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');
// Contact Form 7の自動整形を無効化
add_filter('wpcf7_autop_or_not', '__return_false');