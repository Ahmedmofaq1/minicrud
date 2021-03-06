<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=webshop1", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";//
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

  
  
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <link rel="stylesheet" href="./css/main.css">
    <!-- =====BOX ICONS===== -->
	<link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
">

    

    <!-- Bootstrap core CSS -->
<link href="/project/css/bootstrap.css" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#index.php" class="text-white">home</a></li>
            <li><a href="gg.php" class="text-white">login</a></li>
            <li><a href="oo.php" class="text-white">menu</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>cafetaria</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
  <img src="https://www.cafetariaoostvoorne.nl/wp-content/uploads/logo-zwart.png" alt=""width="300" height="300">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1>welcome to our cafetaria</h1>
        <p class="lead text-muted">Kijk gerust is naar onze menu kaart...
          
        </p>
        <p>
        
        </p>
      </div>
    </div>
  </section>
  

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        
      
        <?php

$data = $conn->query("SELECT * FROM cafetaria")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    ?>

        <div class="col">
          <div class="card shadow-sm">
           <img src="./img/<?php echo $row['foto'];?>" alt="">

            <div class="card-body">
              <p class="card-text"><?php echo $row['titel'];?> prijs: <?php echo $row['prijs'];?>; op voorraad: <?php echo $row['voorraad'];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="product.php?p=<?php echo $row['ID'];?>" class="btn btn-sm btn-outline-secondary">View</a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
<?php
    
}
?>
        

      </div>
    </div>
  </div>

</main>

<!--===== FOOTER =====-->
<footer class="footer">
<p class="footer__title">Ahmed</p>
		<div class="footer__social">
			<a href="https://www.facebook.com/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
			<a href="https://www.instagram.com/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
			<a href="https://twitter.com/" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
		</div>
    <p>&#169; 2020 copyright all right reserved</p>
    
		
	</footer>


    <script src="js/bundle.min.js" ></script>

      
  </body>
</html>
