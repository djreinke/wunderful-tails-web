<div class="top-bar">
  <div class="container">
    Mobile Pet Salon in Morris County, New Jersey - Phone: <?php echo $phone;?> Email: <?php echo $email;?> 
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
          <a class="navbar-brand" href="home"><?php print '<img alt="Wunderful Tails Mobile Pet Salon Morris Country NJ" src="'.$base_url.'assets/images/wunderful-tails-logo.jpg">';?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php print '<li class="active"><a href="'.$base_url.'mobile-pet-salon">Mobile Pet Salon</a></li>';?>
            <?php print '<li><a href="'.$base_url.'services">Services</a></li>';?>
            <?php print '<li><a href="'.$base_url.'about-us">About Us</a></li>';?>
            <?php print '<li><a href="'.$base_url.'make-an-appointment">Make an Appointment</a></li>';?>
          </ul>
          <div class="navbar-social-wrap">
          <a href="https://www.facebook.com/WunderfulTails/" target="_blank"><div class="navbar-social facebook"></div></a>
          </div>
        </div><!--/.nav-collapse -->
      </div>
</nav>