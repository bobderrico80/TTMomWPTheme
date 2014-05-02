<?php get_header() ?>
<?php //<html> ?>
	<?php //<body> ?>
		<?php //<div id="wrapper"> ?>
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