@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/pilot-card.css') }}">

@section('content')
<body>
  <div class="page">
    <div class="box">
      <div class="photoNameAdress">
        <img src="{{ asset('/images/profile_pictures/'.$pilot->image) }}" alt="photo" id="profilePicture">
        <h1>{{ $pilot->name }}</h1>
        <div class="adress">
          <img src="{{ asset('/images/dashboard/image_47.png') }}" alt="logoTel" id="logoTel">
          <img src="{{ asset('/images/dashboard/image_48.png') }}" alt="logoMail" id="logoMail">
          <div class="phoneNumber">{{ $pilot->phone }}</div>
          <div class="mailAdress">{{ $pilot->email }}</div>
        </div>
      </div>
      <div class="bio">
        <h1>Biographie</h1>
        <h2>{{ $pilot->description }}</h2>
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
    </div>
</body>
@endsection