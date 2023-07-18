<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/gallery.css" />
    <title>Gallery</title>
  </head>
  <body>

       <!--header-->
       <?php include_once('header.php');?>

      <h1 class="h1">The Pepper's Grand Hotel Gallery</h1>
    <div class="gallery">
      <img
        src="images/img-1.jpg"
        class="gallery__photo gallery__photo--p1"
        alt=""
      />
      <img
        src="images/img-2.jpg"
        class="gallery__photo gallery__photo--p2"
        alt=""
      />
      <img
        src="images/img-3.jpg"
        class="gallery__photo gallery__photo--p3"
        alt=""
      />
      <img
        src="images/img-4.jpg"
        class="gallery__photo gallery__photo--p4"
        alt=""
      />
      <img
      src="images/img-5.jpg"
      class="gallery__photo gallery__photo--p5"
      alt=""
    />

    </div>
    

    <!--Footer-->
    <?php require_once('footer.php');?>
    
  </body>
  
</html>
