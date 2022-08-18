<?php
get_header();
get_template_part('includes/header');
?>

<main class="l-main">
	<section class="c-breadcrumbs">
		<?php
		get_template_part('includes/breadcrumb');
		?>
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



	<?php
	get_template_part('includes/cta');
	?>
</main>
<?php
get_template_part('includes/footer');
get_footer();
?>
