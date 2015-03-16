<?php
/**
*template name: cabin-details
 */

get_header(); ?>

<div class="cabin-name"<h1><?php the_field('cabin_name');
?></h1>
</div>
<p class="description"><?php the_field('description');
?></p>
<p class="features"><?php the_field('features');
?></p>
<p class="pricing"><?php the_field('pricing');
?></p>


<?php if (function_exists('slideshow')) { slideshow($output = true, $post_id = false, $gallery_id = false, $params = array()); } ?>

<?php get_footer(); ?>
