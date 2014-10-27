<?php  //Uncomment in WP sites.
        // $excerpt = strip_tags(get_the_excerpt());
        // $post_thumbnail_id = get_post_thumbnail_id($post->ID);
        // $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );

    ?>
<link rel="stylesheet" href="style.css" type="text/css">

<div class="hide"><?php $svgpath = "svgs/social-sprites.svg"; 
      include_once($svgpath); ?>
</div>

<div class="social">
    <ul>
        <li class="facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php //the_permalink(); ?>" class="popup">
                <svg class="facebook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use></svg><span class="text">facebook</span>
            </a>
        </li>
        <li class="linkedin">
            <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php //the_permalink(); ?>&amp;title=<?php //the_title(); ?>&amp;summary=<?php //echo $excerpt; ?>" class="popup">
                <svg class="linkedin"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg><span class="text">linkedin</span>
            </a>
        </li>
        <li class="twitter">
            <a href="http://twitter.com/home?status=<?php //the_title(); ?> <?php //the_permalink(); ?> via @ZenmanDenver" class="popup">
                <svg class="twitter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg><span class="text">twitter</span>
            </a>
        </li>
       <li class="reddit">
            <a href="http://www.reddit.com/submit?url=<?php //the_permalink(); ?>">
                <svg class="reddit"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#reddit"></use></svg><span class="text">reddit</span>
            </a>
        </li>
        <li class="googleplus">
            <a href="https://plus.google.com/share?url=<?php //the_title(); //the_permalink(); ?>" class="popup">
                <svg class="google-plus"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#google-plus"></use></svg><span class="text">google+</span>
            </a>
        </li>
        <li class="pinterest">
            <a href="http://pinterest.com/pin/create/button/?url=<?php //the_permalink(); ?>&amp;media=<?php echo $post_thumbnail_url; ?>&amp;description=<?php //echo $excerpt; ?>">
                <svg class="pinterest"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#pinterest"></use></svg><span class="text">pinterest</span>
            </a>
        </li>
    </ul>
</div>