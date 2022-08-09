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
		<ul class="c-breadcrumbs__list c-inner">
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					ホーム
				</a>
			</li>
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					お知らせ
				</a>
			</li>
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					お知らせ
				</a>
			</li>
		</ul>
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
								<a href="/single-news.html">
									<p class="p-archive-news__information__date"><?php the_time('Y-m-d'); ?></p>
									<p class="p-archive-news__information__title">
										<?php the_title(); ?>
									</p>
								</a>
							</li>
						</ul>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<ul class="c-pagination">
				<li class="c-pagination__number">
					<a href="#" class="c-pagination__number__link">
						1
					</a>
				</li>
				<li class="c-pagination__number">
					<a href="#" class="c-pagination__number__link">
						2
					</a>
				</li>
				<li class="c-pagination__number">
					<a href="#" class="c-pagination__number__link">
						3
					</a>
				</li>
				<li class="c-pagination__number c-pagination__number--omit">
					<a href="#" class="c-pagination__number__link">
						...
					</a>
				</li>
				<li class="c-pagination__number">
					<a href="#" class="c-pagination__number__link">
						5
					</a>
				</li>

			</ul>
		</div>
	</section>

	<section class="l-cta">
		<div class="p-cta">
			<div class="c-inner">
				<h2 class="p-cta__heading c-section__title">
					まずは無料で資料請求から
				</h2>
				<div class="p-cta__button">
					<a href="#" class="c-button">
						<span class="c-button__text">資料請求</span>
					</a>
				</div>
				<a class="c-link-contact">
					<span class="c-link-contact__text">
						お問い合わせ
					</span>
				</a>
			</div>
		</div>
	</section>
	<section class="l-tel">
		<div class="p-tel">
			<div class="c-inner">
				<span class="p-tel__heading">お電話でのお問い合わせはこちら</span>
				<a href="tel:0123-456-7890">
					<span class="p-tel__number">
						0123-456-7890
					</span>
				</a>
				<span class="p-tel__time">平日 08:00~20:00</span>
			</div>
		</div>
	</section>

</main>

<?php
get_template_part('includes/footer');
get_footer();
?>
