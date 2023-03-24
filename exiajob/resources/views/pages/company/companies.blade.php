@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/companies.css') }}">

@section('content')
<body>
  <main>
    <h1 id="entreprises-h1">Entreprises</h1>
    <div class="search-bar-entreprise">
      <div class="blue-search-icon">
        <i id="blue-circle"></i>
        <span class="search-icon-entreprise"><i class="fas fa-search"></i></span>
      </div>
      <button class="filtrer" type="button">
        Filter par
      </button>
      <input id="search-entreprise" type="text" placeholder="Chercher un Pilote, un centre, ...">
    </div>
    <p id="sous-entreprises">Penasaran apa saja review dari pengguna yang memakai aplikasi dan website Destinize buat
      <br> nentuin kemana liburan mereka selanjutnya? Yuk cek dibawah!</p>
    <p id="companyNumber">{{ $companies->count() }} entreprises</p>

    <!--box entreprise-->
    <div class="box-entreprise">
      @foreach ($companies as $company)
      <div class="container-entreprise">
        <div class="card-entreprise" id="{{ $company->id }}">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
              <img src="{{ asset('/images/company_pictures/'.$company->image) }}" alt="photo" />
              <p>{{ $company->description }}</p>
              <div class="etoiles">
                @for ($i = 0; $i < $company->rate; $i++)
                    <i id="etoile1" class="gold fa fa-star" aria-hidden="true"></i>
                @endfor
                @for ($i = $company->rate; $i < 5; $i++)
                    <i id="etoile1" class="gray fa fa-star" aria-hidden="true"></i>
                @endfor
              </div>
              <div class="front-content-entreprise-more">{{ $company->offers }} offres</a></div>
              <h2>{{ $company->name }}</h2>
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

  <script src="{{ asset('/js/companies.js') }}"></script>

  <footer>

  </footer>
</body>
@endsection