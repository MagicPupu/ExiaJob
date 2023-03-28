<!DOCTYPE html>
<html lang="fr">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf_8">
  <link rel="stylesheet" href="{{ asset('/css/layout.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@800&display=swap" rel="stylesheet">
  <!--flip-->
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <link href='https://fonts.googleapis.com/css?family=Plus Jakarta Sans' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  
  <script src="https://kit.fontawesome.com/82bd8e2047.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/3f820fe812.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Plus+Jakarta Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/7F3iKz7X7B59D2v5z5u5g5/qLBw5mv1r0vzj+9" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="logo">
      <img src="{{ asset('/images/logo.png') }}" alt="logo">
      <a href="/">
        <h1>{{ config('app.name') }}</h1>
      </a>
    </div>
    <div class="search-bar">
      <form action="{{ route('search') }}" method="get">
        <input id="search" name="query" type="text" placeholder="Recherche...">
        <span class="search-icon"><button type="submit"><i class="fas fa-search"></i></button></span>
      </form>
    </div>
    <nav>
      <ul class="snip1198">
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('offers') }}">Offres</a></li>
        <li><a href="{{ route('students') }}">Étudiants</a></li>
        <li><a href="{{ route('pilots') }}">Pilotes</a></li>
        <li><a href="{{ route('companies') }}">Entreprises</a></li>
      </ul>
    </nav>
      <div class="login">
        @if (auth()->guest())
        <a href="{{ route('login') }}">
          <button type="button">Connexion</button>
        </a>
        @endif

        @if (auth()->check())
          @auth
            @if (Auth::user()->status == 'pilot')
              <a href="{{ route('profile-pilot') }}">
                <img src="{{ asset('/images/profile_pictures/'.Auth::user()->image) }}" alt="profile-picture"/>
              </a>
            @elseif (Auth::user()->status == 'student')
              <a href="{{ route('profile-student') }}">
                <img src="{{ asset('/images/profile_pictures/'.Auth::user()->image) }}" alt="profile-picture"/>
              </a>
            @endif
          @endauth
        @endif
    </div>
    
  </header>
  
  @yield('content')

  <footer>
    
  </footer>
</body>

</html>