<?php

/* カスタム投稿タイプを追加 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'orijinal_themes', //カスタム投稿タイプ名を指定
        array(
            'labels' => array(
            'name' => __( 'メディア掲載' ),
            'singular_name' => __( 'メディア掲載' )
        ),
        'public' => true,
        'has_archive' => true, /* アーカイブページを持つ */
        'menu_position' =>5, //管理画面のメニュー順位
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );
/* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
  register_taxonomy(
    'orijinal_themes_cat', /* タクソノミーの名前 */
    'orijinal_themes', /* 使用するカスタム投稿タイプ名 */
    array(
      'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true
    )
  );
/* カスタムタクソノミー、タグを使えるようにする */
  register_taxonomy(
    'orijinal_themes_tag', /* タクソノミーの名前 */
    'orijinal_themes', /* 使用するカスタム投稿タイプ名 */
    array(
      'hierarchical' => false,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'タグ',
      'singular_label' => 'タグ',
      'public' => true,
      'show_ui' => true
    )
  );
}

?>