@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/company-card.css') }}">

@section('content')
<body>
  <div class="page">
    <div class="box">
      <div class="photoName">
        <img src="{{ asset('/images/company_pictures/'.$company->image) }}" alt="logo" id="profilePicture">
        <div class="nameStars">
        <a>{{ $company->name }}</a>
        <div class="stars">
          @for ($i = 0; $i < $company->rate; $i++)
              <i class="gold fa fa-star" aria-hidden="true"></i>
          @endfor
          @for ($i = $company->rate; $i < 5; $i++)
              <i class="gray fa fa-star" aria-hidden="true"></i>
          @endfor
        </div>
      </div>
      </div>
      <div class="bio">
        <h3>{{ $company->description }}</h3>
      </div>
      <div class="Offres">
        <h2>Offres en cours</h2>
        <ul>
          @foreach($offers as $offer)
            <li><a href="{{ url('/offers/card/'.$offer->id) }}">{{ $offer->offer_name }}</a></li>
          @endforeach
        </ul>
      </div>
    </div>
</body>
@endsection