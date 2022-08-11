<?php
get_header();
get_template_part('includes/header');
?>

<main class="l-main">
	<section class="l-mv">
		<div class="p-mv">
			<div class="p-mv__inner">
				<div class="p-mv__text-block">
					<h1 class="p-mv__main-title">TOEFL対策はEngress</h1>
					<p class="p-mv__desc">
						日本人へのTOEFL指導歴豊かな講師陣の<br>
						コーチング型TOEFLスクール
					</p>
				</div>
				<div class="p-mv__button">
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
	<section class="l-intro">
		<div class="p-intro">
			<div class="c-inner">
				<div class="p-intro__sympathy">
					<h2 class="p-intro__sympathy__heading c-section__title">
						TOEFL学習で<br class="u-active-sp">こんな悩みありませんか？
					</h2>
					<ul class="p-intro__sympathy__contents">
						<li class="p-intro__sympathy__item">
							勉強の習慣が<br class="u-active-pc">身についていない
						</li>
						<li class="p-intro__sympathy__item">
							勉強しているはず<br class="u-active-pc">なのに点数が伸びない
						</li>
						<li class="p-intro__sympathy__item">
							正しい勉強方法が<br class="u-active-pc">わからない
						</li>
					</ul>
				</div>
				<div class="p-intro__intro">
					<div class="p-intro__intro__inner">
						<h2 class="p-intro__intro__heading c-section__title">
							Engressは<br class="u-active-pc""">
							<span>
								TOEFLに<br class="u-active-sp">特化したスクール
							</span>
							です
						</h2>
						<p class="p-intro__intro__desc">
							完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br class="u-active-pc">
							TOEFLの苦手分野を克服します。
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="l-feature">
		<div class="p-feature">
			<div class="c-inner">
				<h2 class="p-feature__heading c-section__title">
					TOEFL対策に特化したEngress3つの強み
				</h2>
				<div class="p-feature__articles">
					<ul class="p-feature__list">
						<li class="p-feature__item">
							<div class="p-feature__item__text-block">
								<span class="p-feature__tag">特長 １</span>
								<h3 class="p-feature__article__heading">
									TOEFLに最適化された<br class="u-active-pc">無駄のないカリキュラム
								</h3>
								<p class="p-feature__article__desc">
									TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。
								</p>
							</div>
							<figure class="p-feature__item__image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature01.jpg" alt="" class="p-feature__image__image">
							</figure>
						</li>
						<li class="p-feature__item">
							<div class="p-feature__item__text-block">
								<span class="p-feature__tag">特長 ２</span>
								<h3 class="p-feature__article__heading">
									日本人指導歴10年以上の<br class="u-active-pc">経験豊富な講師陣
								</h3>
								<p class="p-feature__article__desc">
									Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。
								</p>
							</div>
							<figure class="p-feature__item__image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature02.jpg" alt="" class="p-feature__image__image">
							</figure>
						</li>
						<li class="p-feature__item">
							<div class="p-feature__item__text-block">
								<span class="p-feature__tag">特長 ３</span>
								<h3 class="p-feature__article__heading">
									平均3ヶ月でTOEFL iBT20点アップ
								</h3>
								<p class="p-feature__article__desc">
									Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。
								</p>
							</div>
							<figure class="p-feature__item__image">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature03.jpg" alt="" class="p-feature__image__image">
							</figure>
						</li>
					</ul>
				</div>
				<nav class="p-feature__link-price">
					<h2 class="p-feature__link-price__heading">
						Engressの料金プランはこちら
					</h2>
					<a href="#" class="p-feature__button c-button c-button--transparent-bg">
						<span class="c-button__text">
							料金を見てみる
						</span>
					</a>
				</nav>
			</div>
		</div>
	</section>
	<section class="l-success">
		<div class="p-success">
			<div class="c-inner">
				<h2 class="p-success__heading c-section__title">
					TOEFL成功事例
				</h2>
				<?php if (have_posts()) : ?>
					<?php
					while (have_posts()) :
						the_post();
					?>
						<div class="p-success__list">
							<ul class="p-success__list__inner">
								<?php
								$args = array(
									'posts_per_page' => 3, // 表示件数の指定
									'post_type' => 'success',
								);
								$posts = get_posts($args);
								foreach ($posts as $post) : // ループの開始
									setup_postdata($post); // 記事データの取得
								?>

									<li class="p-success__item">
										<h3 class="p-success__item__heading">
											<?php the_field('title'); ?>
										</h3>
										<figure class="p-success__item__image">
											<?php
											$image = get_field('image');
											?>
											<img src="<?php echo $image ?>" alt="">
										</figure>
										<div class="p-success__item__info">
											<div class="p-success__item__info-row">
												<p class="p-success__attr">
													<?php the_field('job'); ?>
												</p>
												<p class="p-success__name">
													<?php the_field('name'); ?>
												</p>
											</div>
											<p class="p-success__outcome">
												<?php the_field('result'); ?>
											</p>
										</div>
									</li>
								<?php
								endforeach; // ループの終了
								wp_reset_postdata(); // 直前のクエリを復元する
								?>
							</ul>
						</div>
				<?php
					endwhile;
				endif;
				?>
			</div>
		</div>
	</section>
	<section class="l-flow">
		<div class="p-flow">
			<div class="c-inner">
				<div class="p-flow__heading c-section__title">
					ご利用の流れ
				</div>
				<div class="p-flow__table__wrapper">
					<table class="p-flow__table">
						<tbody>
							<tr>
								<td class="p-flow__num">01</td>
								<td class=="p-flow__item__heading">お問い合わせ</td>
								<td class=="p-flow__desc">まずはフォームまたはお電話からお申し込みください。</td>
							</tr>
							<tr>
								<td class="p-flow__num">02</td>
								<td class=="p-flow__item__heading">ヒアリング</td>
								<td class=="p-flow__desc">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</td>
							</tr>
							<tr>
								<td class="p-flow__num">03</td>
								<td class=="p-flow__item__heading">学習プランのご提供</td>
								<td class=="p-flow__desc">目標達成のために最適な学習プランをご提案致します。</td>
							</tr>
							<tr>
								<td class="p-flow__num">04</td>
								<td class=="p-flow__item__heading">ご入会</td>
								<td class=="p-flow__desc">お申込み完了後、レッスンがスタートします。</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<section class="l-faq">
		<div class="p-faq">
			<div class="c-inner">
				<h2 class="p-faq__heading c-section__title">
					よくある質問
				</h2>
				<div class="p-faq__contents">
					<ul class="p-faq__list">
						<li class="p-faq__item js-faq-item js-faq-item">
							<h3 class="p-faq__question">
								<span class="p-faq__question__text">
									Engressはサラリーマンでも学習を続けられるでしょうか？
									Engressはサラリーマンでも学習を続けられるでしょうか？
									Engressはサラリーマンでも学習を続けられるでしょうか？Engressはサラリーマンでも学習を続けられるでしょうか？Engressはサラリーマンでも学習を続けられるでしょうか？
								</span>
							</h3>
							<p class="p-faq__answer js-faq-answer">
								<span class="p-faq__answer__text">
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
								</span>
							</p>
						</li>
						<li class="p-faq__item js-faq-item">
							<h3 class="p-faq__question">
								<span class="p-faq__question__text">
									教材はオリジナルのものを使用しているのでしょうか？
								</span>
							</h3>
							<p class="p-faq__answer">
								<span class="p-faq__answer__text">
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
								</span>
							</p>
						</li>
						<li class="p-faq__item js-faq-item">
							<h3 class="p-faq__question">
								<span class="p-faq__question__text">
									講師に日本人はいますか？ </span>
							</h3>
							<p class="p-faq__answer">
								<span class="p-faq__answer__text">
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
								</span>
							</p>
						</li>
						<li class="p-faq__item js-faq-item">
							<h3 class="p-faq__question">
								<span class="p-faq__question__text">
									TOEFL以外の海外大学合格のサポートもしてもらえるのでしょうか？
								</span>
							</h3>
							<p class="p-faq__answer">
								<span class="p-faq__answer__text">
									Engressは各個人に最適な学習プランをご提供しております。サラリーマンの方でも継続できます。
								</span>
							</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<section class="l-info">
		<div class="p-info">
			<div class="c-inner">
				<div class="p-info__container">
					<div class="c-info__blog">
						<h2 class="p-info__heading">ブログ</h2>
						<ul class="c-info__blog__list">
							<?php
							$args = array(
								'posts_per_page' => 3, // 表示件数の指定
								'post_type' => 'post',
							);
							$posts = get_posts($args);
							foreach ($posts as $post) : // ループの開始
								setup_postdata($post); // 記事データの取得
							?>
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
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/sample01.jpg" alt="">
											</figure>
										</div>
										<div class="c-info__blog__text-block">
											<p class="c-info__blog__title">
												<?php the_title(); ?>
											</p>
											<p class="c-info__blog__date">
												<?php the_time('Y-m-d') ?>
											</p>
										</div>
									</a>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
					<div class="p-info__information">
						<h3 class="p-info__heading">お知らせ</h3>
						<ul class="p-info__information__list">
							<?php
							$args = array(
								'posts_per_page' => 3, // 表示件数の指定
								'post_type' => 'news',
							);
							$posts = get_posts($args);
							foreach ($posts as $post) : // ループの開始
								setup_postdata($post); // 記事データの取得
							?>
								<li class="p-info__information__item">
									<a href="<?php the_permalink();?>">
										<p class="p-info__information__date">
											<?php the_time('Y-m-d'); ?>
										</p>
										<p class="p-info__information__title">
											<?php the_title(); ?>
										</p>
								</a>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
				</div>
			</div>
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
