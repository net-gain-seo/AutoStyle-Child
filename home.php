<?php
    // BLOG HOME
    get_header();
?>
<div class="mast page-mast">
   <?php
       if( has_post_thumbnail() ) {
           the_post_thumbnail();
       } else {
           echo '<img src="'.get_stylesheet_directory_uri(). '/img/page-header.jpg" />';
       }
       $mast_title       = get_post_meta( get_the_ID(), 'mast_title', true );
       $mast_description = get_post_meta( get_the_ID(), 'mast_description', true );
   ?>
   <div class="container mast-overlay">
       <?php
          if( !empty($mast_title) ) {
              echo '<h1 class="titleText">'.$mast_title.'</h1>';
          }
          else{
              echo '<h1 class="titleText">Blog</h1>';
          }
         if( !empty($mast_description) ) {
             echo wpautop( $mast_description );
         }
       ?>
   </div>
</div>

<div class="container-fluid  primaryBg"><div class="container">
<div class="row ">
<div class="col col-lg-12 col-12 ">
<p>Introduction Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
</div></div>

<div class="container">
    <div class="row blog-content">
        <div class="col col-12 col-lg-9">

            <div class="blog-listing">
            <?php while ( have_posts() ) : the_post(); ?>
                <article>

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php the_excerpt(); ?>

                    <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>" class="orangeText">Read more »</a>

                </article>
            <?php endwhile; // End of the loop. ?>
            </div>
            <div class="blogpagination">
              <div class="next-prev">
                  <div class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> <span>%title</span>', FALSE); ?></div>
                  <div class="next"><?php next_post_link('%link', '<span>%title</span> <i class="fa fa-angle-double-right"></i>', FALSE); ?></div>
              </div>
  					</div>
        </div>

        <div class="col col-12 col-lg-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'blog_sidebar' ); ?>
            </div>

        </div>
    </div>
</div>
<?php
    get_footer();
