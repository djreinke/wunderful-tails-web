<?php
  // pre-footer 
  if ( isset($config["page"]["id"]) && $config["page"]["id"] != "appointment" && $config["page"]["id"] != "confirmation" ){
    //generate random number
    print '<div class="sec pre-footer center"><p class="lead center">Did you know: <a id="pre-footer-fact" href="http://www.cesar.com/live-the-life/just-for-fun/100-weird-facts-about-dogs.aspx" target="_blank">'.$pre_footer_blurbs[rand(0, count($pre_footer_blurbs)-1)].'</a></p>';
    print '<p>How can we help your pet today?</p>';
    print '<a href="'.$config["urls"]["baseUrl"].'make-an-appointment" class="no-u"><button type="button" class="btn btn-pre-footer btn-lg float-center">Make an Appointment</button></a></div>';
  }
?>
<footer class="footer">
  <div class="container">
    <div class="row" itemscop itemtype="http://schema.org/Organization">
      <div class="col-sm-6 footer-col">© <span itemprop="legalName"><strong>Wunderful Tails Mobile Pet Salon LLC</strong></span>. All Rights Reserved. 2016.</div>
      <div class="col-sm-6 footer-col">
        <nav class="footer-nav">
          <ul class="right">
          <?php print '<li><a href="'.$config["urls"]["baseUrl"].'home">Home</a></li>';?>
          <?php print '<li><a href="'.$config["urls"]["baseUrl"].'mobile-pet-salon">Mobile Pet Salon</a></li>';?>
          <?php print '<li><a href="'.$config["urls"]["baseUrl"].'services">Services</a></li>';?>
          <?php print '<li><a href="'.$config["urls"]["baseUrl"].'about-us">About Us</a></li>';?>
          <?php print '<li><a href="'.$config["urls"]["baseUrl"].'make-an-appointment">Make an Appointment</a></li>';?>

          </ul>
        </nav>
      </div>
    </div>
    <div class="row buf-sm-bottom">
      <div class="col-sm-6 footer-col">Phone: <?php print $config["info"]["phone"];?> | Email: <span itemprop="email"><a href="mailto:info@wunderfultails.com" title="Email Wunderful Tails"><?php print $config["info"]["email"];?></a></div>
      <div class="col-sm-6 right footer-col"><?php print '<a href="'.$config["urls"]["baseUrl"].'gift-certificate.pdf" target="_blank">Gift Certificates</a>';?> | Site by <a href="http://danielreinke.com?ref=wunderful-tails" target="_blank">Daniel Reinke</a></div>
    </div>
    <div class="row center buf-sm-bottom">
      <div class="col-sm-12 footer-towns"> 
        <?php
          if(isset($config["towns"])){
            print '<p>';
            for($x = 0; $x < count($config["towns"]); $x++){
              if($x != (count($config["towns"])-1) ){
                print $config["towns"][$x].' | ';
              }
              else{
                print $config["towns"][$x];
              }
            }
            print '</p>';
          }
        ?>
      </div>
    </div>
    <div class="row center">
      <div class="col-sm-12"><?php print '<img src="'.$config["urls"]["baseUrl"].'assets/images/payments.jpg" width="140px" alt="Accepted Payments at Wunderful Tails Mobile Pet Salon">';?></div>
    </div>
  </div>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
    <?php print '<script src="'.$config["urls"]["baseUrl"].'bower_components/bootstrap/dist/js/bootstrap.min.js"></script>';?>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php print '<script src="'.$config["urls"]["baseUrl"].'assets/js/ie10-viewport-bug-workaround.js"></script>';?>
    <?php 
      if(isset($config["page"]["js"])){
        foreach( $config["page"]["js"] as $path ) {
          echo '<script src="'.$path.'"></script>'; 
         }  
      } 
    ?>
    </body>
</html>