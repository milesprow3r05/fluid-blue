</div> 
<div id="footer">
	<a href="<?php bloginfo('rss2_url'); ?>">Публикации (RSS)</a> и <a href="<?php bloginfo('comments_rss2_url'); ?>">Комментарии (RSS)</a>.<br />
	<?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds.
	<?php wp_footer(); ?>
</div>
</div>
