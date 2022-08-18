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
		<?php
		get_template_part('includes/breadcrumb');
		?>
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

		<?php
		get_template_part('includes/cta');
		?>

</main>

<?php
get_template_part('includes/footer');
get_footer();
?>
