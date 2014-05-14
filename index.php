<?php get_header() ?>
<?php //<html> ?>
	<?php //<body> ?>
		<?php //<div id="mainWrapper"> ?>
			<div id="contentWrapper">
				<?php
					//Display the sidebar
					get_sidebar();
				?>
				<div id="content">
					<?php
						// Start the Loop.
						while (have_posts()) {
							the_post();
							the_content();
						}
					?>
				</div>
			</div>
			<?php get_footer() ?>