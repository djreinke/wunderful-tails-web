<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php if(isset($config["page"]["description"])){print '<meta name="description" content="'.$config["page"]["description"].'">';}?>
    <?php if(isset($config["page"]["keywords"])){print '<meta name="keywords" content="'.$config["page"]["keywords"].'">';}?>
    <?php if(isset($config["info"]["seo_author"])){print '<meta name="author" content="'.$config["info"]["seo_author"].'">';}?>
    <?php print '<link rel="icon" href="'.$config["urls"]["baseUrl"].'favicon.ico">';?>
    <title><?php if(isset($config["page"]["title"])){ print $config["page"]["title"]; } ?></title>
    <?php print '<meta property="og:url" content="'.$config["urls"]["baseUrl"].'home">';?>
    <meta property="og:title" content="Wunderful Tails Mobile Pet Salon, Morris County, New Jersey" />
    <meta property="og:description" content="Providing professional mobile dog grooming, deshedding, skincare services and more from our dual mobile pet salons to your doorstep!" />
    <meta property="og:type" content="website" />
    <?php print '<meta property="og:image" content="'.$config["urls"]["baseUrl"].$config["seo"]["og_image"].'" />';?>
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1992">
    <meta property="og:image:height" content="1121">
    <!-- Bootstrap core CSS -->
    <?php print '<link href="'.$config["urls"]["baseUrl"].'bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">';?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php print '<link href="'.$config["urls"]["baseUrl"].'assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">';?>
    <?php print '<link href="'.$config["urls"]["baseUrl"].'assets/css/style.css" rel="stylesheet">';?>
    <?php print '<link href="'.$config["urls"]["baseUrl"].'assets/webfont/font.min.css" rel="stylesheet">';?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>