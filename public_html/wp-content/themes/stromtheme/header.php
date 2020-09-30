<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>STRØM MEDIA</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <?php

      if($pagename == 'contact'){
        echo '<style> #contact{ border-bottom: 1px solid gray; opacity: 0.5; } </style> ';
      }elseif ($pagename == 'work') {
        echo '<style> #work{ border-bottom: 1px solid gray; opacity: 0.5; } </style> ';
      }else {
        echo '<style> #home{ border-bottom: 1px solid gray; opacity: 0.5; } </style> ';
      }


    ?>

  </head>
  <body>

    <section class="padding">
      <section class="title">
          <div class="title_text">STRØM MEDIA</div>
      </section>


<section class="menu" id="main-menu">
  <div class="page_linker" id="home">HOME</div>
  <div class="page_linker" id="work">WORK</div>
  <div class="page_linker" id="contact">CONTACT</div>
</section>

      <section class="front_page_display">
      </section>
