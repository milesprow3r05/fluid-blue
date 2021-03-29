	<div id="sidebar">
		<ul>
			
			<?php if ( !function_exists('dynamic_sidebar')
    	    || !dynamic_sidebar() ) : ?>
		
			<li><h2><?php _e('Автор') ?></h2>
			<p>Тут может быть пару строк о вас, редактируется в файле sidebar.php.</p>
			</li>

			<?php wp_list_pages('title_li=<h2>'.__('Страницы').'</h2>' ); ?>

			<li><h2><?php _e('Рубрики') ?></h2>
				<ul>
				<?php wp_list_categories('orderby=name&title_li='); ?>
				</ul>
			</li>

			<li><h2><?php _e('Архив') ?></h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>

			<?php if ( is_home() || is_page() ) { ?>				
				<?php get_links_list(); ?>
				
				<li><h2><?php _e('Прочее') ?></h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
				</li>
			<?php } ?>

			<?php endif; ?>
		</ul>
	</div>

