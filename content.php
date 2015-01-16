<?php
/**
 * @package KatieTheme
 */
?>

<?php
	$postID = get_the_ID();
	$thumbID = get_post_thumbnail_id( $post->ID );
	$thumbSm = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
	$thumbMd = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
	$thumbLg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
	$thumbXl = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>

<li class="col-xs-6 col-sm-6 col-md-4">
	<figure>
	    <img sizes="100vw" 
    			srcset="<?php echo $thumbSm[0]; ?> <?php echo $thumbSm[1]; ?>w, 
    							<?php echo $thumbMd[0]; ?> <?php echo $thumbMd[1]; ?>w, 
    							<?php echo $thumbLg[0]; ?> <?php echo $thumbLg[1]; ?>w, 
    							<?php echo $thumbXl[0]; ?> <?php echo $thumbXl[1]; ?>w"
    			alt="<?php the_title(); ?>">
	    <figcaption class="hovertext">
	      <a href="<?php the_permalink(); ?>">
	        <h5><?php the_title(); ?></h5>
	      </a>
	    </figcaption>
	</figure>
</li>