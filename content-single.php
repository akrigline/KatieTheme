<?php
/**
 * @package KatieTheme
 */
?>

<?php
	$postID = get_the_ID();
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ) );
	$images = get_children(array(
			'exclude' => get_post_thumbnail_id(),
			'post_parent' => $post->ID,
			'post_type' => 'attachment',
			'post_mime_type' => 'image',
			'numberposts' => -1 )
	);
?>

<div id="preload" class="sr-only">
  <img src="img/katiephoto1.jpg">
</div>

<section class="fullHeight">
  <div class="container">
    <h4><?php the_title(); ?></h4>
  </div><!-- container -->

  <ul class="imageGallery list-unstyled">
		<?php foreach ($images as $image) {
					$attachmenturl = wp_get_attachment_url( $image->ID );
					$attachmentimage = wp_get_attachment_image_src( $image->ID );
					$attachmentalt = wp_get_attachment_image( $image->ID, 'alt' ); ?>		    
		  <li>
		    <figure>
		      <img src="<?php echo $attachmentimage[0]; ?>" alt="<?php echo $attachmentalt; ?>">
		      <figcaption>
		        <h5><?php echo $attachmentalt; ?></h5>
		      </figcaption>
		    </figure>
		  </li>
		<?php } ?>
  </ul><!-- imageGallery-->

  <div class="container">
  <div class="thumbContainer">
    <ul class="thumbnails list-unstyled clearfix">
	    <?php $count = -1; ?>
      <?php foreach ($images as $image) {
					$attachmenturl = wp_get_attachment_url( $image->ID );
					$attachmentimage = wp_get_attachment_image_src( $image->ID, thumbnail );
					$attachmentalt = wp_get_attachment_image( $image->ID, 'alt' ); ?>
				<?php $count++; ?>
			  <li>
			    <a href="" data-slide-index="<?php echo $count; ?>">
			      <img src="<?php echo $attachmentimage[0]; ?>" alt="<?php echo $attachmentalt; ?>">
		      </a>
			  </li>
			<?php } ?>
    </ul><!-- thumbnails -->
  </div>
  </div><!-- container -->
</section>