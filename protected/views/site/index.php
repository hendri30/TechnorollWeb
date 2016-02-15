<!-- Content -->
  
  <!-- Social Row -->
  <div class="container">  
    <div class="row">  
      <div class="col-md-12">  
        <div class="social-panel">
          
          <!-- <div class="row">  
            <div class="col-md-8">
              <div class="brands">     
                <img src="images/01.png" alt="">
                <img src="images/02.png" alt="">
                <img src="images/03.png" alt="">
                <img src="images/04.png" alt="">
              </div>
            </div> 
            <div class="col-md-4">  
              <div class="social-bg social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-tumblr"></i></a>
              </div> 
            </div>             
          </div> --> 

        </div>
      </div>     
    </div> 
  </div>  
  <!-- Social Row End -->

  <!-- Products & Features -->
  <?php foreach ($features as $fitur) {} ?>
  <div class="container" id="product">
  	<?php echo $fitur->content; ?>
  </div>
  <!-- End Products & Features -->

  <!-- About -->
  <?php foreach ($about as $tentang) {} ?>
  <div class="container" id="about">
  	<?php echo $tentang->content; ?>
  </div>
  <!-- About End -->
  
  <div class="space80"></div>    

  <!-- Portfolio -->
  <div class="portfolio dark" id="portfolio">
  
    <div class="space70"></div> 
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Portfolio</h2>
        </div> 
      </div> 
      
      <div class="row space50"></div>
              
      <div class="row">
        <div class="col-md-12">

          <div class="popup-gallery">
            <!-- Portfolio Item -->
            <?php foreach ($portfolio as $portofolio) { ?>
              <a href="<?php echo Yii::app()->request->baseUrl.'/images/portfolio/'.$portofolio->file_name; ?>" class="image-item">
                <!-- Image -->
                <img src="<?php echo Yii::app()->request->baseUrl.'/images/portfolio/'.$portofolio->file_name; ?>" alt="">
                <div class="item-overlay">
                  <h4><?php echo $portofolio->name; ?></h4>
                  <div>Click For View Larger</div>
                </div>
              </a>
            <?php } ?>
            <!-- Portfolio Item End -->
          </div> 
          
        </div> 
      </div>  
      
      <div class="row space80"></div>  
      <div class="row space80"></div>    
         
    </div>
  </div>
  <!-- Portfolio End --> 

  <!-- Map -->
  <div id="contact" class="map-container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9440997411284!2d106.87648631435978!3d-6.138212661885124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5637269361b%3A0x66af287b36474d3e!2sPT.+Suprabakti+Mandiri!5e0!3m2!1sid!2sid!4v1454553711712" width="100%" height="355" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="button-container">
      <a indepth="true" target="_top" href="https://www.google.co.id/maps/place/PT.+Suprabakti+Mandiri/@-6.1382127,106.8764863,17z/data=!3m1!4b1!4m2!3m1!1s0x2e69f5637269361b:0x66af287b36474d3e?hl=id" rel="external" class="btn">Show Location</a>
    </div> 
  </div> 
  <!-- Map End -->

<!-- Content End -->