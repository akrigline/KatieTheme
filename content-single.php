<?php
/**
 * @package KatieTheme
 */
?>

<?php
  $postID = get_the_ID();
  $images = get_children(array(
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
        $imageSm = wp_get_attachment_image_src( $image->ID, 'thumbnail' );
        $imageMd = wp_get_attachment_image_src( $image->ID, 'medium' );
        $imageLg = wp_get_attachment_image_src( $image->ID, 'large' );
        $imageXl = wp_get_attachment_image_src( $image->ID, 'full' );
        $attachmentalt = wp_get_attachment( $image->ID ); ?>   
      <li>
        <figure>
          <img sizes="100vw" 
                srcset="<?php echo $imageSm[0]; ?> <?php echo $imageSm[1]; ?>w, 
                        <?php echo $imageMd[0]; ?> <?php echo $imageMd[1]; ?>w, 
                        <?php echo $imageLg[0]; ?> <?php echo $imageLg[1]; ?>w, 
                        <?php echo $imageXl[0]; ?> <?php echo $imageXl[1]; ?>w"
                alt="<?php echo $attachmentalt['alt']; ?>">
          <figcaption>
            <h5><?php echo $attachmentalt['alt']; ?></h5>
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
          $attachmentimage = wp_get_attachment_image_src( $image->ID, thumbnail );
          $attachmentalt = wp_get_attachment( $image->ID ); ?>
        <?php $count++; ?>
        <li>
          <a href="" data-slide-index="<?php echo $count; ?>">
            <img src="<?php echo $attachmentimage[0]; ?>" alt="<?php echo $attachmentalt['alt']; ?>">
          </a>
        </li>
      <?php } ?>
    </ul><!-- thumbnails -->
  </div>
  </div><!-- container -->
</section>