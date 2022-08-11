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
	<div class="l-single-blog__container p-single-blog">
		<div class="c-inner">
			<div class="l-single-blog__main">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<section class="c-post">
							<div class="c-post__inner">
								<div class="c-post__category">
									<?php
									$category = get_the_category();
									echo $category[0]->cat_name;
									?>
								</div>
								<h1 class="c-post__title">
									<?php the_title(); ?>
								</h1>
								<div class="c-post__info-block">
									<div class="c-post__sns-block">
										<img src="./assets/images/sns-icon.png" alt="">
									</div>
									<p class="c-post__date">
										<?php the_time('Y-m-d') ?>
									</p>
								</div>
								<figure class="c-post__image">
									<img src="./assets/images/sample01.jpg" alt="">
								</figure>
								<section class="c-post__article">
									<?php
									the_content();
									?>
								</section>
							</div>

						</section>
					<?php endwhile; ?>
				<?php endif; ?>
				<section class="p-single-blog__recommend">
					<div class="c-info__blog">
						<h2 class="p-info__heading">おすすめの記事</h2>
						<ul class="c-info__blog__list">
							<li class="c-info__blog__item">
								<a class="c-info__blog__link" href="">

									<div class="c-info__blog__image-block">
										<span class="c-info__blog__category">カテゴリー</span>
										<figure class="c-info__blog__image">
											<img src="./assets/images/sample01.jpg" alt="">
										</figure>
									</div>
									<div class="c-info__blog__text-block">
										<p class="c-info__blog__date">2020-12-27</p>
										<p class="c-info__blog__title">
											Engress説明会in大阪の模様をお伝えします Engress説明会in大阪の模様をお伝
										</p>
									</div>
								</a>
							</li>
							<li class="c-info__blog__item">
								<a href="" class="c-info__blog__link">

									<div class="c-info__blog__image-block">
										<span class="c-info__blog__category">
											カテゴリー
										</span>
										<figure class="c-info__blog__image">
											<img src="./assets/images/sample02.jpg" alt="">
										</figure>
									</div>
									<div class="c-info__blog__text-block">
										<p class="c-info__blog__date">2020-12-01</p>
										<p class="c-info__blog__title">Engressもくもく会でみんなで　TOEFL学習をしませんか？</p>
									</div>
								</a>
							</li>
							<li class="c-info__blog__item">
								<a href="" class="c-info__blog__link">
									<div class="c-info__blog__image-block">
										<span class="c-info__blog__category">カテゴリー</span>
										<figure class="c-info__blog__image">
											<img src="./assets/images/sample03.jpg" alt="">
										</figure>
									</div>
									<div class="c-info__blog__text-block">
										<p class="c-info__blog__date">2020-11–20</p>
										<p class="c-info__blog__title">TOEFL学習にはコーチング学習が最強である話</p>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<aside class="l-single-blog__aside">
				<section class="p-single-blog__related">
					<h2 class="p-single-blog__aside__heading">関連記事</h2>
					<?php
					$categories = get_the_category();
					$category = array();
					foreach ($categories as $cat) {
						$category[] = $cat->term_id;
					}
					?>
					<?php
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => '3', //表示させたい記事数
						'post__not_in' => array($post->ID), //現在の記事は含めない
						'category__in' => $category, //先ほど取得したカテゴリー内の記事
						'orderby' => 'rand' //ランダムで取得
					);
					$related_query = new WP_Query($args);
					?>
					<ul class="c-info__blog__list">
						<?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
							<li class="c-info__blog__item">
								<a class="c-info__blog__link" href="<?php the_permalink() ?>">
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
										<p class="c-info__blog__title">
											<?php the_title(); ?>
										</p>
									</div>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>

				</section>
				<section class="p-single-blog__category">
					<h2 class="p-single-blog__aside__heading">
						カテゴリー
					</h2>
					<ul class="p-single-blog__category__list">
						<?php
						$categories = get_categories();
						foreach ($categories as $category) {
							echo '<li class="p-single-blog__category__item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
						}
						?>
						
					</ul>
				</section>
			</aside>
		</div>
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
