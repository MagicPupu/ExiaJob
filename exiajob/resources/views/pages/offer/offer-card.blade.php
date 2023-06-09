@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/offer-card.css') }}">

@section('content')
<body>
    <div class="offre-detail">
        <div class="headd">
            <img src="{{ asset('/images/company_pictures/'.$offer->image) }}" alt="mcdo">
            <div class="desc">
                <p class="titre">{{ $offer->name }}</p>
                <p class="job">{{ $offer->offer_name }}</p>
                <div class="detail">
                    <div class="local">
                        <h2><i class="fa-sharp fa-solid fa-location-dot"></i>{{ $offer->city }}</h2>
                    </div>
                    <div class="dure">
                        <h2><i class="fa-regular fa-calendar"></i>{{ $offer->duration }} mois</h2>
                    </div>
                    <div class="salary">
                        <h2><img src="{{ asset('/images/offers/euro.png') }}" alt="€">{{ $offer->price }}</h2>
                    </div>
                </div>
            </div>
        </div>  
        <div class="descr">
            <h2>Description</h2>
            <p>{{ $offer->offer_description }}</p>
        </div> 
        <div class="comp">
            <h2>Competence</h2>
            <div class="tags">
                <button class="tag">{{ $offer->skill1 }}</button>
                <button class="tag">{{ $offer->skill2 }}</button>
                <button class="tag">{{ $offer->skill3 }}</button>
            </div>
        </div>
        <div class="details">
            <h2>Detail de l'entreprise</h2>
            <div class="avis">
                <div class="note">
                    <div class="etoiles">
                        @for ($i = 0; $i < $offer->rate; $i++)
                            <i id="etoile1" class="gold fa fa-star" aria-hidden="true"></i>
                        @endfor
                        @for ($i = $offer->rate; $i < 5; $i++)
                            <i id="etoile1" class="gray fa fa-star" aria-hidden="true"></i>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="descri">
                <p>4000 employés</p>
                <p>{{ $offer->description }}</p>
            </div>
            <div class="app">
                <a href="{{ $offer->link }}">{{ $offer->name }}</a>
            </div>
            <div class="post">
                @if (Auth::user()->status == 'student')
                    <input class="postuler" id="{{ $offer->id }}" type="button" value="Postuler" name="candidate">
                @endif
            </div>
        </div>

        <div class="bottombutton">
        @auth
          @if (Auth::user()->status == 'pilot' or 'admin')
            <form action="{{ route('destroy-offer', $offer->id) }}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit">Supprimer</button>
            </form>
          @endif
        @endauth
      </div>

    </div>
</body>

<script src="{{ asset('/js/offer-card.js') }}"></script>

@endsection