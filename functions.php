add_filter( 'pre_get_posts', 'custom_wpquery' );
function custom_wpquery( $query ){
   if (is_post_type_archive( 'product' )) {
             
      
       $query->set('post_type', 'product');
       $query->set('orderby', 'title');
     $query->set('order', 'ASC' );
             
   }
  
}
