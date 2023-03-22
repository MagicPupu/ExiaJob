@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/edit-profile.css') }}">

@section('content')
<body>
    <h1>MODIFIER LE PROFIL</h1>
    <div class="contenaire">
        <form action="{{ route('update-profile', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="search-box">
                <input type="text" id="search" placeholder="Recherchez une compétence">
            </div>
            <select id="skills" size="10">
            </select>
            <div class="selected-skills">
                <h2>Compétences sélectionnées:</h2>
                <ul id="selected-skills-list">
                </ul>
            </div>
            <div class="additional-info">
                <h2>Informations supplémentaires:</h2>
                <label for="bio">Biographie (600 caractères max):</label>
                <textarea id="bio" name="description" maxlength="600" rows="4" cols="50" value="{{ $user->description }}"></textarea>
                <label for="cv">CV:</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" value="{{ $user->cv }}">
                <label id="phone" for="phone">Numéro de téléphone:</label>
                <input type="tel" name="phone" id="phone" value="{{ $user->phone }}">
            </div>
            <button type="submit" id="submit-btn">Envoyer</button>
        </form>
    </div>

    <script src="{{ asset('/js/edit-profile.js') }}"></script>

</body>
@endsection