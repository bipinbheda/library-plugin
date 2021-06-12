<?php
/**
 * Registers the `book` post type.
 */

/**
 * Plugin base class
 */
class BookBase
{
	// Here I have used Traits for reduce file size, these traits are located inside classes/traits.php file
	use BookCPT,AuthorTaxonomy,PublisherTaxonomy,BookAjax;

	function __construct(){
		add_action( 'init', [$this,'book_init'] );
		// add_action( 'admin_enqueue_scripts', [$this,'library_plugin_scripts'] );
		add_action( 'wp_enqueue_scripts', [$this,'library_plugin_scripts'] );
		add_action( 'init', [$this,'author_init'] );
		add_action( 'init', [$this,'publisher_init'] );
		add_action( 'add_meta_boxes', [$this,'book_extra_fields'] );
		add_filter( 'use_block_editor_for_post', '__return_false', 10);
		add_action( 'save_post', [$this,'save_library_meta_box_data'] );
		add_action( 'init', [$this,'register_search_shortcode'] );

		add_action( 'wp_ajax_book_search', [$this,'book_search_func']);
		add_action( 'wp_ajax_nopriv_book_search', [$this,'book_search_func']);
	}

	public function book_extra_fields() {
		add_meta_box(
			'library-book-metabox',
			__( 'Library Book Metabox', 'library-plugin' ),
			[$this,'book_meta_box_callback'],
			'book'
		);
	}
	public function book_meta_box_callback($post) {
		wp_nonce_field( 'book-meta_nonce', 'book-meta_nonce' );
		$book_price = get_post_meta( $post->ID, 'book_price', true );
		$book_retting = get_post_meta( $post->ID, 'book_retting', true );
		echo '<label>Book Price</label><input type="range" name="book_price" min="1" max="1000" value="'. esc_attr( $book_price ).'"/><br />';
		echo '<br /><label>Book Ratting</label><input type="range" name="book_retting" min="1" max="5" value="'. esc_attr( $book_retting ).'"/>';
	}
	public function save_library_meta_box_data( $post_id ) {

		if ( ! isset( $_POST['book-meta_nonce'] ) ) { return; }

		if ( ! wp_verify_nonce( $_POST['book-meta_nonce'], 'book-meta_nonce' ) ) { return; }

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) { return; }

		if ( isset( $_POST['post_type'] ) && 'book' == $_POST['post_type'] ) {
			if ( ! current_user_can( 'edit_page', $post_id ) ) { return; }
		} else {
			if ( ! current_user_can( 'edit_post', $post_id ) ) { return; }
		}

		if ( ! isset( $_POST['book-meta_nonce'] ) ) { return; }

		$book_price = sanitize_text_field( $_POST['book_price'] );
		$book_retting = sanitize_text_field( $_POST['book_retting'] );
		update_post_meta( $post_id, 'book_price', $book_price );
		update_post_meta( $post_id, 'book_retting', $book_retting );
	}
	public function library_plugin_scripts() {
		wp_enqueue_script('jquery');
		wp_enqueue_style('library-book-bs5',PLUGIN_DIR_URL.'assets/bootstrap.css');
		wp_enqueue_script('library-book-custom',PLUGIN_DIR_URL.'assets/custom.js');
		wp_localize_script('library-book-custom','ajax_data',array('ajax_url' => admin_url( 'admin-ajax.php' ) ));
	}

	public function register_search_shortcode() {
		add_shortcode('book-search',[$this,'book_search_callback']);
	}

	public function book_search_callback() {
		ob_start();
		include PLUGIN_BASE_DIR.'classes/shortcode-html.php';
		$content = ob_get_clean();
		return $content;
	}
}
