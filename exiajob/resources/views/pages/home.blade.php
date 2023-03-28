@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/home.css') }}">

@section('content')
<main>
    <div class="container">
      <div class="gauche">
        <div class="phrase-accroche">
          <p>Trouvez le stage <br> de vos <span style="color:#FCB4B5">rêves 🏝️</span></p>
        </div>
        <br>
        <br>
        <div class="para1">
          <p>Quo cognito Constantius ultra mortalem modum exarsit ac nequo<br>
            casu idem Gallus de futuris incertus agitare quaedam conducentia salutisuae per itinera conaretur,
            remoti sunt omnes de industria milites agentes in civitatibus perviis.</p>
        </div>
        <!--Offres recents-->
        <div class="offres">
          <a href="{{ route('offers') }}">
            <button type="button"><pre>Voir les offres <div class="arrow"><i class="fas fa-arrow-right"></i></div></pre></button>
          </a>
        </div>
        <!---->
      </div>
    </div>
    </div>
    <!--Image droite-->
    <div class="home-job">
      <img src="{{ asset('/images/home-job.png') }}" alt="Mon image">
    </div>
    <!---->
    </div>

    <!--Offres recents-->
    <div class="recents">
      <p>Offres récentes<p>
          <div class="more"><a href="{{ route('offers') }}">Voir plus</a></div>
    </div>

    <div class="box-recent">
      @foreach ($last_4_offers as $offer)
      <div class="entreprise">
        <div class="entreprise-card">
          <div class="entreprise-front">
            <div class="entreprise-content">
              <img src="{{ asset('/images/company_pictures/'.$offer->image) }}" alt="entreprise-photo" />
              <h2>{{ $offer->name }}</h2>
              <p>{{ $offer->description }}</p>
              <div class="more"><a href="offers/card/{{ $offer->id }}">Voir plus</a></div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="more-entreprise"><a href="{{ route('companies') }}" class="more-entreprise">Voir les différentes entreprises</a></div>
    <h1 id="entreprises-h1">Entreprises</h1>
    <p id="sous-entreprises">Penasaran apa saja review dari pengguna yang memakai aplikasi dan website Destinize buat
      <br> nentuin kemana liburan mereka selanjutnya? Yuk cek dibawah!</p>



    <!--box entreprise-->
    <div class="box-entreprise">
      @foreach ($best_rated_companies as $company)
      <div class="container-entreprise">
        <div class="card-entreprise" id="{{ $company->id }}">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
              <img src="{{ asset('/images/company_pictures/'.$company->image) }}" alt="photo" />
              <p>{{ $company->description }}</p>
              <div class="etoiles">
                @for ($i = 0; $i < $company->rate; $i++)
                    <i class="gold fa fa-star" aria-hidden="true"></i>
                @endfor
                @for ($i = $company->rate; $i < 5; $i++)
                    <i class="gray fa fa-star" class="gray" aria-hidden="true"></i>
                @endfor
              </div>
                <h2>{{ $company->name }}</h2>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>


    <!--box etudiants-->
    <div class="more-etudiants"><a href="{{ route('students') }}" class="more-etudiants">Voir les étudiants</a></div>
    <h1 id="etudiants-h1">Etudiants</h1>

    <div class="box-etudiants">
        @foreach ($last_3_users->reverse() as $user)
        <div class="container-etudiant">
            <div class="card-etudiant" id="{{ $user->id }}">
                <div class="front-etudiant">
                    <div class="front-content-etudiant">
                        <img src="{{ asset('/images/profile_pictures/'.$user->image) }}" alt="photo" />
                        <h1>{{ $user->name }}</h1>
                        <p>{{ $user->description }}</p>
                        <h2>{{ $user->promo }}</h2>
                        <p>{{ $user->skills }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <br>
    <br>
    <br>
  </main>

  <script src="{{ asset('/js/home.js') }}"></script>

@endsection