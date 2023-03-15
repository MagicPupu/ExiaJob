<!DOCTYPE html>
<html>

<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf_8">
  <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@800&display=swap" rel="stylesheet">
  <!--flip-->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Plus Jakarta Sans' rel='stylesheet'>
</head>

<body>
  <header>
    <div class="logo">
      <img src="{{ asset('/images/logo.png') }}" alt="logo">
      <h1>ExiaJob</h1>
    </div>
    <div class="search-bar">
      <span class="search-icon"><i class="fas fa-search"></i></span>
      <input id="search" type="text" placeholder="Recherche...">
    </div>
    <nav>
      <ul class="snip1198">
        <li><a href="#">Acceuil</a></li>
        <li><a href="#">Offres</a></li>
        <li><a href="#">Catégories</a>
          <ul class="sous">
            <li><a href="#">Catégories</a></li>
            <li><a href="#">Catégories</a></li>
            <li><a href="#">Catégories</a></li>
          </ul>


        </li>

        <li><a href="#">Entreprises</a></li>
      </ul>
    </nav>
    <div class="login">
      <button type="button">Connexion</button>
    </div>
  </header>
  
  @yield('content')

  <footer>
    
  </footer>
</body>

</html>