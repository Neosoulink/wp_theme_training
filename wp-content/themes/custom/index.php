<?php get_header(null, []) ?>

<?php if (have_posts()) : ?>
	<div class="row my-5">
		<?php while (have_posts()) : the_post();  ?>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<?php the_post_thumbnail("medium", ["class" => "card-img-top", "style" => "height:auto"]) ?>
						<h5 class="card-title"><?php the_title() ?></h5>
						<!--<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>-->
						<p class="card-text"><?php the_excerpt() ?></p>
						<a href="<?php the_permalink() ?>" class="card-link text-capitalize"><?php the_author() ?></a>
					</div>
				</div>
			</div>
		<?php endwhile  ?>
	</div>
<?php else : ?>
	No articles...
<?php endif ?>

<?php get_footer(null, []) ?>
