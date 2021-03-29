<?php get_header(); ?>

<div id="content">
<div class="post">

<h2>Ссылки</h2>

<?php 
	wp_list_bookmarks('
		title_li=
		&title_before=<h3>
		&title_after=</h3>
		&category_before=
		&category_after=
		&orderby=rating
		&order=DESC
		&show_description=1
		&between= — 
	'); 
?>

</div>
</div>
<?php
get_sidebar();
get_footer();
?>

