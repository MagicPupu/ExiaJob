@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/card-student.css') }}">

@section('content')
<body>
  <div class="page">
    <div class="box">
      <div class="photoNameAdress">
        <img src="{{ asset('/images/profile_pictures/'.$student->image) }}" alt="photo" id="profilePicture">
        <h0>{{ $student->name }}</h0>
        <div class="adress">
          <img src="{{ asset('/images/dashboard/image_47.png') }}" alt="logoTel" id="logoTel">
          <img src="{{ asset('/images/dashboard/image_48.png') }}" alt="logoMail" id="logoMail">
          <div class="phoneNumber">{{ $student->phone }}</div>
          <div class="mailAdress">{{ $student->email }}</div>
        </div>
      </div>
      <div class="bio">
        <h1>Biographie</h1>
        <h3>{{ $student->description }}</h3>
      </div>
      <div class="skills">
        <h1>Compétences</h1>
        <div class="multiSmallerBox">
          <button class="smallerBox">{{ $student->first_skill }}</button>
          <button class="smallerBox">{{ $student->second_skill }}</button>
          <button class="smallerBox">{{ $student->third_skill }}</button>
        </div>
      </div>
      <div class="centrepromos">
        <div class="centre">
          <h1>Centre</h1>
          <h2>{{ $student->centre }}</h2>
        </div>
        <div class="assignedPromos">
          <h1>Promotion</h1>
          <h2>{{ $student->promo }}</h2>
        </div>
      </div>

      <div class="bottombutton">
        @auth
          @if (Auth::user()->status == 'pilot' or 'admin')
            <form action="{{ route('destroy-student', $student->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit">Supprimer</button>
            </form>
          @endif
        @endauth
      </div>

    </div>
</body>
@endsection