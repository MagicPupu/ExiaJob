@extends('layout')

<link rel="stylesheet" href="{{ asset('/css/companies.css') }}">

@section('content')
<body>
  <main>
    <h1 id="entreprises-h1">Entreprises</h1>
    <p id="companyNumber">{{ $companies->count() }} entreprises</p>

    <!--box entreprise-->
    <div class="box-entreprise">
      @foreach ($companies as $company)
      <div class="container-entreprise">
        <div class="card-entreprise" id="{{ $company->id }}">
          <div class="front-entreprise">
            <div class="front-content-entreprise">
              <img src="{{ asset('/images/company_pictures/'.$company->image) }}" alt="photo" />
              <div class="etoiles">
                @for ($i = 0; $i < $company->rate; $i++)
                    <i id="etoile1" class="gold fa fa-star" aria-hidden="true"></i>
                @endfor
                @for ($i = $company->rate; $i < 5; $i++)
                    <i id="etoile1" class="gray fa fa-star" aria-hidden="true"></i>
                @endfor
              </div>
              <h2>{{ $company->name }}</h2>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <br>
    <br>
    <br>
  </main>

  <script src="{{ asset('/js/companies.js') }}"></script>

  <footer>

  </footer>
</body>
@endsection