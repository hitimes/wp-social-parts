<?php
// Facebook Open Graph
add_action('wp_head', 'add_fb_open_graph_tags');
function add_fb_open_graph_tags() {
    if (is_single()) {
        global $post;
        if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_object = get_post($thumbnail_id);
            $image = $thumbnail_object->guid;
        } else {    
            $image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
        }
        //$description = get_bloginfo('description');
        $description = my_excerpt( $post->post_content, $post->post_excerpt );
        $description = strip_tags($description);
        $description = str_replace("\"", "'", $description);
?>
<!-- Facebook -->
<meta property="og:title" content="<?php the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:image" content="<?php echo $image; ?>" />
<meta property="og:url" content="<?php the_permalink(); ?>" />
<meta property="og:description" content="<?php echo $description ?>" />
<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
<?php   }
}