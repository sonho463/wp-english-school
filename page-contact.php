<?php
get_header();
get_template_part('includes/header');
?>

	<main class="l-main">
		<section class="c-subpage-mv c-subpage-mv--page-contact">
			<h1 class="c-section__title">
				お問い合わせ・資料請求
			</h1>
		</section>
		<section class="c-breadcrumbs">
		<?php
		get_template_part('includes/breadcrumb');
		?>
	</section>
		<section class="p-page-contact">
			<div class="c-inner">
				<p class="p-page-contact__lead">
					弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
				</p>
				<section class="p-page-contact__form">
					<div id="mw_wp_form_mw-wp-form-139" class="mw_wp_form mw_wp_form_input">
						<form method="post" action="" enctype="multipart/form-data">
							<label for="company" class="p-page-contact__form__text">
								会社名
								<input type="text" name="company" id="company" placeholder="Engress" />
							</label>
							<label for="company" class="p-page-contact__form__text">
								氏名
								<input type="text" name="company" id="company" placeholder="田中　太郎" />
							</label>
							<label for="email" class="p-page-contact__form__text">
								メールアドレス
								<input type="email" name="email" id="email" placeholder="example@example.com" />
							</label>
							<label for="tel" class="p-page-contact__form__text">
								電話番号
								<input type="tel" name="tel" id="tel" placeholder="01-2345-6789" />
							</label>
							<div class="p-page-contact__form__type-area">
								<p class="p-page-contact__form__type-area__desc">
									お問い合わせの種類を選択してください<span>（資料請求の方は資料請求を選択ください）</span>
								</p>
								<p class="p-page-contact__form__item">
									<input type="radio" name="type" id="nego" value="nego" />
									<label for="nego" class="p-page-contact__form__type">商談のご相談</label>
								</p>
								<p class="p-page-contact__form__item">
									<input type="radio" name="type" id="service" value="service" />
									<label for="service" class="p-page-contact__form__type">サービスに関するお問い合わせ</label>
								</p>
								<p class="p-page-contact__form__item">
									<input type="radio" name="type" id="material" value="material" />
									<label for="material" class="p-page-contact__form__type">資料請求</label>
								</p>
								<p class="p-page-contact__form__item">
									<input type="radio" name="type" id="etc" value="etc" />
									<label for="etc" class="p-page-contact__form__type">その他</label>
								</p>
							</div>
							<label for="company" class="p-page-contact__form__textarea">
								お問い合わせ内容
							</label>
							<textarea type="text" name="company" id="company" placeholder="入力して下さい"></textarea>
							<div class="p-page-contact__consent">
								<a href="#" class="p-page-contact__privacy-link">プライバシーポリシー</a>に同意の上、送信ください。
								<div class="p-page-contact__privacy-checkbox">
									<input type="checkbox" name="privacy" id="privacdy">
									<label for="privacy">プライバシーポリシーに同意する</label>
								</div>
								<input class="p-page-contact__submit-button" type="submit" value="送信する">
							</div>
					</div>
					</form>

			</div>

		</section>

		</div>
		</section>




	</main>

	<?php
	get_template_part('includes/footer');
	get_footer();
	?>
