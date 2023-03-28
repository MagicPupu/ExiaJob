@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/pilots.css') }}">

@section('content')
<main>
    <h1 id="pilots-h1">Pilotes</h1>
    <p id="studentNumber">{{ $pilots->count() }} pilotes</p>

    <!--box pilot-->
    <div class="box-pilot">
      @foreach($pilots as $pilot)
      <div class="container-pilot">
        <div class="card-pilot" id="{{ $pilot->id }}">
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

  <script src="{{ asset('/js/pilots.js') }}"></script>

  <footer>

  </footer>
</body>
@endsection