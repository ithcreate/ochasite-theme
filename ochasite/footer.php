<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ochasite
 */
?>

    <footer>
      <section>
        <h2><a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_attr(bloginfo( 'name' )); ?></a></h2>
        <address>0120-000-0000<br>
          〒428-0034 静岡県島田市金谷富士見町3053-2<br>お茶の郷博物館
        </address>
      </section>
      
      <nav class="footerNav">
        <?php wp_nav_menu(array('theme_location' => 'footer')); ?>
      </nav><!-- site-nav -->
      <hr>
      <small>Copyright &copy; 2019 All Japan tea union. All rights reserved.</small>
    </footer>
    
    <div class="cc">
      <h4>"<span class="title">green tea / 緑茶</span>" <i>by <span class="creator">Kanko*</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>
      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/kankan/73658819">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>


      <h4>"<span class="title">Chinese tea table</span>" <i>by <span class="creator">Nagarjun Kandukuru</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/nagarjun/7657349208">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>


      <h4>"<span class="title">Black Tea (sakura flavour) and Strawberry Tart</span>" <i>by <span class="creator">Toukou Sousui 淙穂鶫箜</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/sousui/16495294404">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>


      <h4>"<span class="title">和果子和抹茶</span>" <i>by <span class="creator">jeff~</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/jphotos/6734927759/">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>

      <h4>"<span class="title">Teavana Tea Canister</span>" <i>by <span class="creator">A Girl With Tea</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/agirlwithtea/5111735287">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>


      <h4>"<span class="title">Green Tea</span>" <i>by <span class="creator">City Foodsters</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>
      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/cityfoodsters/12391835724">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>

      <h4>"<span class="title">Tea Set - I love it!</span>" <i>by <span class="creator">Gisela Francisco</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/gifrancis/144084905">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>

      <h4>"<span class="title">皇居東御苑茶畑 (The East Gardens of the Imperial Palace)</span>" <i>by <span class="creator">Toshihiro Gamo</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/dakiny/8349004860">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>

      <h4>"<span class="title">Green Tea Bin</span>" <i>by <span class="creator">Paul Downey</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/psd/60782636">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>

      <h4>"<span class="title">Gyokuro Imperial</span>" <i>by <span class="creator">A Girl With Tea</span></i></h4>
      <p class="info">
        Licensed under <a class="license" href="https://creativecommons.org/licenses/by/2.0">CC-BY 2.0</a>
      </p>

      <p>
        <a class="foreign_landing_url" href="https://www.flickr.com/photos/agirlwithtea/5246815165">Original source</a> via <a class="provider" href="https://flickr.com">Flickr</a>
      </p>
    </div>
    <!-- /cc -->

<?php wp_footer(); ?>
</div><!--end .wrapper-->
</body>
</html>
