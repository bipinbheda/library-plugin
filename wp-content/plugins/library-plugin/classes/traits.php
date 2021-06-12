<?php
trait BookCPT {
	function book_init() {
		register_post_type(
			'book',
			[
				'labels'                => [
					'name'                  => __( 'Books', 'library-plugin' ),
					'singular_name'         => __( 'Book', 'library-plugin' ),
					'all_items'             => __( 'All Books', 'library-plugin' ),
					'archives'              => __( 'Book Archives', 'library-plugin' ),
					'attributes'            => __( 'Book Attributes', 'library-plugin' ),
					'insert_into_item'      => __( 'Insert into book', 'library-plugin' ),
					'uploaded_to_this_item' => __( 'Uploaded to this book', 'library-plugin' ),
					'featured_image'        => _x( 'Featured Image', 'book', 'library-plugin' ),
					'set_featured_image'    => _x( 'Set featured image', 'book', 'library-plugin' ),
					'remove_featured_image' => _x( 'Remove featured image', 'book', 'library-plugin' ),
					'use_featured_image'    => _x( 'Use as featured image', 'book', 'library-plugin' ),
					'filter_items_list'     => __( 'Filter books list', 'library-plugin' ),
					'items_list_navigation' => __( 'Books list navigation', 'library-plugin' ),
					'items_list'            => __( 'Books list', 'library-plugin' ),
					'new_item'              => __( 'New Book', 'library-plugin' ),
					'add_new'               => __( 'Add New', 'library-plugin' ),
					'add_new_item'          => __( 'Add New Book', 'library-plugin' ),
					'edit_item'             => __( 'Edit Book', 'library-plugin' ),
					'view_item'             => __( 'View Book', 'library-plugin' ),
					'view_items'            => __( 'View Books', 'library-plugin' ),
					'search_items'          => __( 'Search books', 'library-plugin' ),
					'not_found'             => __( 'No books found', 'library-plugin' ),
					'not_found_in_trash'    => __( 'No books found in trash', 'library-plugin' ),
					'parent_item_colon'     => __( 'Parent Book:', 'library-plugin' ),
					'menu_name'             => __( 'Books', 'library-plugin' ),
				],
				'public'                => true,
				'hierarchical'          => false,
				'show_ui'               => true,
				'show_in_nav_menus'     => true,
				'supports'              => [ 'title', 'editor' ],
				'has_archive'           => true,
				'rewrite'               => true,
				'query_var'             => true,
				'menu_position'         => null,
				'menu_icon'             => 'dashicons-admin-post',
				'show_in_rest'          => true,
				'rest_base'             => 'book',
				'rest_controller_class' => 'WP_REST_Posts_Controller',
			]
		);
	}
}
trait AuthorTaxonomy {
	function author_init() {
		register_taxonomy( 'author', [ 'book' ], [
			'hierarchical'          => true,
			'public'                => true,
			'show_in_nav_menus'     => true,
			'show_ui'               => true,
			'show_admin_column'     => false,
			'query_var'             => true,
			'rewrite'               => true,
			'labels'                => [
				'name'                       => __( 'Authors', 'library-plugin' ),
				'singular_name'              => _x( 'Author', 'taxonomy general name', 'library-plugin' ),
				'search_items'               => __( 'Search Authors', 'library-plugin' ),
				'popular_items'              => __( 'Popular Authors', 'library-plugin' ),
				'all_items'                  => __( 'All Authors', 'library-plugin' ),
				'parent_item'                => __( 'Parent Author', 'library-plugin' ),
				'parent_item_colon'          => __( 'Parent Author:', 'library-plugin' ),
				'edit_item'                  => __( 'Edit Author', 'library-plugin' ),
				'update_item'                => __( 'Update Author', 'library-plugin' ),
				'view_item'                  => __( 'View Author', 'library-plugin' ),
				'add_new_item'               => __( 'Add New Author', 'library-plugin' ),
				'new_item_name'              => __( 'New Author', 'library-plugin' ),
				'separate_items_with_commas' => __( 'Separate authors with commas', 'library-plugin' ),
				'add_or_remove_items'        => __( 'Add or remove authors', 'library-plugin' ),
				'choose_from_most_used'      => __( 'Choose from the most used authors', 'library-plugin' ),
				'not_found'                  => __( 'No authors found.', 'library-plugin' ),
				'no_terms'                   => __( 'No authors', 'library-plugin' ),
				'menu_name'                  => __( 'Authors', 'library-plugin' ),
				'items_list_navigation'      => __( 'Authors list navigation', 'library-plugin' ),
				'items_list'                 => __( 'Authors list', 'library-plugin' ),
				'most_used'                  => _x( 'Most Used', 'author', 'library-plugin' ),
				'back_to_items'              => __( '&larr; Back to Authors', 'library-plugin' ),
			],
			'show_in_rest'          => true,
			'rest_base'             => 'author',
		] );
	}
}
trait PublisherTaxonomy{
	function publisher_init() {
		register_taxonomy( 'publisher', [ 'book' ], [
			'hierarchical'          => true,
			'public'                => true,
			'show_in_nav_menus'     => true,
			'show_ui'               => true,
			'show_admin_column'     => false,
			'query_var'             => true,
			'rewrite'               => true,
			'labels'                => [
				'name'                       => __( 'Publishers', 'library-plugin' ),
				'singular_name'              => _x( 'Publisher', 'taxonomy general name', 'library-plugin' ),
				'search_items'               => __( 'Search Publishers', 'library-plugin' ),
				'popular_items'              => __( 'Popular Publishers', 'library-plugin' ),
				'all_items'                  => __( 'All Publishers', 'library-plugin' ),
				'parent_item'                => __( 'Parent Publisher', 'library-plugin' ),
				'parent_item_colon'          => __( 'Parent Publisher:', 'library-plugin' ),
				'edit_item'                  => __( 'Edit Publisher', 'library-plugin' ),
				'update_item'                => __( 'Update Publisher', 'library-plugin' ),
				'view_item'                  => __( 'View Publisher', 'library-plugin' ),
				'add_new_item'               => __( 'Add New Publisher', 'library-plugin' ),
				'new_item_name'              => __( 'New Publisher', 'library-plugin' ),
				'separate_items_with_commas' => __( 'Separate Publishers with commas', 'library-plugin' ),
				'add_or_remove_items'        => __( 'Add or remove Publishers', 'library-plugin' ),
				'choose_from_most_used'      => __( 'Choose from the most used Publishers', 'library-plugin' ),
				'not_found'                  => __( 'No Publishers found.', 'library-plugin' ),
				'no_terms'                   => __( 'No Publishers', 'library-plugin' ),
				'menu_name'                  => __( 'Publishers', 'library-plugin' ),
				'items_list_navigation'      => __( 'Publishers list navigation', 'library-plugin' ),
				'items_list'                 => __( 'Publishers list', 'library-plugin' ),
				'most_used'                  => _x( 'Most Used', 'Publisher', 'library-plugin' ),
				'back_to_items'              => __( '&larr; Back to Publishers', 'library-plugin' ),
			],
			'show_in_rest'          => true,
			'rest_base'             => 'publisher',
		] );
	}
}
trait BookAjax {
	function book_search_func() {
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		$html = $this->ajax_return_html();
		echo json_encode(array('status'=>true,'html'=>$html));
		die();
	}
	function ajax_return_html() {
		if(isset($_POST['form_data'])) {
			parse_str($_POST['form_data'], $fData);
		}
		// echo '<pre>';print_r($fData);echo '</pre>';
		// die();
		$args = array(
			'post_type'		=> 'book',
			'post_status'	=> 'publish',
			'posts_per_page'	=> '5',
		);
		if (isset($fData['book-name'])) {
			$book_name = $fData['book-name'];
			if (!empty($book_name)) {
				$args['title'] = $book_name;
			}
		}
		if (isset($fData['book-author'])) {
			$book_author = $fData['book-author'];
			if (!empty($book_author)) {
				$args['tax_query'][] = array(
					'taxonomy' => 'author',
					'field' => 'name',
					'terms' => array($book_author),
					'include_children' => true,
					'operator' => 'IN'
				);
			}
		}
		if (isset($fData['publisher'])) {
			$publisher = $fData['publisher'];
			if (!empty($publisher)) {
				$args['tax_query'][] = array(
					'taxonomy' => 'publisher',
					'field' => 'term_id',
					'terms' => array($publisher),
					'include_children' => true,
					'operator' => 'IN'
				);
			}
		}
		if (isset($fData['book_price'])) {
			$ratting = $fData['book_price'];
			if (!empty($ratting)) {
				$args['meta_query'][] = array(
					'key' => 'book_price',
					'value' => $ratting,
					'compare' => '=',
				);
			}
		}
		// I could compete it Becaue I am ouut of time START
		if (isset($fData['price_from']) || isset($fData['price_to'])) {
			$price_from = !empty($fData['price_from']) ? $fData['price_from'] : 0;
			$price_to = !empty($fData['price_to']) ? $fData['price_to'] : 1000;
			if (!empty($ratting)) {
				$args['meta_query'][] = array(
					'key' => 'book_retting',
					'value' => array($price_from, $price_to),
					'compare' => 'BETWEEN',
				);
			}
		}
		// END

		$the_book_query = new WP_Query($args);
		ob_start();
		if ($the_book_query->have_posts()) {
			$number = 1;
			while ($the_book_query->have_posts()) {
				$the_book_query->the_post(); ?>
				<tr>
					<th scope="row"><?php echo $number; ?></th>
					<td><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title() ?></a></td>
					<td><?php echo get_post_meta(get_the_ID(),'book_price','true') ? '$'.get_post_meta(get_the_ID(),'book_price','true') : ''; ?></td>
					<td><?php echo implode(',', array_column(get_the_terms(get_the_ID(),'author'), 'name')); ?></td>
					<td><?php echo implode(',', array_column(get_the_terms(get_the_ID(),'publisher'), 'name')); ?></td>
					<td><?php echo get_post_meta(get_the_ID(),'book_retting','true'); ?></td>
				</tr>
				<?php $number++; }
			}
			$content = ob_get_clean();
			wp_reset_query();
			wp_reset_postdata();
			return $content;
		}
	}