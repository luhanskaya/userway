<?php
$post_id = isset($post_id) ? $post_id : '';
if( have_rows('repeatable_blocks', $post_id) ):
    while ( have_rows('repeatable_blocks', $post_id) ) : the_row();

        get_template_part('template-parts/flexible-content-part/content', get_row_layout());

    endwhile;
endif;
