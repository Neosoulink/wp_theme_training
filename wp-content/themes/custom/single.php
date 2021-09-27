<?php get_header(null, []) ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="my-5">
			<h1 class="display-4"><?php the_title() ?></h1>
			<div class="">
				<img src="<?php the_post_thumbnail_url() ?>" alt="Img" style="width:100%;height:auto;" />
			</div>
			<p><?php the_content() ?></p>
		</div>
<?php endwhile;
endif ?>

<?php get_footer(null, []) ?>
