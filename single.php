<?php get_header();?>
<div class="container ">
<div class="row">
<div class="col-12 col-md-8 ">
<?php 
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <h2 class="text-justify"><?php the_title(); ?></h2>
    
    <div class="text-justify">
    <?php if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid rounded mb-4 mb-lg-0' ) );
                                                          } ?>

      <h4><?php the_excerpt();?></h4>
      <?php the_content(); ?>
    </div>
    
    <div class="card-footer text-muted">
            <?php echo get_the_date(); ?> /  <?php the_category(',') ; ?> / <?php the_author(); ?>
            </div>

    <?php endwhile;
  endif; ?>
  </div>

<div class="col-12 col-md-3">
<?php get_sidebar();?>
</div>

</div>
</div>
<?php get_footer();?>