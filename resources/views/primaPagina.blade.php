<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prima pagina</title>

    {{-- bostrap link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid p-0 ">
        
        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('seconda')}}">Seconda pagina</a>
                  <a class="nav-link" href="{{route('terza')}}">Terza pagina</a>
                 
                </div>
              </div>
            </div>
          </nav>

        <div class="container my-4">

            <h1 class=" display-3 text-center bg-primary-subtle mb-3 "> Hello World</h1>

            <h3>{{ $saluto }}</h3>

            <h4>{{ $saluto2 }}</h4>

            <ul>
                @foreach($luoghi as $luogo)
                    <li> 
                        {{ $luogo }}
                    </li>
                @endforeach
            </ul>


            
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
    
</body>
</html>