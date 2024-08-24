<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    //メニューをサポート
    register_nav_menus([
        'global_nav' => 'グローバルナビ',
    ]);
});

/* アイキャッチ画像がなければ、標準画像を取得する */
function get_eyecatch_with_default()
{
    if (has_post_thumbnail()) :
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id, 'large');
    else :
        $img = array(get_template_directory_uri() . '/img/bg_top_kv 1.png');
    endif;

    return $img;
}

/***
 * カスタム投稿タイプ「blog」を追加
 *
 * @return void
 */
function add_post_type_event() {
	register_post_type(
		'blog', /* カスタム投稿タイプのスラッグ */
		array(
			'labels'       => array(
				'name' => 'ブログ',
			),
			'public'       => true,
			'has_archive'  => true,
			'supports'     => array( 'title', 'editor', 'excerpt', 'thumbnail', 'author' ),
			'show_in_rest' => true,
		)
	);
}
add_action( 'init', 'add_post_type_event', 0 );

/**
 * カスタム分類「ブログカテゴリー」を追加
 *
 * @return void
 */
function add_custom_taxonomy_event() {
	register_taxonomy(
		'blog-cat', /* カテゴリーの識別スラッグ */
		'blog', /* 対象の投稿タイプのスラッグ */
		array(
			'hierarchical'          => true,
			'update_count_callback' => '_update_post_term_count',
			'label'                 => 'ブログカテゴリー',
			'public'                => true,
			'show_ui'               => true,
			'show_in_rest'          => true,
		)
	);
}
add_action( 'init', 'add_custom_taxonomy_event', 0 );


function archive_posts_per_page($query)
{
    // 管理画面やメインクエリ以外の場合は処理を終了
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    
    // アーカイブページの場合に投稿数を変更
    if ($query->is_archive()) {
        $query->set('posts_per_page', 12); // 表示する投稿数を 12件に設定
    }
}
// アクションフックに関数を登録
add_action('pre_get_posts', 'archive_posts_per_page');