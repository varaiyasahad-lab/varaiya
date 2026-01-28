<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Trendy Strore</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{font-family:Arial,Helvetica,sans-serif;margin:0}

/* NAVBAR */
.navbar{border-bottom:1px solid #dddddd;padding:12px 25px}
.brand{font-size:26px;font-weight:bold}
.menu a{margin:0 15px;text-decoration:none;font-weight:600;color:#000}
.menu a:hover{color:green}
.search-box{border:1px solid #e21313;padding:6px 14px;border-radius:20px}
.navbar{
  display:flex;
  align-items:center;
  justify-content:space-between;
  padding:15px 40px;
  border-bottom:1px solid #eee;
  background:#fff;
}

/* LEFT */
.nav-left{
  display:flex;
  align-items:center;
  gap:10px;
}

.nav-logo{
  height:40px;
}

.store-name{
  font-size:50px;
  font-weight:1000;
}

/* CENTER */
.nav-logo{
  height:100px;   /* try 55px / 60px / 65px */
}

.nav-menu{
  display:flex;
  gap:30px;
  list-style:none;
  margin:0;
  padding:0;
}

.nav-menu li a{
  text-decoration:none;
  color:#000;
  font-weight:600;
}

.nav-menu li a:hover{
  color:#e63946;
}

/* RIGHT */
.nav-icons{
  display:flex;
  gap:20px;
  font-size:18px;
}

.nav-icons a{
  color:#000;
}

.nav-icons a:hover{
  color:#e63946;
}

/* HERO */
.new-arrivals-wrapper{
  width:100%;
  display:flex;
  justify-content:center;
  margin:50px 0;
}

.new-arrivals-banner{
  max-width:800px;
  width:100%;
  position:relative;
}

.new-arrivals-banner img{
  width:100%;
  height:800px;
  object-fit:contain;   /* ❗ image cut nahi hogi */
  border-radius:18px;
}

/* Center overlay text */
.new-arrivals-overlay{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  background:rgba(0,0,0,0.6);
  color:#fff;
  padding:30px 70px;
  border-radius:14px;
  text-align:center;
}

  

/* TRENDING */
.trending-wrapper{
  width:100%;
  display:flex;
  justify-content:center;
  margin:60px 0;
}

.trending-banner{
  max-width:1100px;
  width:100%;
  position:relative;
}

.trending-banner img{
  width:100%;
  height:auto;
  object-fit:contain;
  border-radius:18px;
}

.trending-overlay{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  background:rgba(0,0,0,0.6);
  color:#fff;
  padding:30px 70px;
  border-radius:14px;
  text-align:center;
}

/* CATEGORY */
.cat img{
  width:100%;
  height:250px;
  object-fit:cover;
  border-radius:12px;
}
.cat img{
  width:100%;
  max-height:260px;
  object-fit:contain;   /* image cut nahi hogi */
  border-radius:14px;
}
.store-banner{
  display:flex; 
  justify-content:center;
  margin:15px 0 25px;
}

.store-banner img{
  max-width:180px;   /* 👈 yahin size control hota hai */
  width:100%;
  height:auto;
  object-fit:contain;
}



</style>
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

 <div class="nav-icons">

<?php if(isset($_SESSION['user'])){ ?>

  <span style="font-weight:600;">Hi, <?php echo $_SESSION['user']; ?></span>
  <a href="logout.php" title="Logout">
    <i class="fa-solid fa-right-from-bracket"></i>
  </a>

<?php }else{ ?>

  <a href="login.php" title="Login">
    <i class="fa-regular fa-user">Login</i>
  </a>

<?php } ?>

  <a href="cart.php" title="Cart" class="cart-icon">
    <i class="fa-solid fa-cart-shopping">Cart</i>
    <span class="cart-count">0</span>
  </a>

</div>

</div>


<!-- NEW ARRIVALS -->
<!-- NEW ARRIVALS IMAGE -->
<div class="new-arrivals-wrapper">
  <div class="new-arrivals-banner">
    <img src="uploads/fashion.jpg" alt="New Arrivals">

    <div class="new-arrivals-overlay">
      <h2><b>NEW ARRIVALS</b></h2>
      <p><b>Men • Women • Kids</b></p>
      <a href="men.php" class="btn btn-light mt-2"><b>Shop Now</b></a>
    </div>
  </div>
</div>


<!-- TRENDING COLLECTION -->
<!-- TRENDING COLLECTION -->
<div class="trending-wrapper">
  <div class="trending-banner">
    <img src="uploads/trending.png" alt="Trending Collection">

    <div class="trending-overlay">
      <h2><b>TRENDING COLLECTION</b></h2>
      <p><b>Winter • Party • Casual</b></p>
      <a href="trending.php" class="btn btn-light mt-2"><b>View Trending</b></a>
    </div>
  </div>
</div>

<!-- CATEGORY -->
<!-- CATEGORY -->
<div class="container mt-5">
  <div class="row g-4">

    <div class="col-md-4 text-center">
      <a href="men.php">
        <img src="uploads\mens collection.png"
             style="width:100%;max-height:260px;object-fit:contain;">
        <h4 class="mt-2">MEN</h4>
      </a>
    </div>

    <div class="col-md-4 text-center">
      <a href="women.php">
        <img src="uploads\women collection.png"
             style="width:100%;max-height:260px;object-fit:contain;">
        <h4 class="mt-2">WOMEN</h4>
      </a>
    </div>

    <div class="col-md-4 text-center">
      <a href="kids.php">
        <img src="uploads\kids collecton.png"
             style="width:100%;max-height:260px;object-fit:contain;">
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
