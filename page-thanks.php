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
						送信完了
					</a>
				</li>
			</ul>
		</section>
		<section class="p-page-thanks">
			<div class="c-inner">
				<p class="p-page-thanks__text">
					お問い合わせいただきありがとうございます
				<br>
					内容を確認した後、担当者よりご連絡いたします
				</p>
				<a href="/" class="p-page-thanks__back">
					ホームへ戻る
				</a>


			</div>
		</section>
	</main>


	<?php
	get_template_part('includes/footer');
	get_footer();
	?>
