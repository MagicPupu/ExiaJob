@extends('layout')

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/82bd8e2047.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{ asset('/css/offers.css') }}">

@section('content')
<body>
    <div class="headd">
        <h1>Explorer les offres de stages</h1>
        <p>Explore, ajoute en favoris et postule aux différentes offres de stages</p>    
        <div class="tags">
            <button class="tag">BTP</button>
            <button class="tag">4 mois</button>
            <button class="tag">Récent</button>
            <button class="tag">Directeur chantier</button>
            <button class="tag">Informatique</button>
            <button class="tag">Généraliste</button>
            <button class="tag">Bac +3</button>
            <button class="tag">-100km</button>
            <button class="tag">Developpeur</button>
            <button class="tag">Web Designer</button>
            <button class="more">+ tags</button>
        </div>
        <div class="search-box">
            <input type="text" placeholder="Chercher un stage">
            <div class="search-btn">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
    <div class="bod">
        <div class="filter">
            <div class="wrapper">
                <div class="title">
                    <i class="fa-solid fa-tags"></i>
                    <h2>Tags</h2>
                </div>
                <div class="content">
                    <p>Press enter or add a comma after each tag</p>
                    <ul id="input-tag"><input type="text"></ul>
                </div>
                <div class="details">
                    <p><span>_</span> tags are remaining</p>
                    <button>Remove all</button>
                </div>
            </div>
            <div class="localition">
                <h2>Location</h2>
                <div class="container">
                    <input type="radio" name="localitions" value="prox">A proximité</br>
                    <input type="radio" name="localitions" value="30km">30 km</br>
                    <input type="radio" name="localitions" value="50km">50 km</br>
                    <input type="radio" name="localitions" value="International">International</br>
                    <input type="radio" name="localitions" value="France">France</br>
                </div>
            </div>
            <div class="salary">
                <h2>Salary</h2>
                <div class="container">
                    <input type="radio" name="salarys" value="salaryPas">Pas de préférence</br>
                    <input type="radio" name="salarys" value="500">&#62; 500€</br>
                    <input type="radio" name="salarys" value="700">&#62; 700€</br>
                    <input type="radio" name="salarys" value="1000">&#62; 1000€</br>
                </div>
            </div>
            <div class="date">
                <h2>Date de publication</h2>
                <div class="container">
                    <input type="radio" name="dates" value="Today">Aujourd'hui</br>
                    <input type="radio" name="dates" value="3j">3 derniers jours</br>
                    <input type="radio" name="dates" value="1m">Le mois dernier</br>
                    <input type="radio" name="dates" value="datePas">Pas de préférence</br>
                </div>
            </div>
            <div class="experience">
                <h2>Expérience de travail</h2>
                <div class="container">
                    <input type="radio" name="localitions" value="+2">Bac +2</br>
                    <input type="radio" name="localitions" value="+3">Bac +3</br>
                    <input type="radio" name="localitions" value="+4">Bac +4</br>
                    <input type="radio" name="localitions" value="+5">Bac +5</br>
                </div>
            </div>
            <div class="lieu">
                <h2>Lieu</h2>
                <div class="search-box">
                    <input type="text" placeholder="Trouver un lieu">
                    <div class="search-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="offre">
            @foreach($offers as $offer)
            <h1 class="number">{{ $offers->count() }} offres</h1>
            <div class="offre-detail">
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
                    <p class="description">{{ $offer->description }}</p>
                </div>
                @endforeach
                <div class="save">
                    <i class="fa-regular fa-bookmark fa-xl"></i>
                </div>
            </div>
        </div>
        <div class="news">
            <h2><i class="fa-regular fa-envelope"></i>Newsletter</h2>
            <p>Abonnez-vous pour être tenu au courant des nouvelles offres de stage.</p>
            <input type="email" placeholder="email">
            <button>Abonnez-moi</button>
        </div>
        
    </div>    
    <script src="{{ asset('/js/radio.js') }}"></script>

</body>
@endsection