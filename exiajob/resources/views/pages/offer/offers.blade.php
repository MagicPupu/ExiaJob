@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/offers.css') }}">

@section('content')
<body>
    <div class="headd">
        <h1>Explorer les offres de stages</h1>

        <div class="offres">
            <h1 class="number">{{ $offers->count() }} offres</h1>
            @foreach($offers as $offer)
            <div class="offre">
                <div class="offre-detail" id="{{ $offer->id }}">
                    <div class="image">
                        <img src="{{ asset('/images/company_pictures/'.$offer->image) }}" alt="photo">
                    </div>
                    <div class="desc">
                        <p class="titre">{{ $offer->name }}</p>
                        <p class="job">{{ $offer->offer_name }}</p>
                        <div class="detail">
                            <div class="location">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>{{ $offer->city }}</p>
                            </div>
                            <div class="duration">
                                <i class="fa-regular fa-clock"></i>
                                <p>{{ $offer->duration }} mois</p>
                            </div>
                            <div class="salary">
                                <img src="{{ asset('images/offers/euro.png') }}" alt="€">
                                <p>{{ $offer->price }}</p>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-calendar"></i>
                                <p>{{ $offer->add_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>    
    <script src="{{ asset('/js/offers.js') }}"></script>

</body>
@endsection