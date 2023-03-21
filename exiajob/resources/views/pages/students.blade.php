@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/students.css') }}">

@section('content')
<body>
  <main>
    <h1 id="entreprises-h1">Etudiants</h1>
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
    <p id="studentNumber">{{ $students->count() }} etudiants</p>

    <!--box entreprise-->
    <div class="box-entreprise">
      @foreach($students as $student)
      <div class="container-entreprise">
        <div class="card-entreprise">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
              <img src="{{ asset('/images/profile_pictures/'.$student->image) }}" alt="photo" />
              <h1>{{ $student->name }}</h1>
              <p>{{ $student->description }}</p>
              <h2>{{ $student->promo }}</h2>
              <p>{{ $student->skills }}</p>
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