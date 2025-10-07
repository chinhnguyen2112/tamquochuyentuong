<?php /** * The template for displaying the footer. * * @package flatsome */ global $flatsome_opt; ?> </main> 
<footer id="footer" class="footer-wrapper">
   <div class="footer-widgets footer footer-2 dark">
      <div class="row dark large-columns-4 mb-0">
         <!-- Cột 1: Logo và mô tả --> 
         <div id="block-14" class="col pb-0 widget widget_block widget_1">
            <div class="wp-block-group is-vertical is-layout-flex wp-container-core-group-is-layout-8cf370e7 wp-block-group-is-layout-flex">
               <div class="wp-block-group">
                  <div class="wp-block-group__inner-container is-layout-constrained wp-block-group-is-layout-constrained">
                     <figure class="wp-block-image size-full is-resized"> <?php $image = get_field('logo_footer', 'option'); $areatext= get_field('logo_text', 'option'); ?> <img loading="lazy" decoding="async" width="284" height="110" src="<?php echo $image['url']; ?>" alt="Tam Quốc Huyễn Tướng Logo" class="wp-image-334" style="width:259px;height:auto"> </figure>
                     <p><?php echo esc_html($areatext); ?></p>
                  </div>
               </div>
            </div>
         </div>
         <!-- Cột 2: Navigation Links --> 
         <div id="block-23" class="col pb-0 widget widget_block widget_add flex-end">
            <div class="footer-navigation">
               <?php
               wp_nav_menu(array(
                  'theme_location' => 'footer',   
                  'menu_class'     => 'footer-menu',
                  'fallback_cb'    => false,
               ));
               ?>
            </div>
         </div>
         <!-- Cột 3: Additional Links --> 
         <div id="block-24" class="col pb-0 widget widget_block widget_add flex-end">
            <div class="footer-navigation">
               <?php
               wp_nav_menu(array(
                  'menu'        => 'My Account Menu', 
                  'container'   => false,
                  'menu_class'  => 'footer-menu',
                  'fallback_cb' => false,
               ));
               ?>
            </div>
         </div>
         <!-- Cột 4: Download Buttons & QR Code --> 
         <div id="block-25" class="col pb-0 widget widget_block widget_add widget_2 flex-end">
            <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-9d6595d7 wp-block-columns-is-layout-flex column-footer">
               <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:50%">
                  <?php while( have_rows('footer_download', 'option') ): the_row(); $image = get_sub_field('image', 'option'); $link = get_sub_field('link','option'); $alt = get_sub_field('alt','option'); ?> 
                  <div class="download-buttons">
                     <a href="<?php echo $link['url']; ?>" class="download-btn" target="_blank">
                        <figure class="wp-block-image size-full mgbottom0 "> <img loading="lazy" decoding="async" width="144" height="48" src="<?php echo $image['url']; ?>" alt="<?php echo $alt['alt']; ?>"> </figure>
                     </a>
                  </div>
                  <?php endwhile; ?> 
               </div>
               <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow" style="flex-basis:60%">
                  <?php $image = get_field('qr_footer', 'option'); ?> 
                  <figure class="wp-block-image size-full qr-code"> <img loading="lazy" decoding="async" width="156" height="157" src="<?php echo $image['url']; ?>" alt="QR Code Download" class="wp-image-344" sizes="auto, (max-width: 156px) 100vw, 156px"> </figure>
               </div>
            </div>
         </div>
      </div>
      <!-- Social Media Icons --> 
      <div class="row dark mt-3 social">
         <div class="col text-center">
            <?php while( have_rows('social_icon', 'option') ): the_row(); $image = get_sub_field('icon', 'option'); $link = get_sub_field('link','option'); ?> 
            <div class="social-icons"> <a href="<?php echo $link['url']; ?>" class="social-icon facebook" target="_blank" aria-label="Facebook"> <img src="<?php echo $image['url']; ?>" alt="Facebook" width="50" height="50"> </a> </div>
            <?php endwhile; ?> 
         </div>
      </div>
      <!-- Copyright --> 
      <div class="row dark mt-2">
         <div class="col text-center">
            <?php $areatext = get_field('copyright', 'option'); ?> 
            <p class="copyright-text"><?php echo esc_html($areatext); ?></p>
         </div>
      </div>
   </div>
</footer>
</div> <?php wp_footer(); ?> </body> </html>