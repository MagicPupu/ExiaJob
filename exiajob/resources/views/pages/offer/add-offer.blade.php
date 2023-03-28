@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/add-offer.css') }}">

@section('content')
<body>
    <h1>Créer ou modifier une offre</h1>
    <div class="offre">
        <form action="{{ route('store-offer') }}" method="post">
            @csrf
            <div class="titre">
                <h2>Titre</h2>
                <textarea id="ta" rows="1" name="name" placeholder="Quel est votre stage ?"></textarea>
                <p id="ct"></p>
            </div>

            <div class="description">
                <h2>Description</h2>
                <textarea id="txa" rows="10" name="description" placeholder="The start of a wonderful story..."></textarea>
                <p id="cnt"></p>
            </div>

            <h2>Choisissez jusqu'à trois compétences:</h2>
            <div id="skill-form">
                <div class="skill-container">
                    <h2>Compétences 1:</h2>
                    <select name="skills1" multiple>
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="JavaScript">JavaScript</option>
                        <option value="PHP">PHP</option>
                        <option value="Python">Python</option>
                    </select>
                </div>
                <div class="skill-container">
                    <h2>Compétences 2:</h2>
                    <select name="skills2" multiple>
                        <option value="React">React</option>
                        <option value="Vue">Vue</option>
                        <option value="Angular">Angular</option>
                        <option value="Node">Node</option>
                        <option value="Express">Express</option>
                    </select>
                </div>
                <div class="skill-container">
                    <h2>Compétences 3:</h2>
                    <select name="skills3" multiple>
                        <option value="MySQL">MySQL</option>
                        <option value="PostgreSQL">PostgreSQL</option>
                        <option value="MongoDB">MongoDB</option>
                        <option value="Redis">Redis</option>
                        <option value="Firebase">Firebase</option>
                    </select>
                </div>
            </div>
            <div class="trois">
                <div class="local">
                    <div>
                        <h2><i class="fa-sharp fa-solid fa-location-dot"></i>Lieux</h2>
                    </div>
                    <div class="search-box">
                        <input type="text" name="city" placeholder="Localisation">
                    </div>
                </div>
                <div class="dure">
                    <div>
                        <h2><i class="fa-regular fa-calendar"></i>Durée</h2>
                    </div>
                    <div class="search-box">
                        <input type="text" name="duration" placeholder="Dates">
                    </div>
                </div>
                <div class="salary">
                    <div>
                        <h2><img src="{{ asset('/images/offers/euro.png') }}" alt="€">Salaire</h2>
                    </div>
                    <div class="search-box">
                        <input type="text" name="price" placeholder="Salaire">
                    </div>
                </div>
                <div class="company">
                    <div>
                        <h2>Entreprise</h2>
                    </div>
                    <div class="search-box">
                        <input type="text" name="company_name" placeholder="Nom de l'entreprise">
                    </div>
                </div>
            </div>
            <div class="sub">
                <button type="submit">Publier</button>
            </div>
        </form>
    </div>

    <script src="{{ asset('/js/add-offer.js') }}"></script>

</body>
@endsection