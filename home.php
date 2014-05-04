<?php get_header() ?>
<?php //<html> ?>
	<?php //<body> ?>
		<?php //<div id="wrapper"> ?>
			<div id="content">
			<?php
					// Start the Loop.
					while (have_posts()) {
						the_post();?>
						<h3 class="postTitle">
							<a href="<?php echo get_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<p class="postMeta">
							Posted on: <span class="postTime"><?php the_time("l, F j, Y g:i a"); ?></span> by <span class="postAuthor"><?php the_author();?></span>
						</p>
						<div class="postExcerpt">
							<?php the_excerpt(); ?>
						</div>
						<p class="postTags">
							<?php the_tags("Tagged as: ",", ",""); ?>
						</p>
			<?php	}
			?>
			</div>
			<?php get_footer() ?>