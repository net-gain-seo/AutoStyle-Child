<?php
    // BLOG HOME
    get_header();
?>
<div class="mast page-mast">
  <img src="http://209.126.119.193/~autostyle/wp-content/uploads/2018/03/page-header.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://209.126.119.193/~autostyle/wp-content/uploads/2018/03/page-header.jpg 2000w, http://209.126.119.193/~autostyle/wp-content/uploads/2018/03/page-header-300x53.jpg 300w, http://209.126.119.193/~autostyle/wp-content/uploads/2018/03/page-header-768x134.jpg 768w, http://209.126.119.193/~autostyle/wp-content/uploads/2018/03/page-header-1024x179.jpg 1024w" sizes="(max-width: 2000px) 100vw, 2000px" width="2000" height="350">

  <div class="container mast-overlay">
    <h1>Blog</h1>
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
  						<?php
              global $wp_query;
  						echo paginate_links( array(
  							'base' => str_replace( 9999999, '%#%', esc_url( get_pagenum_link( 9999999 ) ) ),
  							'format' => 'page/%#%/',
  							'current' => max( 1, get_query_var('paged') ),
  							'total' => $wp_query->max_num_pages,
                'prev_text'          => __('<img src="https://docuvaultdv.com/wp-content/uploads/2017/12/left-arrow.jpg" class="dirarrow">'),
                'next_text'          => __('<img src="https://docuvaultdv.com/wp-content/uploads/2017/12/right-arrow.jpg" class="dirarrow">'),
  							'add_args'           => false
  						) );
  						?>
  					</div>

        </div>

        <div class="col col-12 col-lg-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'blog_sidebar' ); ?>
            </div>

        </div>
    </div>
</div>
<?php echo do_shortcode( '[common_element id="917"]' ); ?>

<?php
    get_footer();
