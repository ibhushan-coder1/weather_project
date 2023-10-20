@extends('index')
@section('content')
<body>
    @if(isset($weatherData))
    <section class="vh-100" style="background-color: #4B515D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-12 col-lg-6 col-xl-4">
                  <h2 class="text-white mb-3 ps-2">Currect Weather Forecast</h2>
                    <form class="row g-1 ps-1" action="/current-weather" >
                        <div class="col-10">
                            <input type="search" class="form-control rounded-5" name="location" placeholder="Enter City Location" aria-label="Search"
                                aria-describedby="search-addon" />
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary rounded-5">Check</button>
                        </div>
                    </form>
                    <div class="card my-2" style="color: #4B515D; border-radius: 35px;">
                        <div class="card-body p-4">

                            <div class="d-flex">
                                <h5 class="flex-grow-1">{{ $weatherData['name'] }}</h5>
                                <h6>{{date('d M', $weatherData['dt']) }}</h6>
                                <!-- <h6 class="ps-2">{{date('h:m a', $weatherData['dt']) }}</h6> -->
                            </div>

                            <div class="d-flex flex-column text-center mt-5 mb-4">
                                <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">  {{ round($weatherData['main']['temp'])}}°C </h6>
                                <span class="small" style="color: #868B94">{{ $weatherData['weather'][0]['main'] }}</span>
                                <span class="small" style="color: #868B94">{{ $weatherData['weather'][0]['description'] }}</span>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1" style="font-size: 1rem;">

                                    <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i> <span class="ms-1">
                                        Wind: {{ $weatherData['wind']['speed'] }}   km/h
                                        </span></div>
                                    <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i> <span class="ms-1">
                                      Humidity:  {{ round($weatherData['main']['humidity'])}}% </span>
                                    </div>
                                    <div><i class="fas fa-sun fa-fw" style="color: #868B94;"></i> <span class="ms-1">
                                            0.2h </span>
                                    </div>
                                </div>
                                <div class="bg-dark">
                                    <img src="https://openweathermap.org/img/wn/{{ $weatherData['weather'][0]['icon'] }}@2x.png"
                                        width="100px">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @else
    <section class="vh-100" style="background-color: #4B515D;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-12 col-lg-6 col-xl-4">
              <h2 class="text-white mb-3">Currect Weather Forecast</h2>
                <form class="row g-1 ps-1" action="/current-weather" >
                    <div class="col-10">
                        <input type="search" class="form-control rounded-5" name="location" placeholder="Enter City Location" aria-label="Search"
                            aria-describedby="search-addon" />
                    </div>
                    <div class="col-2">
                        <button type="submit" class="btn btn-primary rounded-5">Check</button>
                    </div>
                </form>
                <div class="card my-2 mb-2 gradient-custom" style="border-radius: 25px;">
                  <div class="card-body p-4">
                     <p class="fs-5 text-center">Please Enter Location For Current Weather Forecast</p>
                  </div>
                </div>
              <div class="row ps-3">
                <div class="col">
                  <a href="/">Current Weather</a>
                </div>
                <div class="col">
                  <a href="/hours-weather-view">Hours Weather</a>
                </div>
                <div class="col">
                  <a href="/days-weather-view">Daily Weather</a>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </section>
    @endif

</body>

@endsection