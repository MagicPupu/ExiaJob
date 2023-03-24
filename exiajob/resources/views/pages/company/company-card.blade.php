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
        <h1>{{ $company->description }}</h3>
      </div>
      <div class="Offres">
        <h1>Offres en cours</h1>
        <ul>
          @foreach($offers as $offer)
            <li><a href="{{ url('/offers/card/'.$offer->id) }}">{{ $offer->offer_name }}</a></li>
          @endforeach
        </ul>
      </div>
      <div class="trustedPilotes">
          <h1>Confiance de(s) pilote(s)</h1>
          <ul>
            <li> <a href="https://urlz.fr/l6U2">Rocher Tatiana</a>  </li>
            <li> <a href="https://urlz.fr/l6U2">moi</a></li>
            <li> <a href="https://urlz.fr/l6U2">Personne</a></li>
            <li> <a href="https://urlz.fr/l6U2">Julien </a></li>
          </ul>
      </div>
    </div>
</body>
@endsection