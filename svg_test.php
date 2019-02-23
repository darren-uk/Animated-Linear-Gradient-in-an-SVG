<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>SVG Test</title>
</head>
  
<body>
  <!-- PLACE THIS SVG GRADIENT INSIDE BODY TAG -->
  <!-- DO NOT SET VISIBILITY TO HIDDEN browser may skip script -->
  <svg style="width:0;height:0;position:absolute;" focusable="false">
    <def>
      <linearGradient id="my-cool-gradient" gradientTransform="rotate(90)">
        <stop id="stop01" offset="5%"   />
        <stop id="stop02" offset="95%"  />
      </linearGradient>
    </def>
  </svg>
  
  
  <article>
    <div class="sprite-icon">
      <?php echo file_get_contents("cat.svg"); ?> <!-- adds SVG data without XML information -->
    </div>
  </article>
  
</body>
</html>
