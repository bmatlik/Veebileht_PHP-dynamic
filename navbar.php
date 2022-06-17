<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content= "width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: whitesmoke;
}

p {
  color: ;
  font-size: 17px;
  padding-left: 25px;
  padding-right: 25px;
}

h2 {
  color: ;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: dimgray;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="<?php if($page=='home'){echo 'active';}?>">Avaleht</a>
  <a href="meist.php" class="<?php if($page=='about'){echo 'active';}?>">Meist</a>
  <a href="kontakt.php" class="<?php if($page=='contact'){echo 'active';}?>">Kontakt</a>
  <a href="gallery.php" class="<?php if($page=='gallery'){echo 'active';}?>">Galerii</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
