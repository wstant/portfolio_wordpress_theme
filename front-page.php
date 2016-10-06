<?php get_header();  ?>

<?php 
  function show_post($path){
   $post = get_page_by_path($path);
   $content = apply_filters('the_content', $post->post_content);
   echo $content;
  }
  ?>

<div class="main">
  
   <div class="wrapper">
     <div class="fixed_nav">
       <ul>
         <li><a href="#header"></a></li>
         <li><a href="#portfolio"></a></li>
         <li><a href="#skills"></a></li>
         <li><a href="#blog"></a></li>
         <li><a href="#contact"></a></li>
       </ul>
     </div>
   </div>

    <!-- <div class="content"> -->

    <!--*********  Header  ***********-->
  <section class="header" id="header" style="background:
      linear-gradient(
        rgba(255,255,255,0.9),
        rgba(255,255,255,0.9)),
        url(<?php echo hackeryou_featured_image_url($post) ?>); 
      background-size: cover; 
      background-attachment: fixed;">
    
      <div class="content wrapper">
        <div class="section_heading">
          <div class="text">
              <p>01</p>
              <div class="keyline"></div>
              <h3>A little about me</h3>
          </div>
        </div>
        <div class="section_content">
          <div class="text">
            <h1><?php the_field('greeting') ?></h1>
            <div class="line"></div>
            <p><?php the_field('about_me') ?></p>
          </div>
        </div>
        <div class="section_nav">
          <ul>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
          </ul>
        </div>
      </div> <!-- /.content -->
      
    <!-- </header> -->
    </section>

  <!--*********  Work  **************-->


   <section class="portfolio light-nav" id="portfolio" style="background:
      linear-gradient(
       rgba(81,112,124, 0.8),
        rgba(81,112,124, 0.8)),
        url(http://localhost:8888/willPortfolio/wp-content/uploads/2016/08/apartments-1024x683-compressor.jpeg); 
      background-size: cover;
      background-attachment: fixed;">
    <div class="wrapper">
   
      <?php $portfolio = new WP_Query(
       array(
         'post_type' => 'portfolio',
         'posts_per_page' => -1,
         'order' => 'ASC'
       )
      ); ?>

      <div class="section_heading">
        <div class="text">
            <p>02</p>
            <div class="keyline"></div>
            <h3>Latest Work</h3>
        </div>
      </div>
       <div class="carousel">
        <?php if ($portfolio->have_posts()): ?>
         <?php while ($portfolio->have_posts()): $portfolio->the_post(); ?>

           <div class="carousel-cell <?php echo $post->post_name ?>">
             <div class="cell_content">
              <div class="content_top">
                 <h2><?php the_title(); ?></h2>
                 <p class="tags"><?php the_field('tags'); ?></p>
                 <div class="line"></div>
              </div>
              <div class="content_middle">
                 <p class="description"><?php the_field('short_desc'); ?></p>
                 <a href="<?php the_field('link_to_site'); ?>" class="link_to_site">Continue &#8594;</a>
              </div>
              <div class="content_bottom">
                 <!-- <a href="<?php the_field('link_to_site'); ?>" class="link_to_site">Continue</a> -->
              </div>
             </div>
             <?php while(have_rows('images')): the_row(); ?>
               <?php $image = get_sub_field('image'); ?>
               
               <div class="cell_image">
                <img src="<?php echo $image['sizes']['medium']; ?>"  alt="">
              </div>
             <?php endwhile; ?>
  
           </div>
         <?php endwhile; ?>
           <?php wp_reset_postdata(); ?>
         <?php endif; ?>
       </div>
      <div class="section_nav">
          <ul>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
          </ul>
        </div>
      </div>
  </section>  


  <!--*********  Skills  ************-->

   <section class="skills" id="skills" style="background:
      linear-gradient(
       rgba(255,255,255,0.9),
       rgba(255,255,255,0.9)),
        url(http://localhost:8888/willPortfolio/wp-content/uploads/2016/08/pointreyes-compressor-1024x684.jpeg); 
      background-size: cover;
      background-attachment: fixed;">
    <div class="wrapper">
      <div class="section_heading">
        <div class="text">
            <p>03</p>
            <div class="keyline"></div>
            <h3>My Chops</h3>
        </div>
      </div>

     <?php $args = array(
       'pagename' => 'skills',
     ) ?>
     <?php $skills_query = new WP_Query($args); ?>

     <?php // Start the loop ?>
     <?php if ( $skills_query->have_posts() ) while ( $skills_query->have_posts() ) : $skills_query->the_post(); ?>



       <!-- <h2><?php the_title(); ?></h2> -->
       <div class="skills_gallery">
       <?php    
       if( have_rows('skills_icons') ):

           while( have_rows('skills_icons') ) : the_row(); 
               
               ?>
               <div class="the_skill">
                 <?php the_sub_field('skill_icon'); ?>
                 <p><?php the_sub_field('skill_title'); ?></p>
               </div>
          <?php
           endwhile;
       endif;
       ?>
       </div>

       <div class="section_nav">
          <ul>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
          </ul>
        </div>


     <?php endwhile; // end the loop?>
     <?php wp_reset_postdata(); ?>
    </div>
   </section>



  <!--*********  Blog  **************-->
     
  <section class="blog light-nav" id="blog" style="background:
      linear-gradient(
       rgba(81,112,124, 0.8),
       rgba(81,112,124, 0.8)),
        url(http://localhost:8888/willPortfolio/wp-content/uploads/2016/08/canal-compressor-1024x716.jpeg); 
      background-size: cover;
      background-attachment: fixed;">
    <div class="wrapper">
      <div class="blog_content">
        
        <div class="section_heading">
          <div class="text">
              <p>04</p>
              <div class="keyline"></div>
              <h3>From the Blog</h3>
          </div>
        </div>
        
        <div class="blog_posts">

          <div class="blog_posts_title">
            <h2>Latest Posts</h2>
            <p>Some thoughts and tips I'd like to share with you</p>
          </div>
          
          <div class="blog_posts_content">
            <?php $blog = new WP_Query(
             array(
               'post_type' => 'post',
               'posts_per_page' => -1,
               'order' => 'ASC'
             )
            ); ?>
            <?php if ($blog->have_posts()): ?>
             <?php while ($blog->have_posts()): $blog->the_post(); ?>
               <!-- <div class="<?php echo $post->post_name ?> post_item"> -->
               <div class="post_item">
                  <div class="item_title">
                   <h3><?php the_title(); ?></h3>
                   <p>Posted on <span><?php echo get_the_date('j F Y'); ?></span> by <span><?php the_author() ?></span> in <span><?php the_category([0]) ?></span></p>
                  </div>
                  <div class="item_content">
                   <!-- <?php the_field('short_desc'); ?> -->
                   <?php the_excerpt(); ?>
                  </div>

               </div> <!-- end post item  -->

               <!-- </div> -->
             <?php endwhile; ?>
               <?php wp_reset_postdata(); ?>
             <?php endif; ?>   
           </div> <!-- end blog_posts_content -->


        </div>  <!-- end blog_posts -->


         <div class="section_nav">
          <ul>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
            <a href=""><li></li></a>
          </ul>
        </div>

      </div>
    </div>
  </section>

  <!--*********  Contact  ***********-->

   <section class="contact" id="contact" style="background:
      linear-gradient(
      rgba(255,255,255,0.8),
      rgba(255,255,255,0.8)),
        url(http://localhost:8888/willPortfolio/wp-content/uploads/2016/08/clouds-compressor-1024x731.jpeg); 
      background-size: cover;
      background-attachment: fixed;">
    <div class="wrapper">
    <div class="contact_content">

    <?php $args = array(
      'pagename' => 'contact',
    ) ?>
    <div class="section_heading">
      <div class="text">
                  <p>05</p>
                  <div class="keyline"></div>
                  <h3>Contact</h3>
              </div>
    </div>
    <div class="contact_info">
      <!-- <div class="info_left"></div> -->
        <?php $contact_query = new WP_Query($args); ?>
        <?php // Start the loop ?>
        <?php if ( $contact_query->have_posts() ) while ( $contact_query->have_posts() ) : $contact_query->the_post(); ?>
            <?php the_content(); ?>
            
            
           <div class="info_left">
             <?php the_content(); ?>
             <?php echo do_shortcode("[huge_it_maps id='1']"); ?>
           </div>
          <div class="info_right">
            <div class="right_title">
              <h2><?php the_title(); ?></h2>
              <div class="line"></div>
            </div>
            <div class="right_content">
              <p><span>Phone :  </span><?php the_field('phone') ?></p>
              <p><span>Email :  </span><?php the_field('email') ?></p>
            </div>
            <div class="right_bottom">
             
            </div>
          </div>
        <?php endwhile; // end the loop?>
        <?php wp_reset_postdata(); ?>
    </div>
    <div class="section_nav">
      <ul>
        <a href="#header"><li></li></a>
        <a href="#portfolio"><li></li></a>
        <a href="#skills"><li></li></a>
        <a href="#blog"><li></li></a>
        <a href="#contact"><li></li></a>
      </ul>
    </div>
    </div>
    </div>
   </section>
</div> <!-- /.main -->

<?php get_footer(); ?>