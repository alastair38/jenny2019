<?php
/* joints Custom Post Type Example
This page walks you through creating
a custom post type and taxonomies. You
can edit this one or copy the following code
to create another one.

I put this in a separate file so as to
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function roe_articles() {
	// creating (registering) the custom type
	register_post_type( 'articles', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Articles', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Article', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Articles', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Article', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Articles', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Article', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Article', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Articles', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Articles', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-id-alt', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'articles', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
            'taxonomies' => array( 'category', 'post_tag' ),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'excerpt', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'roe_articles');

	
	
	// let's create the function for the custom type
function roe_videos() {
	// creating (registering) the custom type
	register_post_type( 'videos', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Videos', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Video', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Videos', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Video', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Videos', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Video', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Videos', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Videos', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Videos', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 7, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-format-video', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'videos', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
            'taxonomies' => array( 'category', 'post_tag' ),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'roe_videos');


	// let's create the function for the custom type
function roe_resources() {
	// creating (registering) the custom type
	register_post_type( 'resources', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Resources', 'jointstheme'), /* This is the Title of the Group */
			'singular_name' => __('Resource', 'jointstheme'), /* This is the individual type */
			'all_items' => __('All Resources', 'jointstheme'), /* the all items menu item */
			'add_new' => __('Add New', 'jointstheme'), /* The add new menu item */
			'add_new_item' => __('Add New Resource', 'jointstheme'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointstheme' ), /* Edit Dialog */
			'edit_item' => __('Edit Resources', 'jointstheme'), /* Edit Display Title */
			'new_item' => __('New Resource', 'jointstheme'), /* New Display Title */
			'view_item' => __('View Resources', 'jointstheme'), /* View Display Title */
			'search_items' => __('Search Resources', 'jointstheme'), /* Search Custom Type Title */
			'not_found' =>  __('Nothing found in the Database.', 'jointstheme'), /* This displays if there are no entries yet */
			'not_found_in_trash' => __('Nothing found in Trash', 'jointstheme'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'Collegiate.ly Resources', 'jointstheme' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 9, /* this is what order you want it to appear in on the left hand side menu */
			'menu_icon' => 'dashicons-clipboard', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'resources', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => true, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
            'taxonomies' => array( 'category', 'post_tag' ),
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'thumbnail')
	 	) /* end of options */
	); /* end of register post type */

}

	// adding the function to the Wordpress init
	add_action( 'init', 'roe_resources');


// custom fields

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_article-quote',
		'title' => 'Article Quote',
		'fields' => array (
			array (
				'key' => 'field_54871e92a659c',
				'label' => 'Quotation',
				'name' => 'quotation',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => 4,
				'formatting' => 'none',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_external-link',
		'title' => 'External Link',
		'fields' => array (
			array (
				'key' => 'field_538f78387de9a',
				'label' => 'Link',
				'name' => 'link',
				'type' => 'text',
				'instructions' => 'Copy and paste any relevant external link here (eg: url of original article, Vimeo video or paper abstracts)',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_53904c1bdefc0',
				'label' => 'Source',
				'name' => 'source',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '!=',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_resource-details',
		'title' => 'Resource Details',
		'fields' => array (
			array (
				'key' => 'field_538f790417db8',
				'label' => 'Year of Publication',
				'name' => 'year_of_publication',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_538f792517db9',
				'label' => 'Journal/Publisher',
				'name' => 'publisher',
				'type' => 'text',
				'instructions' => 'Name of journal/book publisher',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_538f79cf5c221',
				'label' => 'Volume',
				'name' => 'volume',
				'type' => 'text',
				'instructions' => 'Enter journal volume details (if any)',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_538f7a0a5c222',
				'label' => 'Page Range',
				'name' => 'page_range',
				'type' => 'text',
				'instructions' => 'Enter journal/book page range (if any)',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => 'pp.',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_538f78938599a',
				'label' => 'Reference',
				'name' => 'reference',
				'type' => 'text',
				'instructions' => 'For example, a DOI reference',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'resources',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


	
?>
