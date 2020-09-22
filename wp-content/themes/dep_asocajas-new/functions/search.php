<?php

function bst_search_form( $form ) {
    $form = 
    '<form class="search-top" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
      <input class="search-top__input form-control" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Escribe una palabra clave', 'bst') . '" name="s" id="s" />
      <input type="hidden" name="post_type[]" value="post"/>
      <input type="hidden" name="post_type[]" value="revistas"/>
      <button type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'bst') .'" class="search-top__button btn btn-default"><i class="fa fa-search"></i></button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'bst_search_form' );
