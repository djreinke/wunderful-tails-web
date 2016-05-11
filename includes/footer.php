<?php
  // pre-footer 
  if ( isset($page_id) && $page_id != "appointment" && $page_id != "confirmation" ){
    //generate random number
    print '<div class="sec pre-footer center"><p class="lead center">Did you know: <a href="http://www.cesar.com/live-the-life/just-for-fun/100-weird-facts-about-dogs.aspx" target="_blank" style="color: #ffffff;">'.$pre_footer_blurbs[rand(0, count($pre_footer_blurbs)-1)].'</a></p>';
    print '<p>How can we help your pet today?</p>';
    print '<a href="'.$base_url.'make-an-appointment" class="no-u"><button type="button" class="btn btn-pre-footer btn-lg float-center">Make an Appointment</button></a></div>';
  }
?>
<footer class="footer">
      <div class="container">
      <div class="row">
        <div class="col-sm-6">© Wunderful Tails Mobile Pet Salon LLC. All Rights Reserved. 2016.</div>
        <div class="col-sm-6">
          <nav class="footer-nav">
            <ul>
            <?php print '<li><a href="'.$base_url.'home">Home</a></li>';?>
            <?php print '<li><a href="'.$base_url.'mobile-pet-salon">Mobile Pet Salon</a></li>';?>
            <?php print '<li><a href="'.$base_url.'services">Services</a></li>';?>
            <?php print '<li><a href="'.$base_url.'about-us">About Us</a></li>';?>
            <?php print '<li><a href="'.$base_url.'make-an-appointment">Make an Appointment</a></li>';?>
            </ul>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">Randolph | Morristown | Dover | Rockaway | Denville | Morris Plains</div>
        <div class="col-sm-6"></div>
      </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
    <?php print '<script src="'.$base_url.'bower_components/bootstrap/dist/js/bootstrap.min.js"></script>';?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php print '<script src="'.$base_url.'assets/js/ie10-viewport-bug-workaround.js"></script>';?>
    <?php 
      if(isset($page_scripts)){
        foreach( $page_scripts as $path ) {
          echo '<script src="'.$path.'"></script>'; 
         }  
      } 
    ?>
    </body>
</html>