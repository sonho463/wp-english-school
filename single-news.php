<?php
get_header();
get_template_part('includes/header');
?>

<main class="l-main">
	<section class="c-breadcrumbs">
		<ul class="c-breadcrumbs__list c-inner">
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					ホーム
				</a>
			</li>
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					料金体系
				</a>
			</li>
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					料金体系
				</a>
		</li>
		</ul>
	</section>
	<section class="p-single-news">
		<div class="c-inner">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<section class="c-post">
						<div class="c-post__inner">
							<h1 class="c-post__title">
								<?php the_title() ?>
							</h1>
							<p class="c-post__date">
								<?php the_time('Y-m-d'); ?>
							</p>
							<section class="c-post__article">
								<?php the_content() ?>
							</section>
						</div>
					</section>
				<?php endwhile; ?>
			<?php endif; ?>
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
