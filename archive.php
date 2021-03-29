<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : ?>

	<?php if (is_category()) { ?>
		<p>рубрика &laquo;<?php echo single_cat_title(); ?>&raquo;</p>

 		<?php } elseif ( function_exists ('is_tag') && (is_tag()) ) { ?>
		<p>тег &laquo;<?php echo single_tag_title(); ?>&raquo;</p>

	 <?php } elseif (is_day()) { ?>
		<p>архив за <?php the_time('d M Y'); ?></p>

	 <?php } elseif (is_month()) { ?>
		<p>архив за <?php the_time('F Y'); ?></p>

		<?php } elseif (is_year()) { ?>
		<p>архив за <?php the_time('Y'); ?></p>

	  <?php } elseif (is_author()) { ?>
		<p>архив автора</p>

		<?php } ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; раньше') ?></div>
			<div class="alignright"><?php previous_posts_link('позже &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
				
			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="postmetadata"><?php the_time(get_option('date_format').', '.get_option('time_format')) ?> <?php _e('автор:') ?> <?php the_author() ?> </div>
				<div class="postentry">
					<?php the_content("<small>".__('читать полностью'). " &#8216;" . the_title('', '', false) . "&#8217; &raquo;</small>"); ?>
				</div>
		
				<div class="postmetadata">
					<?php if( function_exists('the_tags') ) 
						the_tags(__('Теги: '), ', ', '<br />'); 
					?>
					<?php _e('рубрика:') ?> <?php the_category(', ') ?>&nbsp;&nbsp;|&nbsp;
					<?php comments_popup_link(__('твой коммент'), __('один коммент'), __('комментов: %')); ?>
					<?php edit_post_link(__('править'), '&nbsp;|&nbsp;&nbsp;', ''); ?>
				 </div>
			</div>
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; раньше')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('позже &raquo;')) ?></div>
		</div>
		
	<?php else : ?>
		<div class="post">
			<h2 class="posttitle"><?php _e('не найдено') ?></h2>
			<div class="postentry"><p><?php _e('к сожалению, по вашему запросу ничего не найдено.'); ?></p></div>
		</div>

	<?php endif; ?>

	</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
