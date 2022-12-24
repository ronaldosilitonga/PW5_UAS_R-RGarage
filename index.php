<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Dealer Motor R&R</title>
  </head>
  <body>

  <!-- Navbar Bootstrap !-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand "href="index.php">
        <img src="assets/images/logo.png" alt="" width="200" class="mt-10">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#product">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login-logout/login.php">Login</a>
          </li>  
      </div>
    </div>
  </nav>

  <!--Header Banner!-->
  <div class="banner" id="home">
    <div class="overlay">
        <div class="container">
            <div class="intro-text">
                <h1>Welcome To <span>R&R Garage</span></h1>
                <p>Honda Official Store</p>
                <p>Alamat</p>
                <p>JALAN IN AJA DULU NO 237, MEDAN, SUMATERA UTARA</p>
            </div>
        </div>
    </div>
  </div>

  <br><br><h2 style="text-align: center;">Our Newest Promo</h2><br><br>

  <!-- Carousel Bootstrap !-->
  <div id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/cbr-150r.png" class="d-block w-100" alt="image error">
        </div>
        <div class="carousel-item">
          <img src="assets/images/pcx-1.png" class="d-block w-100" alt="image error">
        </div>
        <div class="carousel-item">
          <img src="assets/images/cb-150r.png" class="d-block w-100" alt="image error">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  
  <!-- List Product !-->
  <div class="productlist" id="product">
      <div class="container-fluid list pt-5 pb-5">
        <div class="container text-center">
          <h2 class="display-4" style="color:black;">Products</h2>
          <a href="#matic">
            <button type="button" class="btn btn-danger">Matic</button>
          </a>
          <a href="#sport">
            <button type="button" class="btn btn-danger">Sport</button>
          </a>
          <a href="#cub">
            <button type="button" class="btn btn-danger">Cub</button>
          </a>
          
          <div id="matic">
            <br> <br> <h3>Matic</h3> <br>
          </div>

          <div class="row pt-4" style="padding: 100px;">
            <div class="col-mb-3">
              <div class="card-deck" >
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/product-thmbnail-17-04022022-110721.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Vario</h5>
                    <p class="card-text">Harga mulai Rp.22.000.000</p>
                  </div>
                </div>

                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-product-1-02112022-042907.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Scoopy</h5>
                    <p class="card-text">Harga mulai Rp.21.553.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;" >
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thmbnail-4-upload-4-28072021-020253.png" class="card-img-top" alt="Failed To Load IMG">
                  <div class="card-body">
                    <h5 class="card-title">BeAT Street</h5>
                    <p class="card-text">Harga mulai Rp.18.376.000</p>
                  </div>
                </div>
              </div>
            </div>
            
            
            <div class="col-mb-3">
              <div class="card-deck">
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-product-10-13122022-124317.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">PCX 160</h5>
                    <p class="card-text">Harga mulai Rp.32.179.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thmbnail-upload-3-5-28072021-020243.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">BeAT</h5>
                    <p class="card-text">Harga mulai Rp.17.720.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;" >
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/honda-adv160-abs-red-sideview-27062027-01072022-042948.png" class="card-img-top" alt="Failed To Load IMG">
                  <div class="card-body">
                    <h5 class="card-title">ADV 160</h5>
                    <p class="card-text">Harga mulai Rp.36.000.000</p>
                  </div>
                </div>
              </div>
            </div>

            <div id="sport">
              <br> <h3>Sport</h3> <br>
            </div>

            <div class="col-mb-3">
              <div class="card-deck">
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/sonic-150r-2-27052021-092049.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Sonic 150R</h5>
                    <p class="card-text">Harga mulai Rp.24.132.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-400x300-ys-3-19092022-074605.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CBR250RR</h5>
                    <p class="card-text">Harga mulai Rp.62.850.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;" >
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-50845-24112022-071000.png" class="card-img-top" alt="Failed To Load IMG">
                  <div class="card-body">
                    <h5 class="card-title">CBR150R</h5>
                    <p class="card-text">Harga mulai Rp.36.741.000</p>
                  </div>
                </div>
            </div>

            <div class="col-mb-3">
              <div class="card-deck">
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/cb1504-27052021-092449.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CB150R Streetfire</h5>
                    <p class="card-text">Harga mulai Rp.30.111.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-motor-new-crf150l-1-25102021-084848.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">CRF150L</h5>
                    <p class="card-text">Harga mulai Rp.35.384.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;" >
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-crf250rally-upload-4-06082021-090511.png" class="card-img-top" alt="Failed To Load IMG">
                  <div class="card-body">
                    <h5 class="card-title">CRF250 RALLY</h5>
                    <p class="card-text">Harga mulai Rp.92.145.000</p>
                  </div>
                </div>
            </div>
          </div>

          <div id="cub">
              <br> <h3>Cub</h3> <br>
            </div>

            <div class="col-mb-3">
              <div class="card-deck">
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thumbnail-new-supra-x-5-04032022-102907.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Supra X 125 FI</h5>
                    <p class="card-text">Harga mulai Rp.15.644.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;">
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/thmbnail-product-2-24012022-110536.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Revo</h5>
                    <p class="card-text">Harga mulai Rp.18.785.000</p>
                  </div>
                </div>
                <div class="card text-black bg-transparent mb-3" style="max-width: 18rem;" >
                  <img src="https://ik.imagekit.io/zlt25mb52fx/ahmcdn/tr:w-550,f-auto/uploads/product/thumbnail/supra-gtr-150-4-27052021-092133.png">
                  <div class="card-body">
                    <h5 class="card-title">GTR 150</h5>
                    <p class="card-text">Harga mulai Rp.24.637.000</p>
                  </div>
                </div>
            </div>
          </div>

        </div>
      </div>  
    </div>

    <!-- Footer -->
    <footer class="footer" id="about">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>About Us</h4>
  	 			<ul>
  	 				<li><a href="#">We Are Official Partner of Honda, we serve you, nice and new motorbike from Honda</a></li>
  	 			</ul>
  	 		</div>

         <div class="footer-col ms-auto">
  	 			<h4>Official Partnership</h4>
  	 			<ul>
  	 				<li>
              <img src="https://th.bing.com/th/id/OIP.CEqj_Pz2EAY-8JilYeYf-gHaHa?pid=ImgDet&rs=1" alt="" width="150px">
            </li>
  	 			</ul>
          
  	 		</div>

  	 		<div class="footer-col ms-auto">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="https://twitter.com/welovehonda"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="https://www.facebook.com/welovehonda"><i class="fab fa-twitter"></i></a>
  	 				<a href="https://www.instagram.com/welovehonda_id/"><i class="fab fa-instagram"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>

</html>