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
							the_post();?>
							<h1 class="postTitle">
								<a href="<?php echo get_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h1>
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
			</div>
			<?php get_footer() ?>