<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Candidature pour l'offre : {{ $offer->offer_name }}</h3>
    <p>
        Madame, Monsieur,<br>
        Je vous présente ma candidature pour l'offre de stage {{ $offer->offer_name }}.<br>
        Je vous remercie par avance de la considération que vous porterez à ma candidature,<br>
        <br>
        Cordialement,<br>
        {{ $user->name }}
    </p>
</body>
</html>