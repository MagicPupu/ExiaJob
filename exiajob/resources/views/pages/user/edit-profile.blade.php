@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/edit-profile.css') }}">

@section('content')
<body>
    <h1>MODIFIER LE PROFIL</h1>
    <div class="contenaire">
        <form action="{{ route('update-profile', $user->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
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
            <div class="additional-info">
                <h2>Informations supplémentaires:</h2>
                <label for="bio">Biographie (600 caractères max):</label>
                <textarea id="bio" name="description" maxlength="600" rows="4" cols="50" value="{{ $user->description }}"></textarea>
                <label for="cv">CV:</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" value="{{ $user->cv }}">
                <label for="phone">Numéro de téléphone:</label>
                <input type="tel" name="phone" id="phone" value="{{ $user->phone }}">
            </div>
            <button type="submit" id="submit-btn">Envoyer</button>
        </form>
    </div>

    <script src="{{ asset('/js/edit-profile.js') }}"></script>

</body>
@endsection