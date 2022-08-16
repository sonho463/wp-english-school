<?php
get_header();
get_template_part('includes/header');
?>

<main class="l-main">
	<section class="c-subpage-mv c-subpage-mv--page-price">
		<h1 class="c-section__title">
			コース・料金
		</h1>
	</section>
	<section class="c-breadcrumbs">
		<?php
		get_template_part('includes/breadcrumb');
		?>
	</section>
	<section class="p-page-price">
		<div class="c-inner">
			<h2 class="c-section__title c-section__title--subpage">
				料金体系
			</h2>
			<div class="p-page-price__price">
				<p class="p-page-price__price__box">
					入会金<br class="u-active-sp"> 39,800円
				</p>
				<img src="./assets/images/plus.png" alt="">
				<p class="p-page-price__price__box">
					月額費用
				</p>
			</div>
			<p class="p-page-price__price__desc">
				Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
			</p>
		</div>
		<section class="p-page-price__table-section">
			<div class="c-inner">
				<h2 class="c-section__title c-section__title--subpage">
					料金表
				</h2>
				<section class="p-page-price__table-area js-price__table">
					<table class="p-page-price__table">
						<tbody>
							<tr>
								<td class="p-page-price__table__heading">
									<p>
										基礎プラン
									</p>
								</td>
								<td class="p-page-price__table__heading">
									<p>
										演習プラン
									</p>
								</td>
								<td class="p-page-price__table__heading">
									<p>
										おすすめ<br>
										志望校対策プラン
									</p>
								</td>
								<td class="p-page-price__table__heading">
									<p>
										フレックスプラン
									</p>
								</td>
							</tr>
							<tr>
								<td class="p-page-price__table__price">
									<p>
										<?php
										$num = get_field('basic');
										echo number_format($num) . '円~';
										?>
									</p>
									<p>
										*月額（税抜価格）
									</p>
								</td>
								<td class="p-page-price__table__price">
									<p>
										<?php
										$num = get_field('exercise');
										echo number_format($num) . '円~';
										?>
									<p>
										*月額（税抜価格）
									</p>
								</td>
								<td class="p-page-price__table__price">
									<p>
										<?php
										$num = get_field('counter');
										echo number_format($num) . '円~';
										?>
									<p>
										*月額（税抜価格）
									</p>
								</td>
								<td class="p-page-price__table__price">
									<p>
										<?php
										$num = get_field('flex');
										echo number_format($num) . '円~';
										?>
									<p>
										*月額（税抜価格）
									</p>
								</td>
							</tr>
							<tr>
								<td class="p-page-price__table__desc">
									<ul class="p-page-price__table__desc__list">
										<li class="p-page-price__table__desc__item">
											カリキュラム作成
										</li>
										<li class="p-page-price__table__desc__item">
											TOEFL学習サポート
										</li>
										<li class="p-page-price__table__desc__item">
											週一回のビデオMTG
										</li>
									</ul>
								</td>
								<td class="p-page-price__table__desc">
									<ul class="p-page-price__table__desc__list">
										<li class="p-page-price__table__desc__item">
											カリキュラム作成
										</li>
										<li class="p-page-price__table__desc__item">
											TOEFL学習サポート
										</li>
										<li class="p-page-price__table__desc__item">
											週一回のビデオMTG
										</li>
										<li class="p-page-price__table__desc__item">
											月二回の模試（解説<br>付き）
										</li>
									</ul>
								</td>
								<td class="p-page-price__table__desc">
									<ul class="p-page-price__table__desc__list">
										<li class="p-page-price__table__desc__item">
											カリキュラム作成
										</li>
										<li class="p-page-price__table__desc__item">
											TOEFL学習サポート
										</li>
										<li class="p-page-price__table__desc__item">
											週一回のビデオMTG
										</li>
										<li class="p-page-price__table__desc__item">
											月二回の模試（解説<br>付き）
										</li>
										<li class="p-page-price__table__desc__item">
											週一の英語面接対策
										</li>
									</ul>
								</td>
								<td class="p-page-price__table__desc">
									<ul class="p-page-price__table__desc__list">
										<li class="p-page-price__table__desc__item">
											＊別途ご相談ください
										</li>
									</ul>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="price-button-next js-price-button-next">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="">
					</div>
				</section>
			</div>
		</section>
	</section>

	<?php
	get_template_part('includes/cta');
	?>

</main>


<?php
get_template_part('includes/footer');
get_footer();
?>
