<?php get_header() ?>

<!-- Page Content -->
<div class="container">

  <!-- Heading Row -->
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <div class="row align-items-center my-5">
          <div class="col-lg-7">
            <!--   img-fluid rounded mb-4 mb-lg-0-->
              <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail( 'post-thumbnails', array( 'class' => 'img-fluid rounded mb-4 mb-lg-0' ) );
                                                          } ?>
              </a>
          </div>
          <!-- /.col-lg-8 -->
          <div class="card text-left col-lg-5">
            
            <div class="card-header">
              <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
            </div>
            <div class="card-body">
              <p class="card-text"> <?php the_excerpt();?></p>
            </div>
            <div class="card-footer text-muted">
            <?php echo get_the_date(); ?> /  <?php the_category(',') ; ?> / <?php the_author(); ?>
            </div>
          </div>
      </div>

        <!-- /.row -->
    <?php endwhile;
  endif; ?>

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>

    <!-- Content Row -->
    <div class="row">

      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card Two</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card Three</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
       <!-- /.col-md-4 -->
       <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Card Three</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary btn-sm">More Info</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->


    </div>
    <!-- /.row -->

      </div>
      <!-- /.container -->



      <?php get_footer(); ?>