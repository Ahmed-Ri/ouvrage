<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style1.css" />

</head>
<!-- vh-100 overflow-hidden -->

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Livres pour tous</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="category.php">CATEGORY</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="#">LIBRAIRIE</a>
          </li>
        </ul>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div>
    <h1>La Bibliothèque électronique du Lyon</h1>
    <h4>Textes d'auteurs appartenant au domaine public</h4>
  </div><br><br><br><br>
  <div class="container">
    <div class="card">
      <img src="im3.jpg" alt="">
      <h4>romans</h4>
    </div>
    <div class="card">
      <img src="im2.jpg" alt="">
      <h4>livres pour enfants</h4>
    </div>
    <div class="card">
      <img src="im4.jpg" alt="">
      <h4>livres de poésie</h4>
    </div>
    <div class="card">
      <img src="im5.jpg" alt="">
      <h4>magazines</h4>
    </div>
    <div class="card">
      <img src="im6.jpg" alt="">
      <h4>livres de recettes</h4>
    </div>
    <div class="card">
      <img src="im8.jpg" alt="">
      <h4>modes d’emploi</h4>
    </div>
  </div>

  <script src="style.js"></script>
</body>

</html>