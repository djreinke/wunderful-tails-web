<div class="top-bar">
  <div class="container" itemscop itemtype="http://schema.org/Organization">
    <span id="pre-header-intro-text">Mobile Pet Salon in Morris & Sussex County, New Jersey - </span>Phone: <span itemprop="telephone"><?php print $config["info"]["phone"];?></span> Email: <span itemprop="email"><?php print $config["info"]["email"];?></span> 
  </div>
</div>
<nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home" itemscop itemtype="http://schema.org/Organization"><?php print '<img alt="Wunderful Tails Mobile Pet Salon Morris Country, New Jersey, Logo" src="'.$config["urls"]["baseUrl"].'assets/images/wunderful-tails-llc-logo.jpg" itemprop="logo">';?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php print '<li class="active"><a href="'.$config["urls"]["baseUrl"].'mobile-pet-salon">Mobile Pet Salon</a></li>';?>
            <?php print '<li><a href="'.$config["urls"]["baseUrl"].'services">Services</a></li>';?>
            <?php print '<li><a href="'.$config["urls"]["baseUrl"].'about-us">About Us</a></li>';?>
            <?php print '<li><a href="'.$config["urls"]["baseUrl"].'make-an-appointment">Make an Appointment</a></li>';?>
          </ul>
          <div class="navbar-social-wrap">
            <a href="https://www.pinterest.com/wunderfultailsm/" target="_blank"><div class="navbar-social pintrest"></div></a>
            <a href="https://plus.google.com/106970502315414175336/about" target="_blank"><div class="navbar-social gplus"></div></a>
            <a href="https://twitter.com/WunderfulTails" target="_blank"><div class="navbar-social twitter"></div></a>
            <a href="http://www.yelp.com/biz/wunderful-tails-mobile-pet-salon-llc-dover" target="_blank"><div class="navbar-social yelp"></div></a>
            <a href="https://www.facebook.com/WunderfulTails/" target="_blank"><div class="navbar-social facebook"></div></a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
</nav>