<?php
get_header();
get_template_part('includes/header');
?>

<main class="l-main">
	<section class="c-subpage-mv c-subpage-mv--archive-blog">
		<h1 class="c-section__title c-section__title--subpage">
			ブログ
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
					ブログ
				</a>
			</li>
			<li class="c-breadcrumbs__item">
				<a href="/" class="c-breadcrumbs__link">
					ブログ
				</a>
			</li>
		</ul>
	</section>
	<section class="p-blog-archive">
		<div class="c-inner">
			<h2 class="c-section__title">
				<?php
				echo single_term_title('', false);
				?>
			</h2>
			<?php if (have_posts()) : ?>
				<div class="c-info__blog">
					<ul class="c-info__blog__list">
						<?php while (have_posts()) : the_post(); ?>
							<li class="c-info__blog__item">
								<a class="c-info__blog__link" href="<?php the_permalink(); ?>">
									<div class="c-info__blog__image-block">
										<span class="c-info__blog__category">
											<?php
											$category = get_the_category();
											echo $category[0]->cat_name;
											?>
										</span>
										<figure class="c-info__blog__image">
											<?php if (has_post_thumbnail()) : ?>
												<?php the_post_thumbnail(); ?>
											<?php else : ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/default.png" alt="">
											<?php endif; ?>
										</figure>
									</div>
									<div class="c-info__blog__text-block">
										<p class="c-info__blog__date">
											<?php the_time('Y-m-d'); ?>
										</p>
										<p class="c-info__blog__title">
											<?php the_title(); ?>
										</p>
										<p class="c-info__blog__desc">
											<?php echo get_the_excerpt() ?>
										</p>
									</div>
								</a>
							</li>

						<?php endwhile; ?>
					</ul>
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
