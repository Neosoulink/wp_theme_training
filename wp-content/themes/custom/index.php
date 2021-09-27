<?php get_header(null, []) ?>

<?php if (have_posts()) : ?>
	<ul>
		<?php while (have_posts()) : the_post();  ?>
			<li>
				<a href="<?php the_permalink() ?>">
					<?php the_title() ?>
				</a> -
				<?php the_author() ?>
			</li>
		<?php endwhile  ?>
	</ul>
<?php else : ?>
	No articles...
<?php endif ?>

<?php get_footer(null, []) ?>
