<?php
/* Template Name: Work */
 ?>

<?php $work = get_field('work');?>


<?php get_header(); ?>



      <section class="front_page_display">
     


<?php get_sidebar(); ?>

        <div class="video_gallery">



          <?php

            $loopIndex = 1;
            $imgSrc = 'video_image_' . $loopIndex;
            $videoSrc = 'video_url_' . $loopIndex;
            $titleSrc = 'video_title_' . $loopIndex;

            while($loopIndex <= 18){

             
              
              if(!empty($work[$videoSrc])){
                echo '<a href="' . $work[$videoSrc] . '" target="video_frame"><div class="video_gallery_video show-on-scroll"><img src="' . $work[$imgSrc] . '" class="video_gallery_image"/><div class="video_gallery_content"><div class="video_gallery_text">' . $work[$titleSrc] . '</div></div></div></a>';

              }
            
              $loopIndex +=1;
              $imgSrc = 'video_image_' . $loopIndex;
              $videoSrc = 'video_url_' . $loopIndex;
              $titleSrc = 'video_title_' . $loopIndex;
            }


          ?>

  </div>

      </section>

      <div class="spacing"></div>



<?php get_footer(); ?>
