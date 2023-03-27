<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="/css/style.css" />

<body>
    <div class="wrapper overflow-hidden">
        <header>
            <div class="netflixLogo">
                <a id="logo">
                    <img src="/img/logo.png" alt="Logo Image">
                </a>
            </div>
            <nav class="main-nav">
                <a href="{{route('homepage')}}">Home</a>
                <a href="{{route('cataloguefm')}}">Film</a>
                <a href="{{route('cataloguetv')}}">Serie TV</a>

            </nav>
        </header>

        <section class="main-container text-center ">
            <div class="location" id="home">
                <h1 id="home">Film su FakeFlix</h1>
                
                    <div class="row gx-5">
                        @foreach ($film as $film)
                                    <div class="col-lg-3 mb-5">  
                                            <div class="card h-100 shadow border-0">
                                                <img class="card-img-top" src="{{$film['cover']}}" alt="..." />
                                                <div class="card-body p-1"> 
                                                    <a class="text-decoration-none link-dark stretched-link" href="{{route('catalogue1', ['id' => $film['id']])}}"><h5 class="card-title mb-3">{{ $film['name'] }}</h5></a>
                                                </div> 
                                            </div> 
                                    </div>
                                @endforeach
                    </div>

                <
            </div>

        </section>

        <footer>

        </footer>
    </div>
</body>

</html>
