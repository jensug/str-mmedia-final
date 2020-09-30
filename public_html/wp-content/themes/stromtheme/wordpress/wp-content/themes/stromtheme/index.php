<?php get_header(); ?>



    <section class="front_page_wrapper">


<?php get_sidebar(); ?>

  <!--
    --->

  <img src="images/helene_olafsen_thumb.jpg" class="topp_video_thumb" />
      <div class="topp_video_container">
        <iframe src="https://youtu.be/10OFId5WXH0?autoplay=1?autoplay=1&title=0&byline=0&portrait=0" class="topp_video_video" name="video_frame" frameborder="0" autoplay="false"  allowfullscreen></iframe>
      </div>



      <div class="video_gallery">
        <a href="https://player.vimeo.com/video/336290788?autoplay=1" target="video_frame"><img src="images/helene_olafsen_thumb.jpg" class="video_gallery_video"/></a>
        <a href="https://www.youtube.com/embed/JvdKYkNFp74?autoplay=1" target="video_frame"><img src="images/trans_thumb.jpeg" class="video_gallery_video"/></a>
        <a href="https://player.vimeo.com/video/336553172?autoplay=1" target="video_frame"><img src="images/tipping_thumb.jpeg" class="video_gallery_video"/></a>
        </div>




              <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="post-header">
             <div class="date"><?php the_time( 'M j y' ); ?></div>
             <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
             <div class="author"><?php the_author(); ?></div>
          </div><!--end post header-->
          <div class="entry clear">
             <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
             <?php the_content(); ?>
             <?php edit_post_link(); ?>
             <?php wp_link_pages(); ?></div>
          <!--end entry-->
          <div class="post-footer">
             <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
          </div><!--end post footer-->
          </div><!--end post-->
      <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
          <div class="navigation index">
             <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
             <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
          </div><!--end navigation-->
      <?php else : ?>
      <?php endif; ?>


<?php get_footer(); ?>
