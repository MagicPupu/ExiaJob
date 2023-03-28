@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/search.css') }}">

@section('content')
<div class="headd">
    <h1>Résultats de la recherche</h1>

    @if (count($results) > 0)
        @foreach($results as $result)
            <div class="offre">
                <div class="offre-detail" id="{{ $result->id }}">
                    <div class="image">
                        <img src="{{ asset('/images/company_pictures/'.$result->image) }}" alt="photo">
                    </div>
                    <div class="desc">
                        <p class="titre">{{ $result->name }}</p>
                        <p class="job">{{ $result->offer_name }}</p>
                        <div class="detail">
                            <div class="location">
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <p>{{ $result->city }}</p>
                            </div>
                            <div class="duration">
                                <i class="fa-regular fa-clock"></i>
                                <p>{{ $result->duration }} mois</p>
                            </div>
                            <div class="salary">
                                <img src="{{ asset('images/offers/euro.png') }}" alt="€">
                                <p>{{ $result->price }}</p>
                            </div>
                            <div class="time">
                                <i class="fa-regular fa-calendar"></i>
                                <p>{{ $result->add_date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>Aucun résultat trouvé.</p>
    @endif
</div>

<script src="{{ asset('/js/search.js') }}"></script>

@endsection