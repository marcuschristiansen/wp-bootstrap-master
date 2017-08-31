<?php

/**
 * Adds Social_Media_Widget widget.
 */
class Social_Media_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'social_media_widget', // Base ID
			esc_html__( 'Social Media Icons', 'payfast' ), // Name
			array( 'description' => esc_html__( 'Social Media Icons Widget', 'payfast' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}

		echo $this->get_social_media_icons();
		echo $args['after_widget'];
	}

	/**
	 * Get all the social media icons.
	 *
	 * @see WP_Widget::get_social_media_icons()
	 *
	 */
	private function get_social_media_icons() {
		$icons = '<div class="row social-icons">';
		$logo_path = get_template_directory_uri() . '/img/';

		if(get_theme_mod('twitter')) {
			$url = get_theme_mod('twitter');
			$img = $logo_path . '/twitter-icon.png';

			$icons .= '<a href="';
			$icons .= $url;
			$icons .= '"><img src="';
			$icons .= $img;
			$icons .= '" alt="Twitter Icon"></a>';
		}

		if(get_theme_mod('facebook')) {
			$url = get_theme_mod('facebook');
			$img = $logo_path . '/facebook-icon.png';

			$icons .= '<a href="';
			$icons .= $url;
			$icons .= '"><img src="';
			$icons .= $img;
			$icons .= '" alt="Facebook Icon"></a>';
		}

		if(get_theme_mod('linkedin')) {
			$url = get_theme_mod('linkedin');
			$img = $logo_path . '/linkedin-icon.png';

			$icons .= '<a href="';
			$icons .= $url;
			$icons .= '"><img src="';
			$icons .= $img;
			$icons .= '" alt="LinkedIn Icon"></a>';
		}

		if(get_theme_mod('google-plus')) {
			$url = get_theme_mod('google-plus');
			$img = $logo_path . '/google-icon.png';

			$icons .= '<a href="';
			$icons .= $url;
			$icons .= '"><img src="';
			$icons .= $img;
			$icons .= '" alt="Google+ Icon"></a>';
		}

		$icons .= '</div>';

		return $icons;
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( '', 'payfast' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'payfast' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		return $instance;
	}

}

// register widget
add_action( 'widgets_init', function(){
	register_widget( 'Social_Media_Widget' );
});