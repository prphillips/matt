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

				<div class="col-md-3 col-sm-6 col-xs-12 nopad">
					<figure class="effect-sadie">
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium'); ?>
						<img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>">
						<figcaption>
							<h2><?php the_title_attribute(); ?></h2>
							<p><?php
								$tags = get_the_terms($post->ID, 'project_tags');
                                $tagcount = count($tags);
								foreach ($tags as $tag) {
                                    if ($tagcount > 1) {
                                        echo '<span>' . $tag->name . ', </span>';
                                        $tagcount--;
                                    } else {
                                        echo '<span>' . $tag->name . '</span>';   
                                    }
								}
								?></p>
							<a href="<?php the_permalink(); ?>">View more</a>
						</figcaption>			
					</figure>
				</div>

				<?php
					endwhile;
					endif;
				?>
				
			</div>
		</div>