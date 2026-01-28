<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trendy Strore</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">

  <!-- LEFT -->
  <div class="nav-left">
    <img src="uploads/logo.png" class="nav-logo">
    <span class="store-name">Trendy Store</span>
  </div>

  <!-- CENTER -->
  <ul class="nav-menu">
    <li><a href="men.php">👔MEN</a></li>
    <li><a href="women.php">👗WOMEN</a></li>
    <li><a href="kids.php">🧸KIDS</a></li>
  </ul>

  <!-- RIGHT -->
  <div class="nav-icons">

<?php if(isset($_SESSION['user'])){ ?>
  <span style="font-weight:600;">Hi, <?php echo $_SESSION['user']; ?></span>
  <a href="logout.php">
    Logout
  </a>
<?php }else{ ?>
  <a href="login.php">Login</a>
<?php } ?>

  <a href="cart.php">
    Cart <span class="cart-count">0</span>
  </a>

  </div>
</div>

<!-- NEW ARRIVALS -->
<div class="new-arrivals-wrapper">
  <div class="new-arrivals-banner">
    <img src="uploads/fashion.jpg">
    <div class="new-arrivals-overlay">
      <h2><b>NEW ARRIVALS</b></h2>
      <p><b>Men • Women • Kids</b></p>
      <a href="men.php" class="btn btn-light mt-2"><b>Shop Now</b></a>
    </div>
  </div>
</div>

<!-- TRENDING -->
<div class="trending-wrapper">
  <div class="trending-banner">
    <img src="uploads/trending.png">
    <div class="trending-overlay">
      <h2><b>TRENDING COLLECTION</b></h2>
      <p><b>Winter • Party • Casual</b></p>
      <a href="trending.php" class="btn btn-light mt-2"><b>View Trending</b></a>
    </div>
  </div>
</div>

<!-- CATEGORY -->
<div class="container mt-5">
  <div class="row g-4">

    <div class="col-md-4 text-center">
      <a href="men.php">
        <img src="uploads/mens collection.png" class="cat-img">
        <h4 class="mt-2">MEN</h4>
      </a>
    </div>

    <div class="col-md-4 text-center">
      <a href="women.php">
        <img src="uploads/women collection.png" class="cat-img">
        <h4 class="mt-2">WOMEN</h4>
      </a>
    </div>

    <div class="col-md-4 text-center">
      <a href="kids.php">
        <img src="uploads/kids collecton.png" class="cat-img">
        <h4 class="mt-2">KIDS</h4>
      </a>
    </div>

  </div>
</div>

<footer class="bg-light mt-5 p-4 text-center">
  © Create By Varaiya Sahad
</footer>

</body>
</html>
