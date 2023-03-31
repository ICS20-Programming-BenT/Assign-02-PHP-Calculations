<DOCTYPE html>
<html>
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My Second Major Assignment- Calculations in PHP">
    <meta name="keywords" content="Immaculata, ICS2O">
    <meta name="author" content="Ben Thomson">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">

    <!-- Google's MDL -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-blue.min.css">
    
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Web page title -->
    <title>The Volume and the Surface Area of a Cone</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Container for web page content -->
    <main class = "mdl-layout__content" style = "padding-left:20px; padding-right:20px;">
      <!-- Web page heading -->
      <?php echo "<h1>The Volume and the Surface Area of a Cone</h1>"; ?>

      <!-- Body text -->
      <?php echo "<p>Welcome to my web page about cones! Below, you can find an image of a cone, as well as the formulas for calculating the volume and the surface area. If you would like, feel free to write your own values in the form below, and watch this web page calculate the volume and the surface area!</p>"; ?>
      <br>

      <!-- Images of cone and formulas -->
      <img src="./images/cone_image.png"><br>
      <img src="./images/cone_volume.png"><br>
      <img src="./images/cone_surface_area.png"><br>

      <!-- Body text -->
      <?php echo "<p>Please enter the value of the radius of your cone, as well as the value of the height (in cm):</p>"; ?>

      <!-- User input form -->
      <form action="./calculations.php" method="post" target="result">
        <label for="radiusOfCone">Radius of cone (in cm):</label>
        <input type="number" step="0.01" id="radius-cone" placeholder="Radius in cm..." name="radius-cone"><br><br>
        <label for="heightOfCone">Height of cone (in cm):</label>
        <input type="number" step="0.01" id="height-cone" placeholder="Height in cm..." name="height-cone"><br><br>
        <input type="submit" value="Calculate">
      </form>
      
      <!-- Space for displaying user information -->
      <iframe id="result" name="result">
      </iframe>
      <br>

      <!-- Default Slider -->
      <?php echo "<p>Please use the slider below to indicate how much this web page helped you. Thanks!" ?>
      <input class="mdl-slider mdl-js-slider" type="range"
        min="0" max="100" value="0" tabindex="0">

      <!-- Gif from Tenor -->
      <center>
        <div class="tenor-gif-embed" data-postid="25187332" data-share-method="host" data-aspect-ratio="1" data-width="50%"><a href="https://tenor.com/view/ice-cream-2d-animation-art-dessert-gif-25187332">Ice Cream 2d GIF</a>from <a href="https://tenor.com/search/ice+cream-gifs">Ice Cream GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
      </center>
      <br>
    </main>
  </body>
</html>