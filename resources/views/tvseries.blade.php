<x-main>
        <section class="main-container text-center ">
            <div class="location" id="home">
                <h1 id="home">Serie Tv su FakeFlix</h1>
                <div class="row gx-5">
                    @foreach ($tv as $tv)
                                <div class="col-lg-3 mb-5">  
                                        <div class="card h-100 shadow border-0">
                                            <img class="card-img-top" src="{{$tv['cover']}}" alt="..." />
                                            <div class="card-body p-1"> 
                                                <a class="text-decoration-none link-dark stretched-link" href="{{route('catalogue1', ['id' => $tv['id']])}}"><h5 class="card-title mb-3">{{ $tv['name'] }}</h5></a>
                                            </div> 
                                        </div> 
                                </div>
                            @endforeach
                </div>
            </div>

        </section>
</x-main>

