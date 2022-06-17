<!DOCTYPE html>
<html lang="en">
<head>
	<title>Galerii</title>
  <?php $page = 'gallery';include 'navbar.php' ?>

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/lightbox.css">
  <script src="js/lightbox-plus-jquery.js"></script>

</head>
<body>
	<div class="container">
	<h1>Galerii</h1>
</div>
<div class="row">
	<div class="gallery">
		<a href="images/earth.jpg" data-lightbox="mygallery" data-title="Maailm"><img src="images/earth.jpg" alt="Maailm"></a>
		<a href="images/lion.jpg" data-lightbox="mygallery" data-title="Lõvi" > <img src="images/lion.jpg" alt="Lõvi"></a>
		<a href="images/field.jpg" data-lightbox="mygallery" data-title="Põld"> <img src="images/field.jpg"></a>
		<a href="images/landscape.jpg" data-lightbox="mygallery" data-title="Puu"> <img src="images/landscape.jpg"></a>
		<a href="images/elephant.jpg" data-lightbox="mygallery" data-title="Elevant"> <img src="images/elephant.jpg"></a>
	</div>

	<div class ="gallery">
		<a href="images/little_lion.jpg" data-lightbox="mygallery" data-title="Väike lõvi" data-caption="6/15"> <img src="images/little_lion.jpg"></a>
		<a href="images/sunset.jpg" data-lightbox="mygallery" data-title="Päikeseloojang"> <img src="images/sunset.jpg"></a>
		<a href="images/desert2.jpg" data-lightbox="mygallery" data-title="Kõrb"> <img src="images/desert2.jpg"></a>
		<a href="images/oak.jpg" data-lightbox="mygallery" data-title="Tamm"> <img src="images/oak.jpg"></a>
		<a href="images/penguin.jpg" data-lightbox="mygallery" data-title="Pengviin"> <img src="images/penguin.jpg"></a>
	</div>


	<div class="gallery">
		<a href="images/tree.jpg" data-lightbox="mygallery" data-title="Puu"> <img src="images/tree.jpg"></a>
		<a href="images/field2.jpg" data-lightbox="mygallery" data-title="Põld"> <img src="images/field2.jpg"></a>
		<a href="images/giraffe.jpg" data-lightbox="mygallery" data-title="Kaelkirjak"> <img src="images/giraffe.jpg"></a>
		<a href="images/desert.jpg" data-lightbox="mygallery" data-title="Kõrb"> <img src="images/desert.jpg"></a>
		<a href="images/mountains.jpg" data-lightbox="mygallery" data-title="Mäed"> <img src="images/mountains.jpg" style="width=100%"></a>
	</div>

</div>

<!-- <hr/> -divider -->
&nbsp;

<?php include "footer.php" ?>

</body>
</html>
