		<div class="container-fluid">
			<div class="row">
				<?php
				$args = array(
					'posts_per_page' => 12,
					'post_type' => 'projects'
				);
				query_posts($args);
				if ( have_posts() ) : 
					while ( have_posts() ) : the_post();
				?>

				
				<div class="col-md-3 col-sm-4 col-xs-6 nopad">
					<a href="<?php the_permalink(); ?>" class="project">
						<div class="overlay">
							<h3 class="project-name"><?php the_title_attribute(); ?></h3>
							<p class="tags">
								<?php
								$terms = get_the_terms($post->ID, 'project_tags');
								foreach ($terms as $term) {
									echo '<span>' . $term->name . '</span>';
								}
								?>
							</p>
						</div>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); ?>
						<img src="<?php echo $image[0]; ?>" width="100%" height="auto">
					</a>
				</div>

				<?php
					endwhile;
					endif;
				?>
			</div>
		</div>