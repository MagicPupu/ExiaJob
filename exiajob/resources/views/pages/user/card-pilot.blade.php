@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/pilot-card.css') }}">

@section('content')
<body>
  <div class="page">
    <div class="box">
      <div class="photoNameAdress">
        <img src="{{ asset('/images/profile_pictures/'.$pilot->image) }}" alt="photo" id="profilePicture">
        <h0>{{ $pilot->name }}</h0>
        <div class="adress">
          <img src="{{ asset('/images/dashboard/image_47.png') }}" alt="logoTel" id="logoTel">
          <img src="{{ asset('/images/dashboard/image_48.png') }}" alt="logoMail" id="logoMail">
          <div class="phoneNumber">{{ $pilot->phone }}</div>
          <div class="mailAdress">{{ $pilot->email }}</div>
        </div>
      </div>
      <div class="bio">
        <h1>Biographie</h1>
        <h3>{{ $pilot->description }}</h3>
      </div>
      <div class="skills">
        <h1>Compétences</h1>
        <div class="multiSmallerBox">
          <button class="smallerBox">{{ $pilot->first_skill }}</button>
          <button class="smallerBox">{{ $pilot->second_skill }}</button>
          <button class="smallerBox">{{ $pilot->third_skill }}</button>
        </div>
      </div>
      <div class="centrepromos">
        <div class="centre">
          <h1>Centre</h1>
          <h2>{{ $pilot->centre }}</h2>
        </div>
        <div class="assignedPromos">
          <h1>Promotion assignée(s)</h1>
          <h2>{{ $pilot->promo }}</h2>
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
        </div>
      </div>
    </div>
</body>
@endsection