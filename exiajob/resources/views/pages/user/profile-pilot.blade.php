@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/profile.css') }}">

@section('content')
<body>
  <div class="page">
    <div class="box">
      <div class="photoNameAdress">
        <img src="{{ asset('/images/profile_pictures/'.$user->image) }}" alt="photo" id="profilePicture">
        <h0>{{ $user->name }}</h0>
        <img src="{{ asset('/images/dashboard/image_46.png') }}" alt="edit" id="edit">
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
      <div class="trustedCompany">
        <h1>Entreprise confiante</h1>
        <div class="multiBox">
          @foreach($offers as $offer)
          <div class="boxSmall">
            <img src="{{ asset('/images/company_pictures/'.$offer->image) }}" alt="companyLogo" id="companyLogo" />
            <span class="companyName">{{ $offer->name }}</span>
            <div class="stars">
              @for ($i = 0; $i < $offer->rate; $i++)
                  <i id="etoile1" class="gold fa fa-star" aria-hidden="true"></i>
              @endfor
              @for ($i = $offer->rate; $i < 5; $i++)
                  <i id="etoile1" class="gray fa fa-star" aria-hidden="true"></i>
              @endfor
            </div>
            <span class="offerNumber">{{ $offer->offers }} offres</span>
          </div>
          @endforeach
          <div class="addBoxSmall">
            <span class="add">+</span>
          </div>
        </div>
      </div>
      <div class="bottombutton">
        <button type="button" id="offre">Poster une offre</button>
        <button type="button" id="etudiants">Ajouter un étudiant</button>
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