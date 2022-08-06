<?php

add_action('init', function () {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
});

//カスタム投稿タイプの設定
function create_post_type()
{
	register_post_type(
		'success',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => '成功事例',
				'singular_name' => '成功事例',
			),
			'public' => true,
			'menu_position' => 5,
			// 'has_archive' => true,
			'show_in_rest' => true,
			'hierarchical' => true,
			'taxonomies' => ['custom_taxonomy'],
			'supports' => array(
				'title',
				'author',
				'editor',
				'excerpt',
				'thumbnail',
			),
		)
	);
	register_post_type(
		'news',
		array(
			'exclude_from_search' => false, // false 検索対象に含める
			'labels' => array(
				'name' => 'お知らせ',
				'singular_name' => 'お知らせ',
			),
			'public' => true,
			'show_in_rest' => true,
			'menu_position' => 5,
			'has_archive' => true,
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'excerpt',
				'thumbnail',
			),
		)
	);
}
add_action('init', 'create_post_type', 1);

// 教材検索投稿タイプのカスタムタクソノミーの設定
function create_taxonomy()
{
	register_taxonomy(
		'news_category', // タクソノミー名
		'news', // 関連付けるカスタム投稿タイプ
		array(
			'label' => 'お知らせカテゴリ', // 管理画面のメニューに表示されるテキスト
			'singular_label' => 'お知らせカテゴリ', // 管理画面のメニューに表示されるテキスト
			'labels' => array(
				'all_items' => 'お知らせカテゴリ一覧', // 管理画面のメニューの下層に表示されるテキスト
				'add_new_item' => 'お知らせカテゴリを追加', // タームの新規追加画面に表示されるテキスト
			),
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true, //これがないと投稿画面に表示されない
			'show_in_nav_menus' => true,
			'show_admin_column' => true,
			'hierarchical' => true, // 階層関係を持たせるかどうか
			'show_in_quick_edit' => true,
		)
	);
}
add_action('init', 'create_taxonomy');
