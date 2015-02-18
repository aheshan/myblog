<?php

add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
	return '<a class="btn btn-primary" href="' . get_permalink() . '">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>';
}
?>