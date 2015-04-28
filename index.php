<?php
get_header();
?>
<div class="inner-wrapper">
<a name="top"></a>
<?php
$args = array(
	'sort_order' => 'ASC',
	'sort_column' => 'menu_order', //post_title
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post_status' => 'publish'
);
$pages = get_pages($args);
//start loop
$idx = 0;
foreach ($pages as $page_data) {
    $content = apply_filters('the_content', $page_data->post_content);
    $title = $page_data->post_title;
    $slug = $page_data->post_name;
?>

<div id='<?php echo "$slug" ?>' class='section <?php echo "$slug" ?>'>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class=''><a name='<?php echo "$slug" ?>'></a>
						<h2><?php echo "$title" ?></h2>
							<?php echo "$content" ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$idx++;

}
get_footer();
?>
