

<?php $hoved = get_field('hoved');?>

<?php get_header(); ?>



    <section class="front_page_wrapper">


<?php get_sidebar(); ?>

  <!--
  --->


      <div class="topp_video_container">
        <iframe src="<?php echo $hoved['hoved_video']?>" class="topp_video_video" name="video_frame" frameborder="0" autoplay="false"  allowfullscreen></iframe>
      </div>



      <div class="video_gallery">
       <a href="<?php echo $hoved['video_1_url']?>" target="video_frame">
         <div class="video_gallery_video show-on-scroll">
            <img src="<?php echo $hoved['video_1_image']?>" class="video_gallery_image"/>
            <div class="video_gallery_content">
              <div class="video_gallery_text"><?php echo $hoved['video_1_title']?></div>
            </div>
          </div>
        </a>

        <a href="<?php echo $hoved['video_2_url']?>" target="video_frame">
          <div class="video_gallery_video show-on-scroll">
            <img src="<?php echo $hoved['video_2_image']?>" class="video_gallery_image"/>
            <div class="video_gallery_content">
                <div class="video_gallery_text"><?php echo $hoved['video_2_title']?></div>
            </div>
          </div>
        </a>

        <a href="<?php echo $hoved['video_3_url']?>" >
          <div class="video_gallery_video show-on-scroll">
            <img src="<?php echo $hoved['video_3_image']?>" class="video_gallery_image"/>
            <div class="video_gallery_content">
              <div class="video_gallery_text"><?php echo $hoved['video_3_title']?></div>
            </div>
          </div>
        </a>
       </div>


    <div class="more_button">See more</div>

<?php get_footer(); ?>
