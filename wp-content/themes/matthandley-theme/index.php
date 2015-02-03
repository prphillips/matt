<?php get_header(); ?>

				<div class="row">
					<div class="container">
						<h1 class="tagline" style="margin-top:42vh"><?php the_field('tagline', 'option'); ?></h1>
					</div>
				</div>
			</div>
			<section class="more">
				<?php the_field('intro_text', 'option'); ?>
				<a href="#grid"><div class="arrow"></div></a>
			</section>
	</header>

	<div id="grid" class="body home">

		<?php
		require_once('part/project-grid.php');
		require_once('part/about.php');
		require_once('part/contact.php');
		?>

	</div>

<?php get_footer(); ?>