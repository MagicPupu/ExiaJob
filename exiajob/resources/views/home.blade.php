<!DOCTYPE html>
<html>

<head>
  <title>Pojet Web</title>
  <meta charset="utf_8">
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@800&display=swap" rel="stylesheet">
  <!--flip-->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
</head>

<body>
  <header>
    <div class="logo">
      <img src="{{ asset('/images/logo.png') }}" alt="logo">
      <h1>ExiaJob</h1>
    </div>
    <div class="search-bar">
      <span class="search-icon"><i class="fas fa-search"></i></span>
      <input type="text" placeholder="Recherche...">
    </div>
    <nav>
      <ul>
        <li><a href="#">Accueil</a></li>
        <li><a href="#">Offres</a></li>
        <li class="dropdown">
          <a href="#">Catégories</a>
          <div class="dropdown-content">
            <a href="#">Catégorie 1</a>
            <a href="#">Catégorie 2</a>
            <a href="#">Catégorie 3</a>
          </div>
        </li>
        <li><a href="#">Entreprises</a></li>
      </ul>
    </nav>
    <div class="login">
      <button type="button">Connexion</button>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="gauche">
        <div class="phrase-accroche">
          <p>Trouvez le stage <br> de vos <span style="color:#FCB4B5">rêves 🏝️</span></p>
        </div>
        <div class="barre-recherche1">
          <input type="text" placeholder="Recherche...">
          <button type="submit"><i class="submit1"></i></button>
        </div>
        <div class="barre-recherche2">
          <input type="text" placeholder="Recherche...">
          <button type="submit"><i class="submit2"></i></button>
        </div>
        <br>
        <br>
        <div class="para1">
          <p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo<br>
            casu idem Gallus de futuris incertus agitare quaedam conducentia salutisuae per itinera conaretur,
            remoti sunt omnes de industria milites agentes in civitatibus perviis.</p>
        </div>
        <br>
        <br>
        <div class="offres">
          <button type="button">Voir les offres</button>
        </div>
      </div>

      <div class="home-job">
        <img src="{{ asset('/images/home-job.png') }}" alt="Mon image">
      </div>
    </div>

    <!--Deuxième partie-->
    <div class="recents">
      <p>Offres récentes<p>
    </div>


    <div class="container">
      <div class="card">
        <div class="front">
          <div class="front-content">
            <img src="{{ asset('/images/homme1.png') }}" alt="photo" />
            <h1>Julien</h1>
            <p>Destinize membantu saya
              Mencari spot tempat wisata baru
              di Indonesia dengan Mudah</p>
            <h2>Bordeaux 2023</h2>
            <p>Figma, JavaScript, HTML</p>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
  </main>
  <footer>

  </footer>
</body>

</html>