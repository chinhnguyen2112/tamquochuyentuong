<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/joaopereirawd/sliding-carousel/sliding-carousel.css">
<script src="https://cdn.jsdelivr.net/gh/joaopereirawd/sliding-carousel/sliding-carousel.min.js"></script>
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
         <!-- Background Section -->
         <div class="section-bg fill bg-fill bg-loaded" 
               style="background-image: url('http://localhost/wordpress/wp-content/uploads/2016/08/dummy-1.jpg');"></div>
         <!-- Optional Overlay -->
         <div class="title-overlay" 
               style="background-color: rgba(251, 251, 251, 1); position:absolute; top:0; left:0; width:100%; height:100%;"></div>

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
                     TIÊU ĐIỂM TƯỚNG TQHT Gia Cát Quả
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

                     <!-- Item 1 -->
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Gia Cát Quả</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Item 2 -->
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Triệu Vân</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Item 3 -->
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Lưu Bị</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Item 4 -->
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Lưu Bị</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Item 5 -->
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Lưu Bị</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Item 6 -->
                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Lưu Bị</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="col medium-2 small-6 large-2">
                        <div class="col-inner">
                           <div class="box has-hover box-text-bottom">
                              <div class="box-image">
                                 <img src="http://localhost/wordpress/wp-content/uploads/2025/10/778462b94d3646cedaf7d4d4860682c683382cf6.png" alt="tướng">
                              </div>
                              <div class="box-text text-center">
                                 <a class="button primary is-outline" style="border-radius:99px;">
                                    <span>Lưu Bị</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>


                  </div>
                </div>
            </div>
            <div class="button-all">
               <a class="button primary is-outline is-smaller center all-button" style="border-radius:99px;">
                  <span>Xem Tất Cả </span>
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
                     <div class="row" id="row-805470903">
                        <div id="col-2027975934" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1054905851" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-249179274" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="row-399790835">
                        <div id="col-1155378634" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1786049014" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1344101661" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="row-749053105">
                        <div id="col-1662671950" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1248306717" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1484269961" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="row-823554921">
                        <div id="col-2059797688" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-867769717" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-636485111" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="row-246097289">
                        <div id="col-1198942168" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1417431043" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-686393139" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="row-950375010">
                        <div id="col-2048875734" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1411022158" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-1873734711" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row" id="row-1428454263">
                        <div id="col-1951626671" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-651641383" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="col-961611348" class="col medium-4 small-12 large-4">
                           <div class="col-inner">
                              <div class="box has-hover   has-hover box-text-bottom">
                                 <div class="box-image">
                                    <div class="">
                                       <img loading="lazy" decoding="async" width="154" height="79" src="http://localhost/wordpress/wp-content/uploads/2025/10/Frame-81.png" class="attachment- size-" alt="">											
                                    </div>
                                 </div>
                                 <div class="box-text text-center">
                                    <div class="box-text-inner">
                                       <div class="container section-title-container">
                                          <h4 class="section-title section-title-center"><b></b><span class="section-title-main" style="font-size:68%;color:rgb(110, 137, 225);">1. cấp tướng &amp; nâng bậc</span><b></b></h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="col-1467175334" class="col medium-4 small-12 large-4 col-divided">
               <div class="swiper myVerticalSlider">
                  <div class="swiper-wrapper">
                  <!-- Slide 1 -->
                  <div class="swiper-slide">
                     <div class="slide-box">
                     <img src="http://localhost/wordpress/wp-content/uploads/2025/10/image-28.png" alt="">
                     <h4>1. CẤP TƯỚNG &amp; NÂNG BẬC</h4>
                     </div>
                  </div>

                  <!-- Slide 2 -->
                  <div class="swiper-slide">
                     <div class="slide-box">
                     <img src="http://localhost/wordpress/wp-content/uploads/2025/10/image-28.png" alt="">
                     <h4>2. HỆ THỐNG TƯỚNG</h4>
                     </div>
                  </div>

                  <!-- Slide 3 -->
                  <div class="swiper-slide">
                     <div class="slide-box">
                     <img src="http://localhost/wordpress/wp-content/uploads/2025/10/image-28.png" alt="">
                     <h4>3. KỸ NĂNG ĐẶC BIỆT</h4>
                     </div>
                  </div>

                  <!-- Slide 4 -->
                  <div class="swiper-slide">
                     <div class="slide-box">
                     <img src="http://localhost/wordpress/wp-content/uploads/2025/10/image-28.png" alt="">
                     <h4>4. TEST</h4>
                     </div>
                  </div>
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
               <?php while( have_rows('slide_vip', 'option') ): the_row(); 
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
      <section class="section" id="section_1804977433">
         <div class="bg section-bg fill bg-fill bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
         </div>
         <div class="section-content relative">
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal">
               <span class="section-title-main short-underline" style="color:rgb(18, 142, 239);">
                  HÌNH NỀN TAM QUỐC HUYỄN TƯỚNG ĐẸP 
               </span>
               <span class="section-title-main" style="color:rgb(18, 142, 239); ">
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
                  <span> Curabitur nec dapibus neque. Aenean orci enim, rutrum ac lacinia in, dapibus sit amet lorem.	</span>
               </p>
               </div>
               <?php endwhile; ?>
               <div class="navigate-left"><img src="https://images.vexels.com/media/users/3/128922/isolated/preview/1cec3d0747fc796080b17ca07e14d187--cone-redondo-da-seta-do-aeroporto-de-viagem-by-vexels.png" width="35px"></div>
               <div class="navigate-right"><img src="https://images.vexels.com/media/users/3/128927/isolated/preview/25652eb37d257753ffab9b4ac8edfa28--cone-de-rodada-do-aeroporto-de-viagem-seta-by-vexels.png" width="35px"></div>
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
         <div class="bg section-bg fill bg-fill bg-loaded"></div>
         <div class="section-content relative container">
            <div class="container section-title-container">
               <h3 class="section-title section-title-normal">
               <span class="section-title-main " style="color:rgb(18, 142, 239);">BLOG/TIN TỨC TQHT</span>
               </h3>
            </div>

            <div class="slider-wrapper relative" id="slider-387123849">
               <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal is-draggable flickity-enabled" 
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
                  }' tabindex="0">

               <!-- Mỗi cột là 1 cell riêng -->
               <div class="col medium-4 small-12 large-4 slider-cell">
                  <div class="col-inner">
                     <div class="box has-hover box-text-bottom">
                     <div class="box-image">
                        <img loading="lazy" decoding="async" width="550" height="350" src="http://localhost/wordpress/wp-content/uploads/2025/10/673c5f2cf12e1427702588fb03a247b9ff3ce08b.png" alt="">
                     </div>
                     <div class="box-text text-center">
                        <h4>Sự Kiện</h4>
                        <p>Test</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="col medium-4 small-12 large-4 slider-cell">
                  <div class="col-inner">
                     <div class="box has-hover box-text-bottom">
                     <div class="box-image">
                        <img loading="lazy" decoding="async" width="550" height="350" src="http://localhost/wordpress/wp-content/uploads/2025/10/673c5f2cf12e1427702588fb03a247b9ff3ce08b.png" alt="">
                     </div>
                     <div class="box-text text-center">
                        <h4>Sự Kiện</h4>
                        <p>Test</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="col medium-4 small-12 large-4 slider-cell">
                  <div class="col-inner">
                     <div class="box has-hover box-text-bottom">
                     <div class="box-image">
                        <img loading="lazy" decoding="async" width="550" height="350" src="http://localhost/wordpress/wp-content/uploads/2025/10/673c5f2cf12e1427702588fb03a247b9ff3ce08b.png" alt="">
                     </div>
                     <div class="box-text text-center">
                        <h4>Sự Kiện</h4>
                        <p>Test</p>
                     </div>
                     </div>
                  </div>
               </div>

               <div class="col medium-4 small-12 large-4 slider-cell">
                  <div class="col-inner">
                     <div class="box has-hover box-text-bottom">
                     <div class="box-image">
                        <img loading="lazy" decoding="async" width="550" height="350" src="http://localhost/wordpress/wp-content/uploads/2025/10/673c5f2cf12e1427702588fb03a247b9ff3ce08b.png" alt="">
                     </div>
                     <div class="box-text text-center">
                        <h4>Sự Kiện</h4>
                        <p>Test</p>
                     </div>
                     </div>
                  </div>
               </div>


               <div class="col medium-4 small-12 large-4 slider-cell">
                  <div class="col-inner">
                     <div class="box has-hover box-text-bottom">
                     <div class="box-image">
                        <img loading="lazy" decoding="async" width="550" height="350" src="http://localhost/wordpress/wp-content/uploads/2025/10/673c5f2cf12e1427702588fb03a247b9ff3ce08b.png" alt="">
                     </div>
                     <div class="box-text text-center">
                        <h4>Sự Kiện</h4>
                        <p>Test</p>
                     </div>
                     </div>
                  </div>
               </div>

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