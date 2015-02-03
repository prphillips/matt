<?php get_header(); ?>

				<div class="row">
					<div class="container">
						<h1 class="tagline" style="margin-top:210px;"><?php the_title_attribute(); ?></h1>
						<h4 class="project-tags">
						<?php
							$terms = get_the_terms($post->ID, 'project_tags');
							foreach ($terms as $term) {
								echo '<span>' . $term->name . '</span>';
							}
						?>
						</h4>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div class="body home project">

		<div class="container project-desc">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>

	</div>

	<div class="body">

		<div class="body content">
			<div class="container">
				<div class="row">
				<?php
				if( have_rows('screenshots') ):
					while ( have_rows('screenshots') ) : the_row();
						$image = get_sub_field('screenshot');
						$caption = get_sub_field('caption');
						?>

						<div class="col-xs-12 screenshot">
							<figure>
								<img src="<?php echo $image['url']?>" class="img-responsive">
								<figcaption><?php echo $caption; ?></figcaption>
							</figure>
						</div>

					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>

		<?php
		require_once('part/project-grid.php');
		require_once('part/about.php');
		require_once('part/contact.php');
		?>

	</div>

<?php

get_footer();
