@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/pilots.css') }}">

@section('content')
<main>
    <h1 id="pilots-h1">Pilotes</h1>
    <div class="search-bar-pilot">
      <div class="blue-search-icon">
        <i id="blue-circle"></i>
        <span class="search-icon-pilot"><i class="fas fa-search"></i></span>
      </div>
      <button class="filtrer" type="button">
        Filter par
      </button>
      <input id="search-pilot" type="text" placeholder="Chercher un Pilote, un centre, ...">
    </div>
    <p id="sous-pilots">Penasaran apa saja review dari pengguna yang memakai aplikasi dan website Destinize buat
      <br> nentuin kemana liburan mereka selanjutnya? Yuk cek dibawah!</p>
    <p id="studentNumber">{{ $pilots->count() }} pilotes</p>

    <!--box pilot-->
    <div class="box-pilot">
      @foreach($pilots as $pilot)
      <div class="container-pilot">
        <div class="card-pilot">
          <div class="front-pilot">
            <div class="front-content-pilot">
              <img src="{{ asset('/images/profile_pictures/'.$pilot->image) }}" alt="photo" />
              <h1>{{ $pilot->name }}</h1>
              <p>{{ $pilot->description }}</p>
              <h2>{{ $pilot->promo }}</h2>
              <p>{{ $pilot->skills }}</p>
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
  <footer>

  </footer>
</body>
@endsection