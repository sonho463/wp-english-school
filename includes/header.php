<header class="l-header">
	<div class="l-header__inner">
		<div class="l-header__left">
			<div class="l-header__logo">
				<a href="/">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-logo.svg" alt="ヘッダーロゴの画像">
				</a>
			</div>
			<button type="button" onclick="navOpen()" class="hamburger">
				<span class="hamburger__line"></span>
				<span class="hamburger__line"></span>
				<span class="hamburger__line"></span>
			</button>
		</div>
		<nav class="p-g-nav">
			<ul class="p-g-nav__inner">
				<li class="p-g-nav__item">
					<a href="/" class="p-g-nav__link">ホーム</a>
				</li>
				<li class="p-g-nav__item">
					<a href="/news" class="p-g-nav__link">お知らせ</a>
				</li>
				<li class="p-g-nav__item">
					<a href="/posts" class="p-g-nav__link">ブログ</a>
				</li>
				<li class="p-g-nav__item">
					<a href="/price" class="p-g-nav__link">コース・料金</a>
				</li>
			</ul>
		</nav>
		<div class="l-header__right">
			<div class="l-header__info">
				<p class="l-header__info__time">平日08:00〜20:00</p>
				<p class="l-header__info__tel">
					<a href="tel:0123-456-7890">
						0123-456-7890
					</a>
				</p>
			</div>
			<div class="l-header__cv">
				<a href="/contact" class="l-header__cv__item">
					<span class="l-header__cv__text">
						資料請求
					</span>
				</a>
				<a href="/contact" class="l-header__cv__item">
					<span class="l-header__cv__text">
						お問い合わせ
					</span>
				</a>
			</div>
		</div>
	</div>

</header>

