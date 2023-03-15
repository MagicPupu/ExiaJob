<!DOCTYPE html>
<html>

<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf_8">
  <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
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
  <main>
    <div class="container">
      <div class="gauche">
        <div class="phrase-accroche">
          <p>Trouvez le stage <br> de vos <span style="color:#FCB4B5">rêves 🏝️</span></p>
        </div>
        <div class="barre-recherche1">
          <span class="search-icon"><i class="fas fa-search"></i></span>
          <input type="text" id="search" placeholder="Recherche...">
          <button type="submit"><i class="submit1"></i></button>
        </div>
        <div class="barre-recherche2">
          <input type="text" id="search" placeholder="Recherche...">
          <span class="search-icon"><i class="fas fa-search"></i></span>
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
          <button type="button"><pre>Voir les offres ➔</pre></button>
        </div>
      </div>
    </div>
    </div>

    <div class="home-job">
      <img src="{{ asset('/images/home-job.png') }}" alt="Mon image">
    </div>
    </div>

    <!--Deuxième partie-->
    <div class="recents">
      <p>Offres récentes<p>
          <div class="more"><a
              href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg">Voir
              plus</a></div>
    </div>

    <div class="box-recent">
      <div class="entreprise">
        <div class="entreprise-card">
          <div class="entreprise-front">
            <div class="entreprise-content">
              <img src="{{ asset('/images/mcdo.png') }}" alt="entreprise-photo" />
              <h1>McDonald’s</h1>
              <h2>Développeur</h2>
              <p>Destinize membuat kamu selalu update
                terkait tempat liburan baru di Indonesia de...</p>
              <div class="more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg">Voir
                  plus</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="entreprise">
        <div class="entreprise-card">
          <div class="entreprise-front">
            <div class="entreprise-content">
              <img src="{{ asset('/images/mcdo.png') }}" alt="entreprise-photo" />
              <h1>McDonald’s</h1>
              <h2>Développeur</h2>
              <p>Destinize membuat kamu selalu update
                terkait tempat liburan baru di Indonesia de...</p>
              <div class="more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg">Voir
                  plus</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="entreprise">
        <div class="entreprise-card">
          <div class="entreprise-front">
            <div class="entreprise-content">
              <img src="{{ asset('/images/mcdo.png') }}" alt="entreprise-photo" />
              <h1>McDonald’s</h1>
              <h2>Développeur</h2>
              <p>Destinize membuat kamu selalu update
                terkait tempat liburan baru di Indonesia de...</p>
              <div class="more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg">Voir
                  plus</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="entreprise">
        <div class="entreprise-card">
          <div class="entreprise-front">
            <div class="entreprise-content">
              <img src="{{ asset('/images/mcdo.png') }}" alt="entreprise-photo" />
              <h1>McDonald’s</h1>
              <h2>Développeur</h2>
              <p>Destinize membuat kamu selalu update
                terkait tempat liburan baru di Indonesia de...</p>
              <div class="more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg">Voir
                  plus</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="more-entreprise"><a
        href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg"
        class="more-entreprise">Voir les différentes entreprises</a></div>
    <h1 id="entreprises-h1">Entreprises</h1>
    <p id="sous-entreprises">Penasaran apa saja review dari pengguna yang memakai aplikasi dan website Destinize buat
      <br> nentuin kemana liburan mereka selanjutnya? Yuk cek dibawah!</p>




    <div class="box-entreprise">
      <div class="container-etudiant">
        <div class="card-etudiant">
          <div class="front-etudiant">
            <div class="front-content-etudiant">
              <img src="{{ asset('/images/mcdo.png') }}" alt="photo" />
              <p>Destinize membantu saya
                Mencari spot tempat wisata baru
                di Indonesia dengan Mudah</p>
              <div class="etoiles">
                <i id="etoile1" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile2" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile3" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile4" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile5" class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="front-content-etudiant-more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg"
                  class="more-offres">3 offres</a></div>
              <h2>McDonald’s</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container-etudiant">
        <div class="card-etudiant">
          <div class="front-etudiant">
            <div class="front-content-etudiant">
              <img src="{{ asset('/images/mcdo.png') }}" alt="photo" />
              <p>Destinize membantu saya
                Mencari spot tempat wisata baru
                di Indonesia dengan Mudah</p>
              <div class="etoiles">
                <i id="etoile1" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile2" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile3" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile4" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile5" class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="front-content-etudiant-more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg"
                  class="more-offres">3 offres</a></div>
              <h2>McDonald’s</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="container-etudiant">
        <div class="card-etudiant">
          <div class="front-etudiant">
            <div class="front-content-etudiant">
              <img src="{{ asset('/images/mcdo.png') }}" alt="photo" />
              <p>Destinize membantu saya
                Mencari spot tempat wisata baru
                di Indonesia dengan Mudah</p>
              <div class="etoiles">
                <i id="etoile1" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile2" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile3" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile4" class="fa fa-star" aria-hidden="true"></i>
                <i id="etoile5" class="fa fa-star" aria-hidden="true"></i>
              </div>
              <div class="front-content-etudiant-more"><a
                  href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg"
                  class="more-offres">3 offres</a></div>
              <h2>McDonald’s</h2>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="more-etudiants"><a
        href="https://www.affiches-parisiennes.com/content/articles/27812/main_adobestock103343942-ld.jpg"
        class="more-etudiants">Voir les étudiants</a></div>
    <h1 id="etudiants-h1">Etudiants</h1>

    <div class="box-etudiants">
      <div class="container-entreprise">
        <div class="card-entreprise">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
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
      <div class="container-entreprise">
        <div class="card-entreprise">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
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
      <div class="container-entreprise">
        <div class="card-entreprise">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
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
    </div>


    <br>
    <br>
    <br>
  </main>
  <footer>

  </footer>
</body>

</html>