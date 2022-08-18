<?php
get_header();
get_template_part('includes/header');
get_template_part('includes/ddMenu');
?>

<main class="l-main">
	<section class="c-subpage-mv c-subpage-mv--archive-news">
		<h1 class="c-section__title c-section__title--subpage">
			お知らせ
		</h1>
	</section>
	<section class="c-breadcrumbs">
		<?php
		get_template_part('includes/breadcrumb');
		?>
	</section>
	<section class="p-archive-news">
		<div class="c-inner">
			<h2 class="c-section__title c-section__title--subpage">
				お知らせ一覧
			</h2>
			<?php if (have_posts()) : ?>
				<div class="p-archive-news__information">
					<?php while (have_posts()) : the_post(); ?>
						<ul class="p-archive-news__information__list">
							<li class="p-archive-news__information__item">
								<a href="<?php the_permalink(); ?>">
									<p class="p-archive-news__information__date"><?php the_time('Y-m-d'); ?></p>
									<p class="p-archive-news__information__title">
										<?php the_title(); ?>
									</p>
								</a>
							</li>
						</ul>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<p style="
				text-align: center;
				margin-top: 30px;
				font-size: 2.4rem;">表示する投稿がありません</p>
			<?php endif; ?>
			<ul class="c-pagination">
				<?php
				if (function_exists('pagination')) { // 関数が定義されていたらtrueになる
					pagination();
				} ?>
			</ul>
		</div>
	</section>

	<?php
	get_template_part('includes/cta');
	?>

</main>

<?php
get_template_part('includes/footer');
get_footer();
?>
