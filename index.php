<?php get_header() ?>
<!--<html>-->
	<!--<body>-->
		<!--<div id="wrapper"-->
			<div id="content">
				<?php
					// Start the Loop.
					while (have_posts()) {
						the_post();
						the_content();
					}
				?>
			</div>
			<?php get_footer() ?>