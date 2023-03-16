@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/login.css') }}">
<script src="https://kit.fontawesome.com/3f820fe812.js" crossorigin="anonymous"></script>

@section('content')
    <body>
        <main>
            <h1 id="connexion-h1">Connectez-vous</h1>
            <p id="connexion-p">En créant vous connectant à votre compte, vous aurez la possibilité de postuler à des offres
                de stage,
                regrouper certaines offres dans les favoris, être alerté lorsqu’une offre est disponible.</p>

            <img id="image-connexion" src="{{ asset('/images/login/connexion.png') }}" alt="image connexion gauche">

            <div class="container">
                <div class="left">
                    <img id="profile-tick1" src="{{ asset('/images/login/profile-tick.png') }}" alt="profile tick">
                    <h1 id="Connectez-vous-h1">Vous avez déjà un compte ?</h1>
                </div>

                <div class="right">
                    <h2 id="veuillez-connecter">Veuillez vous <br>connecter</h2>

                    @foreach ($errors->all() as $error)
                        {{ $error }}                        
                    @endforeach

                    <form action="{{ route('authenticate') }}" method="post">
                        @csrf
                        <div class="box-mail-password">
                            <div class="box-login">
                                <input type="email" id="email" name="email" placeholder="Email">
                                <div id="envelope"><i class="fa-regular fa-envelope"></i></div>
                            </div>
                            <div class="box-login">
                                <input type="password" id="password" name="password" placeholder="Password">
                                <button type="button" id="show-password" aria-label="Afficher/masquer le mot de passe">
                                    <span class="toggle-icon" aria-hidden="true"><i class="fa fa-eye"></i></span>
                                    <span class="toggle-icon-hidden" aria-hidden="true"><i class="fa fa-eye-slash"></i></span>
                                </button>
                            </div>
                        </div>
                        <button id="button-connexion" type="submit">Connexion</button>
                    </form>
                    <p id="texte-bas">Vous n'avez pas de compte, <span id="texte-bas-bleu">demandez à votre tuteur</span></p>
                </div>
            </div>


            <script>
                const togglePasswordButton = document.getElementById('show-password');
                const passwordInput = document.getElementById('password');

                togglePasswordButton.addEventListener('click', () => {
                    const passwordVisible = togglePasswordButton.classList.toggle('password-visible');
                    const toggleIcon = togglePasswordButton.querySelector('.toggle-icon');
                    const toggleIconHidden = togglePasswordButton.querySelector('.toggle-icon-hidden');
                    toggleIcon.style.display = passwordVisible ? 'none' : 'inline-block';
                    toggleIconHidden.style.display = passwordVisible ? 'inline-block' : 'none';
                    passwordInput.type = passwordVisible ? 'text' : 'password';
                });
            </script>
        </main>
    </body>
@endsection