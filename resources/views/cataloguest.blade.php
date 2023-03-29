<x-main>
        <section class="main-container text-center ">
            <div class="location" id="home">
                <h1 id="home">Film su FakeFlix</h1>
                <div class="box">
                    <div class="row gx-5">
                        
                        <img class="card-img-top" src="{{$item['cover']}}" alt="..." />
                                  <div class="card-body p-1"> 
                                      <h5 class="card-title mb-3">{{ $item['name'] }}</h5>
                                </div>
                        </div>

                </div>
            </div>

        </section>
</x-main>
