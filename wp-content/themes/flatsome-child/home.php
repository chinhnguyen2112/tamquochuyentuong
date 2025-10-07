<?php get_header(); ?>
<main id="main" class="">
   <div id="content" role="main" class="content-area">
      <section class="section container has-parallax" id="section_hero">
         <div class="bg section-bg fill bg-fill parallax-active" 
            data-parallax-container=".section" 
            data-parallax-background 
            data-parallax="-3">
            <div class="section-bg-overlay absolute fill"></div>
         </div>
         <div class="section-content relative">
            <!-- Slider -->
            <div class="slider-wrapper relative" id="slider-home">
               <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
                  data-flickity-options='{
                  "cellAlign": "center",
                  "imagesLoaded": true,
                  "lazyLoad": 1,
                  "wrapAround": true,
                  "autoPlay": 6000,
                  "pauseAutoPlayOnHover": true,
                  "prevNextButtons": true,
                  "contain": true,
                  "adaptiveHeight": true,
                  "pageDots": true,
                  "draggable": true
                  }'>
                  <?php while( have_rows('hero', 'option') ): the_row(); 
                        $image = get_sub_field('image', 'option'); 
                  ?>
                  <div class="img has-hover">
                     <div class="img-inner dark">
                        <img src="<?php echo $image['url']; ?>" 
                           alt="" width="1020" height="475"/>
                     </div>
                  </div>
                  <?php endwhile; ?>
               </div>
            </div>
            <!-- Row dưới slider -->

            <div class="row" id="row-1668508320">
               <?php 
                $image = get_field('hero_child_1', 'option'); 
               ?>
               <div id="col-277211859" class="col medium-6 small-12 large-6">
                  <div class="col-inner">
                     <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1628704216">
                        <div class="img-inner image-cover dark" style="padding-top:213px;">
                           <img loading="lazy" decoding="async" width="680" height="417" src="<?php echo $image['url']; ?>" class="attachment-large size-large" alt="">						
                        </div>
                        <style>
                           #image_1628704216 {
                           width: 100%;
                           }
                        </style>
                     </div>
                  </div>
               </div>
               <?php 
                  $image = get_field('hero_child_23', 'option'); 
                ?>
               <div id="col-1524985654" class="col medium-6 small-12 large-6">
                  <div class="col-inner">
                     <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_1452315221">
                        <div class="img-inner dark">
                           <img loading="lazy" decoding="async" width="538" height="178" src="<?php echo $image['url']; ?>" class="attachment-large size-large" alt="">						
                        </div>
                        <style>
                           #image_1452315221 {
                           width: 100%;
                           }
                        </style>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <style>
            #section_hero {
            padding-top: 0;
            padding-bottom: 0;
            min-height: 424px;
            background-color: #fff;
            }
            #section_hero .section-bg-overlay {
            background-color: rgba(0,0,0,0);
            }
            #section_hero .section-bg {
            background-position: 65% 40%;
            }
         </style>
      </section>
      <section class="section" id="section_557966900">
         <div class="section-content relative container">
            <!-- Page Header / Title -->
            <div class="page-header-wrapper" id="page-header-1859816242">
                  <div class="page-title text-center">
                     <h1 class="entry-title mb-0">
                        THƯ VIỆN TAM QUỐC HUYỄN TƯỚNG TRỌN BỘ
                     </h1>
                  </div>
            </div>

            <!-- Decorative Image -->
            <div class="img has-hover" id="image_1673312468" style="width:100%; text-align:center; margin-top:20px;">
                  <img loading="lazy" decoding="async" 
                     src="http://localhost/wordpress/wp-content/uploads/2025/10/3bca4da790f1187c3be1b4b2e59a0273e04244af.png" 
                     alt="" 
                     style="max-width:100%; height:auto;">
            </div>
         </div>

         <!-- Section Padding -->
         <style>
            #section_557966900 {
                  position: relative;
                  padding: 30px 0;
            }

            /* Optional: Title styling */
            #section_557966900 .entry-title {
                  font-size: 2rem;
                  font-weight: 700;
                  color: #00BFFF; /* Thay đổi màu chữ nếu muốn */
            }
         </style>
      </section>
      <section class="section" id="section_1157224611">
         <div class="bg section-bg fill bg-fill bg-loaded"></div>
         <div class="section-content relative">
            <!-- Tiêu đề -->
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal">
                  <b></b>
                  <span class="section-title-main short-underline" style="color:rgb(67, 142, 240);">
                     TIÊU ĐIỂM TƯỚNG TQHT
                  </span>
                  <b></b>
               </h3>
            </div>

            <!-- Slider -->
            <div class="container">
               <div class="slider-wrapper relative" id="slider-1157224611">
                  <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal slider-show-nav"
                     data-flickity-options='{
                        "cellAlign": "left",
                        "imagesLoaded": true,
                        "lazyLoad": 1,
                        "freeScroll": false,
                        "wrapAround": true,
                        "autoPlay": 4000,
                        "pauseAutoPlayOnHover": true,
                        "prevNextButtons": true,
                        "contain": true,
                        "adaptiveHeight": false,
                        "pageDots": false,
                        "groupCells": 6
                     }'>

                     <?php
                     $args = array(
                        'post_type'      => 'quan_ly_tuong',
                        'posts_per_page' => 10,
                        'post_status'    => 'publish',
                     );
                     $query = new WP_Query($args);

                     if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                           $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                           if (!$thumb_url) {
                              $thumb_url = get_template_directory_uri() . '/assets/images/no-image.jpg'; // fallback image
                           }
                     ?>
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                              </div>
                              <div class="box-text text-center">
                                 <a href="<?php the_permalink(); ?>" class="button primary is-outline new-button" style="border-radius:99px;">
                                    <span><?php the_title(); ?></span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <?php
                        endwhile;
                        wp_reset_postdata();
                     else :
                        echo '<p class="text-center">Chưa có tướng nào được thêm.</p>';
                     endif;
                     ?>

                  </div>
               </div>
            </div>

            <div class="button-all">
               <a href="<?php echo get_post_type_archive_link('quan_ly_tuong'); ?>" 
                  class="button primary is-outline is-smaller center all-button" 
                  style="border-radius:99px;">
                  <span>Xem Tất Cả</span>
               </a>
            </div>
         </div>

         <style>
            #section_1157224611 {
               padding-top: 50px;
               padding-bottom: 50px;
               background-color: #fff;
            }
            #section_1157224611 .box-image img {
               border-radius: 12px;
               transition: transform 0.3s ease;
               width: 100%;
               height: auto;
            }
            #section_1157224611 .box-image img:hover {
               transform: scale(1.05);
            }
         </style>
      </section>

      <section class="section" id="section_814329341">
         <div class="bg section-bg fill bg-fill  bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
         </div>
         <div class="section-content relative">
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal"><b></b><span class="section-title-main short-underline" style="color:rgb(18, 142, 239);">tính năng tam quốc huyễn tướng</span><b></b></h3>
            </div>
            <div class="row" id="row-485541358">
               <div id="col-1394755986" class="col medium-8 small-12 large-8">
                  <div class="col-inner">
                     <div class="row" id="row-tinh-nang">
                           <?php
                           $args = array(
                              'post_type'      => 'tinh_nang',
                              'posts_per_page' => 18,
                              'post_status'    => 'publish',
                           );
                           $query = new WP_Query($args);
                           $i = 0;

                           if ($query->have_posts()) :
                              while ($query->have_posts()) : $query->the_post();
                                 // Mỗi hàng có 3 cột
                                 if ($i % 3 === 0 && $i > 0) echo '</div><div class="row">';
                           ?>
                              <div id="col-<?php echo wp_rand(); ?>" class="col medium-4 small-12 large-4">
                                 <div class="col-inner">
                                       <div class="box has-hover box-text-bottom">
                                          <div class="box-image">
                                             <div class="">
                                                   <a href="<?php the_permalink(); ?>">
                                                      <?php if (has_post_thumbnail()) : ?>
                                                         <?php the_post_thumbnail('medium', array('loading' => 'lazy', 'decoding' => 'async')); ?>
                                                      <?php else : ?>
                                                         <img loading="lazy" decoding="async" width="154" height="79"
                                                               src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png"
                                                               alt="<?php the_title(); ?>">
                                                      <?php endif; ?>
                                                   </a>
                                             </div>
                                          </div>
                                          <div class="box-text text-center">
                                             <div class="box-text-inner">
                                                   <div class="container section-title-container">
                                                      <h4 class="section-title section-title-center">
                                                         <b></b>
                                                         <a href="<?php the_permalink(); ?>" class="section-title-main" style="font-size:68%;color:rgb(110,137,225);">
                                                               <?php the_title(); ?>
                                                         </a>
                                                         <b></b>
                                                      </h4>
                                                   </div>
                                             </div>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                           <?php
                                 $i++;
                              endwhile;
                              wp_reset_postdata();
                           else :
                              echo '<p>Chưa có bài viết tính năng nào.</p>';
                           endif;
                           ?>
                     </div>
                  </div>
               </div>
            <div id="col-1467175334" class="col medium-4 small-12 large-4 col-divided">
               <div class="swiper myVerticalSlider">
                  <div class="swiper-wrapper">
                     <?php
                     $args = array(
                        'post_type'      => 'tinh_nang',
                        'posts_per_page' => 10,
                        'post_status'    => 'publish',
                        'orderby'        => 'date',
                        'order'          => 'DESC',
                     );
                     $query = new WP_Query($args);

                     if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                              $img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                              if (!$img_url) {
                                 $img_url = get_template_directory_uri() . '/assets/images/no-image.png'; // ảnh fallback nếu không có thumbnail
                              }
                              ?>
                              <!-- Slide <?php echo $count; ?> -->
                              <div class="swiper-slide">
                              <div class="slide-box">
                                 <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>">
                                    <h4><?php echo  get_the_title(); ?></h4>
                                 </a>
                              </div>
                              </div>
                              <?php
                              $count++;
                        endwhile;
                        wp_reset_postdata();
                     else :
                        echo '<p>Chưa có bài viết tính năng nào.</p>';
                     endif;
                     ?>
                  </div>
               </div>
            </div>
         </div>
         <style>
            #section_814329341 {
            padding-top: 60px;
            padding-bottom: 60px;
            background-color: rgb(255, 255, 255);
            }
            #section_814329341 .section-bg-overlay {
            background-color: rgba(255, 255, 255, 0.67);
            }
         </style>
      </section>
      <section class="section" id="section_hoatdong">
         <div class="bg section-bg fill bg-fill bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
         </div>
         <div class="section-content relative">
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal">
               <b></b>
               <span class="section-title-main short-underline" style="color:rgb(18, 142, 239);">HOẠT ĐỘNG</span>
               <b></b>
               </h3>
            </div>

            <!-- Slider wrapper -->
            <div class="slide-vip container">
               <?php while( have_rows('slide_vip', 'option') ): the_row(); 
                        $image = get_sub_field('image', 'option'); 
               ?>
               <div class="slide"><img src="<?php echo $image['url']; ?>" alt=""></div>
               <?php endwhile; ?>
            </div>
            <div class="slide-nav container">
               <?php while( have_rows('slide_vip_2', 'option') ): the_row(); 
                        $image = get_sub_field('image', 'option'); 
               ?>
               <div class="nav-slide"><img src="<?php echo $image['url']; ?>" alt=""></div>
               
               <?php endwhile; ?>
            </div>
            </div>
         </div>
         <div class="button-all">
            <a class="button primary is-outline is-smaller center all-button" style="border-radius:99px;">
               <span>Xem Tất Cả </span>
            </a>
         </div>
         <style>
            #section_hoatdong {
               padding-top: 60px;
               padding-bottom: 60px;
               min-height: 50vh;
               background-color: #fff;
            }

            #section_hoatdong .section-bg-overlay {
               background-color: rgba(254, 254, 254, 0.51);
            }

            #section_hoatdong img {
               width: 100%;
               height: auto;
               border-radius: 8px;
            }
         </style>
      </section> 
      <section class="section" id="section_1804977433" style="background:rgb(255 255 255); ">
         <div class="section-content relative">
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal">
               <span class="section-title-main short-underline" style="color:rgb(18, 142, 239);">
                  HÌNH NỀN TAM QUỐC HUYỄN TƯỚNG ĐẸP 
               </span>
               <span class="section-title-main no-border">
                 <a href="#"> Xem tất cả </a> 
               </span>
               </h3>
            </div>

            <!-- Swiper -->
            <div id="carousel" class="container">
               <?php while( have_rows('carousel_items', 'option') ): the_row(); 
                     $image = get_sub_field('image', 'option'); 
                     $link = get_sub_field('link', 'option'); 
                     $caption = get_sub_field('caption', 'option'); 
               ?>
               <div class="slide fix-image" >
               <p>
                  <a href="#"><img class="carousel-image" alt="Image Caption" src="<?php echo $image['url']; ?>"></a>
               </p>
               </div>
               <?php endwhile; ?>
            </div>
         </div>

         <style>
            /* Section */
            #section_1804977433 {
               padding: 80px 0;
               background-color: rgb(243, 243, 243);
            }
            #section_1804977433 .section-bg-overlay {
               background-color: rgba(255, 249, 249, 0);
            }
         </style>
      </section>
      <section class="section" id="section_1159627293">
         <div class="section-content relative container">
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal">
                  <span class="section-title-main" style="color:rgb(18, 142, 239);">BLOG/TIN TỨC TQHT</span>
               </h3>
            </div>

            <div class="slider-wrapper relative" id="slider-387123849">
               <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal is-draggable"
                  data-flickity-options='{
                     "cellAlign": "left",
                     "imagesLoaded": true,
                     "lazyLoad": 1,
                     "freeScroll": false,
                     "wrapAround": true,
                     "autoPlay": 6000,
                     "pauseAutoPlayOnHover": true,
                     "prevNextButtons": true,
                     "contain": true,
                     "adaptiveHeight": true,
                     "draggable": true,
                     "pageDots": true
                  }'>

                  <?php
                  // Truy vấn bài viết
                  $args = array(
                     'post_type'      => 'post',
                     'posts_per_page' => 8,
                     'post_status'    => 'publish',
                  );
                  $query = new WP_Query($args);

                  if ($query->have_posts()) :
                     while ($query->have_posts()) : $query->the_post();
                        $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                        if (!$thumb_url) {
                           $thumb_url = get_template_directory_uri() . '/assets/images/no-image.jpg'; // ảnh fallback
                        }
                  ?>
                  <!-- Mỗi bài viết là 1 cell -->
                  <div class="col medium-4 small-12 large-4 slider-cell">
                     <div class="col-inner">
                        <div class="box has-hover box-text-bottom">
                           <div class="box-image">
                              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                 <img loading="lazy" decoding="async" width="550" height="350"
                                    src="<?php echo esc_url($thumb_url); ?>"
                                    alt="<?php the_title_attribute(); ?>">
                              </a>
                           </div>
                           <div class="box-text text-center">
                              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                              <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php
                     endwhile;
                     wp_reset_postdata();
                  else :
                     echo '<p class="text-center">Chưa có bài viết nào.</p>';
                  endif;
                  ?>

               </div>
               <div class="loading-spin dark large centered" style="display: none;"></div>
            </div>
         </div>

         <style>
            #section_1159627293 {
               padding-top: 61px;
               padding-bottom: 61px;
               background-color: #fff;
            }
         </style>
      </section>   
   </div>
</main>
<?php get_footer(); ?>