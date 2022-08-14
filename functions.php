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


// MW WP FORM P，BRタグ削除
function mvwpform_autop_filter()
{
	if (class_exists('MW_WP_Form_Admin')) {
		$mw_wp_form_admin = new MW_WP_Form_Admin();
		$forms = $mw_wp_form_admin->get_forms();
		foreach ($forms as $form) {
			add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
		}
	}
}
mvwpform_autop_filter();


//pagination
function pagination($pages = '', $range = 2)
{
	// var_dump($pages);
	$showitems = ($range * 1) + 1;
	global $paged;
	if (empty($paged)) $paged = 1;
	if ($pages == '') {
		global $wp_query;
		// var_dump($wp_query);
		$pages = $wp_query->max_num_pages;
		if (!$pages) {
			$pages = 1;
		}
	};
	// var_dump($pages);
	if (1 != $pages) {
		// 画像を使う時用に、テーマのパスを取得
		// $img_pass = get_template_directory_uri();
		// echo "<div class=\"nav-links nav-links__bg-yellow\">";
		// 「1/2」表示 現在のページ数 / 総ページ数
		// echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
		// 「前へ」を表示
		// if ($paged > 1) :
		// 	echo "<div><a class=\"pagination_allow pagination_allow__left\"href='" . get_pagenum_link($paged - 1) . "'></a></div>";
		// else :
		// 	echo "<div><span class=\"pagination_allow pagination_allow__inactive pagination_allow__left\"></span></div>";
		// endif;
		// ページ番号を出力
		echo "<ul class=\"c-pagination\">\n";
		if ($pages > 3 && $paged != $pages && $paged != 1) :
			for ($i = $paged - 1; $i <= $paged + 1; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class=\" -current\">" . $i . "</li>" : // 現在のページの数字はリンク無し
						"<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		else :
			for ($i = 1; $i <= $pages; $i++) {
				if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
					echo ($paged == $i) ? "<li class=\" -current\">" . $i . "</li>" : // 現在のページの数字はリンク無し
						"<li><a href='" . get_pagenum_link($i) . "'>" . $i . "</a></li>";
				}
			}
		endif;
		// [...] 表示
		if(($paged + 1 ) < $pages){ echo "<li class=\"c-pagination__number--omit\">...</li>";
		echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
		}
		echo "</ul>\n";
		// 「次へ」を表示
		// if ($paged < $pages) : echo "<div><a class=\" pagination_allow\" href='" . get_pagenum_link($paged + 1) . "'></a></div>";
		// else :
		// 	echo "<div><span class=\"pagination_allow pagination_allow__inactive\"></span></div>";
		// endif;

		echo "</div>\n";
	}
}
