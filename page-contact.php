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
			<?php the_content(); ?>
		</div>
	</section>

</main>

<?php
get_template_part('includes/footer');
get_footer();
?>
