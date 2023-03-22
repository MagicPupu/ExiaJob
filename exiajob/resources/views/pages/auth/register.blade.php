@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/register.css') }}">

@section('content')
<body>
    
    <main>
        <h1 id="inscription-h1">Créez un compte</h1>
        <h2 id="etudiant-h2">Etudiant</h2>
        <p id="connexion-p">En créant vous connectant à votre compte, vous aurez la possibilité de postuler à des offres 
            de stage, regrouper certaines offres dans les favoris, être alerté lorsqu’une offre est
            disponible.</p>

        <img id="image-connexion" src="{{ asset('/images/register/image-etudiant.png') }}" alt="image connexion gauche">

        <div class="container">
            <div class="left">
                <img id="chapeau-etudiant" src="{{ asset('/images/register/chapeau-etudiant.png') }}" alt="profile tick">
                <h1 id="Connectez-vous-h1">Compte étudiant ?</h1>
            </div>

            <div class="right">
                <h2 id="veuillez-connecter">Créer un compte <br>étudiant</h2>
                <script src="C:\Users\fabri\Desktop\ExiaJob\inscription.js"></script>
                <div class="add-photo">
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url({{ asset('/images/register/user.png') }});">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-mail-password">
                    <div class="box-login">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <div id="envelope"><i class="fa-regular fa-envelope"></i></div>
                    </div>
                    <div class="box-login">
                        <input type="email" id="email" name="email" placeholder="Nom et Prénom" required>
                        <div id="envelope"><i class="far fa-user"></i></div>
                    </div>
                    <div class="box-login">
                        <input type="email" id="email" name="email" placeholder="Promotion" required>
                        <div id="envelope"><i class="fas fa-school"></i></i></div>
                    </div>
                    <div class="box-login">
                        <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                        <button type="button" id="show-password" aria-label="Afficher/masquer le mot de passe">
                            <span class="toggle-icon" aria-hidden="true"><i class="fa fa-eye"></i></span>
                            <span class="toggle-icon-hidden" aria-hidden="true"><i class="fa fa-eye-slash"></i></span>
                        </button>
                    </div>
                    <div class="box-login">
                        <input type="password" id="password" name="password" placeholder="Comfirmer le mdp"
                            required>
                        <button type="button" id="show-password" aria-label="Afficher/masquer le mot de passe">
                            <span class="toggle-icon" aria-hidden="true"><i class="fa fa-eye"></i></span>
                            <span class="toggle-icon-hidden" aria-hidden="true"><i class="fa fa-eye-slash"></i></span>
                        </button>
                    </div>
                </div>
                <button id="button-connexion" type="submit">Ajouter</button>
            </div>
        </div>
    </main>

    <script src="{{ asset('/js/register.js') }}"></script>

    <footer>

    </footer>
</body>
@endsection