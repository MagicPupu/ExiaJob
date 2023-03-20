@extends('layout')

<link href="https://fonts.googleapis.com/css?family=Plus+Jakarta Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Public+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{ asset('/css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('/css/variables.scss') }}">

@section('content')
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
        <h1>Description</h1>
        <h3>{{ $user->description }}</h3>
      </div>

      <div class="skills">
        <h1>Compétences</h1>
        <div class="multiSmallerBox">
          <div class="smallerBox">
            <span class="skillName">Python</span>
          </div>
          <div class="smallerBox">
            <span class="skillName">HTML</span>
          </div>
          <div class="smallerBox">
            <span class="skillName">Figma</span>
          </div>
          <div class="addSmallerBox">
            <span class="add">+</span>
          </div>
        </div>
      </div>

      <div class="centrepromos">
        <div class="centre">
          <h1>Centre</h1>
          <h2>Bordeaux Cedex</h2>
        </div>
        <div class="assignedPromos">
          <h1>Promotion assignée(s)</h1>
          <h2>A2_BTP A3_BTP A4_BTP A1_Généraliste A2_Informatique </h2>
        </div>
      </div>

      <div class="trustedCompany">
        <h1>Entreprise confiante</h1>
        <div class="multiBox">
          <div class="boxSmall">
            <img src="{{ asset('/images/dashboard/logoAmazon.png') }}" alt="companyLogo" id="companyLogo" />
            <span class="companyName">Amazon</span>
            <div class="stars">
              <i class="fa fa-star" aria-hidden="true" id="star1"></i>
              <i class="fa fa-star" aria-hidden="true" id="star2"></i>
              <i class="fa fa-star" aria-hidden="true" id="star3"></i>
              <i class="fa fa-star" aria-hidden="true" id="star4"></i>
              <i class="fa fa-star" aria-hidden="true" id="star5"></i>
            </div>
            <span class="offerNumber">12 offres</span>
          </div>

          <div class="boxSmall">
            <img src="{{ asset('/images/dashboard/logoAmazon.png') }}" alt="companyLogo" id="companyLogo" />
            <span class="companyName">Amazon</span>
            <div class="stars">
              <i class="fa fa-star" aria-hidden="true" id="star1"></i>
              <i class="fa fa-star" aria-hidden="true" id="star2"></i>
              <i class="fa fa-star" aria-hidden="true" id="star3"></i>
              <i class="fa fa-star" aria-hidden="true" id="star4"></i>
              <i class="fa fa-star" aria-hidden="true" id="star5"></i>
            </div>
            <span class="offerNumber">12 offres</span>
          </div>

          <div class="addBoxSmall">
            <span class="add">+</span>
          </div>
        </div>
      </div>
      <div class="logout">
        <a href="#" onclick="document.getElementById('logout-form').submit()">
          <form action="{{ route('logout') }}" method="post" id="logout-form">
            @csrf
            <button type="button" id="deco">Déconnexion</button>
          </form>
        </a>
      </div>
    </div>
  </div>
</body>
@endsection