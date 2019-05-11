<?php 

//call title tag
function phtheme_wp_title_tag()
{
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'phtheme_wp_title_tag');

//previous versions prevent errors
if(!function_exists('_wp_render_title_tag'))
{
	function phtheme_wp_render_title()
	{
?>
	<title><?php wp_title('|', true, 'right');?></title>
<?php 
	}
	add_action('wp_head', 'phtheme_wp_title');
}


?>