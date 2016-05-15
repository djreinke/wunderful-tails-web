<?php 
  require 'includes/globals.php';
  $config["page"]["id"] = 'home'; 
  include 'includes/header.php'; 
  include 'includes/navigation.php'; 
?>

  <div class="jumbotron homepage-feat">
    <div class="container">
      <div class="col-md-9 col-md-offset-3 homepage-feat-meta">
        <h1 class="center">Wunderful Tails - Full Service Dog Grooming at Your Doorstep</h1>
        <div class="homepage-feat-truck"></div>
        <p><a href="make-an-appointment" class="no-u"><button type="button" class="btn btn-primary btn-lg float-center">Make an Appointment</button></a></p>
      </div>
      <div class="homepage-feat-duke"></div>
    </div>
  </div>
  <div class="sec">
    <div class="container">
    <div class="row">
      <h2 class="center">Services</h2>
      <?php print '<div class="col-sm-4 center"><h3>Mobile Dog Grooming</h3><img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/home_feat01.jpg" alt="Mobile Dog Grooming at Wunderful Tails"></div>';?>
      <?php print '<div class="col-sm-4 center"><h3>Deshedding Services</h3><img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/home_feat02.jpg" alt="Pet Deshedding Services at Wunderful Tails"></div>';?>
      <?php print '<div class="col-sm-4 center"><h3>Skincare Treatments</h3><img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/home_feat03.jpg" alt="Mobile Skincare Treatments at Wunderful Tails"></div>';?>
    </div>
      <p><?php print '<a href="'.$config["urls"]["baseUrl"].'services" class="no-u"><button type="button" class="btn btn-primary btn-lg float-center buf-md">See All Services</button></a>';?></p>
    </div><!-- /.container -->
  </div>
  <div class="sec grey">
    <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <?php print '<img class="img-full" src="'.$config["urls"]["baseUrl"].'assets/images/hydro-massage.jpg" alt="Hydro Massage Therapy Bath at Wunderful Tails">';?>
      </div>
      <div class="col-sm-7 col-sm-offset-1" id="hydro-massage">
        <h2>Hydro Massage Therapy Bath</h2>
        <p>Hydro-massage bathing is an innovative development in bathing for dogs. This unique system produces a gentle, combing spray of shampoo and water using a hand-held massage sprayer. The shampoo solution penetrates your pet's fur and gets to the skin to remove dirt, debris, loose fur, dead skin, and dander, resulting in the healthiest skin possible. Your pets are sure to love the massage-like treatment.</p>
        <p><?php print '<a href="'.$config["urls"]["baseUrl"].'mobile-pet-salon" class="no-u"><button type="button" class="btn btn-primary btn-lg buf-md">Read More</button></a>';?></p>
      </div>
    </div>
    </div>
  </div>
  <div class="sec">
    <div class="container">
      <?php print '<img class="center float-center" src="'.$config["urls"]["baseUrl"].'assets/images/ico-van.png" alt="Wunderful Tails Mobile Dog Grooming Icon">';?>
      <h2 class="center">Why Mobile Dog Grooming?</h2>
      <p class="lead center buf-lg-bottom">Simply better for your pet and family</p>
      <div class="row">
      <div class="col-sm-6"><h3><strong>Benefits to your Pet</strong></h3>
      <ul>
        <li>Less stress on the dog</li>
        <li>No strange dogs interacting with your dog while in our van. Unlike a shop.</li>
        <li>One on one service.. unlike in a shop who has multiple people.</li>
        <li>Still can see they are home while being groomed.</li>
        <li>No CAGE dryers or crates to sit in while grooming. Unlike shops use drying cages.</li>
        <li>No multiple trips in the car to and from a shop.</li>
      </ul>
      </div>
      <div class="col-sm-6"><h3><strong>Benefits to your Family</strong></h3>
      <ul>
        <li>Less stress on your family</li>
        <li>No car rides with a dirty dog in the clean car</li>
        <li>No worries what is going on with our pet while in the shop.</li>
        <li>Ready in about an hour for most breeds.</li>
      </ul>
      </div>
    </div>
    </div>
  </div>
  
  <?php include 'includes/footer.php'; ?>