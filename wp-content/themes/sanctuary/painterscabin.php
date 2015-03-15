<?php
get_header(); ?>

<?php
add_action( 'init', 'create_my_post_types' );

function create_my_post_types() {
  register_post_type( 'painterscabin',
    array(
      'labels' => array(
        'name' => __( 'Painter's Cabin' ),
        'singular_name' => __( 'Painter's Cabin' )
      ),
      'public' => true,
    )
  );
}
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
