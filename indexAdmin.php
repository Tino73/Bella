<!DOCTYPE html>
<?php
if(!isset($_SESSION))
{	
session_start();
}




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bella";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$products = $conn->query($sql);



?>
<head>
<title>BellaBella</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
  .centerh1{
    display: block;
    position: relative;
    color: black;
    background-color: red;
    top: 40%;
    right: 90%;
    text-align: center;
    margin-bottom: 40px;
    margin-top: 20px;
  }
  .containeri1{
	margin: 0 auto;
	width: 70%;
  }
  
  .swiper-container {
	width: 100%;
	height: 100%;
  }
  
  .swiper-slide {
	text-align: center;
	font-size: 18px;
	background: #fff;
  
	/* Center slide text vertically */
	display: -webkit-box;
	display: -ms-flexbox;
	display: -webkit-flex;
	display: flex;
	-webkit-box-pack: center;
	-ms-flex-pack: center;
	-webkit-justify-content: center;
	justify-content: center;
	-webkit-box-align: center;
	-ms-flex-align: center;
	-webkit-align-items: center;
	align-items: center;
	overflow: hidden;
	height: 600px;
  }
</style>
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <div id="logo" class="fl_left">
      <h1><a href="indexAdmin.php">Bella Bella </a></h1>
    </div>
    <div class="fl_right"><a class="btn" href="login/Login_v1/logout.php">Log Out</a></div>
  </header>
</div>
<div class="bgded" style="background-image:url('images/demo/backgrounds/garderoba.jpg');"> 
  
  <div class="wrapper row2">
    <nav id="mainav" class="hoc clear"> 
      
      <ul class="clear">
        <li class="active"><a href="indexAdmin.php">Home</a></li>

        <li><a class="drop" href="#">Pages</a>

          <ul>
           
            <li><a href="aboutusAdmin.html">About us</a></li>
            <li><a href="pages/aksesoretAdmin.html">Aksesoret</a></li>
            <li><a href="#">Page 3</a></li>
            <li><a href="#">Page 4</a></li>
          </ul>
        </li>
         <li><a href="pages/galleryAdmin.html">Gallery</a></li>
        </ul>
    
    </nav>
  </div>

  <div class="wrapper overlay">
    <article id="pageintro" class="hoc clear"> 
     
      <h3 class="heading">Mirësevini Admin: <?php echo $_SESSION['Name']; ?> </h3>
      <p>Ketu mund te gjeni produktet me te reja te brendit tone </p>
 

    </article>
  </div>

</div>

<div class="wrapper bgded" style="background-image:url('images/demo/backgrounds/foto3.jpg');">
  <div class="hoc split clear">
    <section> 
      <br>
      <br>
      <br>


      <h2 class="heading">Produktet tjera</h2>
      <p class="btmspace-50">Perveq prdukteve te tekstilit permbajm edhe aksesore <br>
	   <form action="ShtoProduktin.php" method="post">
               Shto produktin:
			   <br>
                  <input type="text" name="produkti" placeholder="Produkti">
                  <input type="text" name="photo" placeholder="Foto">
               <br>
				<input type="submit" VALUE="Ruaj">
              </form>
      <br></p>
      <br>
      <h1>ketu shfaqet produkti</h1>

      
      <div>
          
      </div>

      


    </section>
  </div>
</div>

<div class="containeri1">
<div class="swiper-container">
    <div class="swiper-wrapper">
    <?php foreach($products as $products): ?>
      <div class="swiper-slide">
        <img src="<?php echo $products['photo']; ?>">
        <h1 class="centerh1"><?php echo $products['Produkti']; ?></h1>
      </div>
      <?php endforeach; ?>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/foto2.jpg');">
  <div class="hoc container testimonials clear"> 
    <article><img src="images/demo/bobi.jpg" alt="">
      <blockquote>Jom shum i lumtur me produktet e juaja kualiteti dhe sherbimi ne nivel.Faleminderit shume.</blockquote>
      <h6 class="heading">Fatlum Muqolli </h6>
   </article>
  </div>
</div>
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading">Produktet</h6>
      <p>Ne zbritje </p>
    </div>
    <div class="group latest">
      <article class="one_third first">
        <figure><a href="#"><img src="images/demo/lanti3.jpg" alt=""></a>
          <figcaption>
            <time datetime="2045-04-06T08:15+00:00"><strong>32</strong> <em>Euro</em></time>
          </figcaption>
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Bella T-shirt</h4>
         </div>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="images/demo/lanti2.jfif" alt=""></a>
          <figcaption>
            <time datetime="2045-04-05T08:15+00:00"><strong>75</strong> <em>Euro</em></time>
          </figcaption>
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Bella dress</h4>
         
        </div>
      </article>
      <article class="one_third">
        <figure><a href="#"><img src="images/demo/lanti.jpg" alt=""></a>
          <figcaption>
            <time datetime="2045-04-04T08:15+00:00"><strong>21</strong> <em>euro</em></time>
          </figcaption>
        </figure>
        <div class="txtwrap">
          <h4 class="heading">Bella T-shirt</h4>
          
        </div>
      </article>
    </div>
    <div class="clear"></div>
  </section>
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <div class="one_third first">
      <h6 class="heading">Na kontaktoni </h6>
      <ul class="nospace btmspace-30 linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
            Rr.Nena Tereza &amp;  Prishtine, 10000
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +383 49 111 222</li>
        <li><i class="fa fa-envelope-o"></i> Bellabella@gmail.com</li>
      </ul>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-twitter" href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-linkedin" href="https://www.insider.com"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="https://mail.google.com"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    
    <div class="one_third">
      <h6 class="heading">Antarsohu tani</h6>
      <p class="nospace btmspace-30">Fito zbritje ne te gjitha produktet</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved to Bella Bella</p>
  </div>
</div>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
</body>
</html>
