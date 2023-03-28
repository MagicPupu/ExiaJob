@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/profile-pilot.css') }}">

@section('content')
<body>
  <div class="page">
    <div class="box">
      <div class="photoNameAdress">
        <img src="{{ asset('/images/profile_pictures/'.$user->image) }}" alt="photo" id="profilePicture">
        <h0>{{ $user->name }}</h0>
        <a href="{{ route('edit-profile') }}">
          <img src="{{ asset('/images/dashboard/image_46.png') }}" alt="edit" id="edit">
        </a>
        <div class="adress">
          <img src="{{ asset('/images/dashboard/image_47.png') }}" alt="logoTel" id="logoTel">
          <img src="{{ asset('/images/dashboard/image_48.png') }}" alt="logoMail" id="logoMail">
          <div class="phoneNumber">{{ $user->phone }}</div>
          <div class="mailAdress">{{ $user->email }}</div>
        </div>
      </div>
      <div class="bio">
        <h1>Biographie</h1>
        <h3>{{ $user->description }}</h3>
      </div>
      <div class="skills">
        <h1>Compétences</h1>
        <div class="multiSmallerBox">
          <button class="smallerBox">{{ $user->first_skill }}</button>
          <button class="smallerBox">{{ $user->second_skill}}</button>
          <button class="smallerBox">{{ $user->third_skill }}</button>
        </div>
      </div>
      <div class="centrepromos">
        <div class="centre">
          <h1>Centre</h1>
          <h2>{{ $user->centre }}</h2>
        </div>
        <div class="assignedPromos">
          <h1>Promotion(s) assignée(s)</h1>
          <h2>{{ $user->promo }}</h2>
        </div>  
      </div>
      <div class="bottombutton">
        <a href="{{ route('add-offer') }}">
          <button type="button" id="offre">Poster une offre</button>
        </a>
        <a href="{{ route('register-student') }}">
          <button type="button" id="etudiants">Ajouter un étudiant</button>
        </a>
        <a href="#" onclick="document.getElementById('logout-form').submit()">
          <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf
            <button type="button" id="deco">Déconnexion</button>
          </form>
        </a>
      </div>
    </div>
</body>
@endsection