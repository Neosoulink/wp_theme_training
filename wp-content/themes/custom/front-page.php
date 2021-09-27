<?php get_header(null, []) ?>

<?php while (have_posts()) : the_post(); ?>
	<div class="my-5">
		<h1 class="display-4"><?php the_title() ?></h1>

		<p><?php the_content() ?></p>

		<a href="<?= get_post_type_archive_link('post') ?>">See last news</a>
	</div>
<?php endwhile; ?>

<?php get_footer(null, []) ?>
