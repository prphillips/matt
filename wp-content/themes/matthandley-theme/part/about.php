		<div id="aboutme" class="container-fluid">
			<div class="row">
				<div class="col-xs-8 col-xs-offset-2">
					<section id="about">
						<h2>About me</h2>
						<?php the_field('about', 'option'); ?>
						<a href="<?php the_field('cv_doc', 'option'); ?>" target="_blank" class="btn cv">Download my CV</a>
					</section>
				</div>
			</div>
		</div>