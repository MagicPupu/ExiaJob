@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/students.css') }}">

@section('content')
<body>
  <main>
    <h1 id="etudiants-h1">Etudiants</h1>
    <p id="studentNumber">{{ $students->count() }} etudiants</p>

    <!--box entreprise-->
    <div class="box-etudiant">
      @foreach($students as $student)
      <div class="container-etudiant">
        <div class="card-etudiant" id="{{ $student->id }}">
          <div class="front-etudiant">
            <div class="front-content-etudiant">
              <img src="{{ asset('/images/profile_pictures/'.$student->image) }}" alt="photo" />
              <h1>{{ $student->name }}</h1>
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

  <script src="{{ asset('/js/students.js') }}"></script>

  <footer>

  </footer>
</body>
@endsection