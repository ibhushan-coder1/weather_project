@extends('index')
@section('content')

<body>
    @if(isset($weatherData))
    <section class="vh-100" style="background-color: #C1CFEA;">
        <div class="container py-3">
            <div class="row d-flex justify-content-center align-items-center" style="color: #282828;">
                <div class="col-md-9 col-lg-7 col-xl-5">
                    <h1 class="text-white mb-3 ps-2">Hourly Weather Forecast</h1>
                    <form class="row g-1 ps-1" action="/hours-weather" >
                        <div class="col-10">
                            <input type="search" class="form-control rounded-5" name="location" placeholder="Enter City Location" aria-label="Search"
                                aria-describedby="search-addon" />
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary rounded-5">Check</button>
                        </div>
                    </form>
                    @if(isset($currentData))
          <div class="card  my-2 gradient-custom" style="border-radius: 25px;">
            <div class="card-body py-2 px-4">
  
              <div id="demo1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators mb-0">
                  <li data-target="#demo1" data-slide-to="0" class="active"></li>
                  <li data-target="#demo1" data-slide-to="1"></li>
                  <li data-target="#demo1" data-slide-to="2"></li>
                </ul>
                <!-- Carousel inner -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h2 class="display-4"><strong> {{ round($currentData['main']['temp'])}}°C</strong></h2>
                            <span class="small" style="color: #868B94">{{ $currentData['weather'][0]['main'] }}</span>
                            <p class="text-muted mb-0 fs-4">{{ $currentData['name'] }}</p>
                          </div>
                      <div>
                        <img src="https://openweathermap.org/img/wn/{{ $currentData['weather'][0]['icon'] }}@2x.png"
                          width="150px">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
            </div>
          </div>
          @endif
                    <div class="card" style="border-radius: 25px;">
                        <div class="card-body p-3">
                            <div id="demo2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators mb-0">
                                    <li data-target="#demo2" data-slide-to="0"></li>
                                    <li data-target="#demo2" data-slide-to="1" class="active"></li>
                                    <li data-target="#demo2" data-slide-to="2"></li>
                                </ul>
                                <!-- Carousel inner -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="d-flex justify-content-around text-center mb-4 pb-3 pt-2">
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][0]['main']['temp'] -273.15)}}°C</strong></p>
                                                <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][0]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][0]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][1]['main']['temp'] -273.15)}}°C</strong></p>
                                                <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][1]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][1]['weather'][0]['icon'] }}@2x.png" alt="">
                                              </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][2]['main']['temp'] -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][2]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][2]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][3]['main']['temp'] -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][3]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][3]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][4]['main']['temp'] -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud-showers-heavy fa-2x mb-3"
                                                    style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][4]['dt'] )}}</strong></p>
                                                    <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                    <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][4]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            
                                        </div>
                                        <div class="d-flex justify-content-around text-center mb-4 pb-3 pt-2">
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][5]['main']['temp']  -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud-showers-heavy fa-2x mb-3"
                                                    style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][5]['dt'] )}}</strong></p>
                                                    <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                    <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][5]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][6]['main']['temp']  -273.15)}}°C</strong></p>
                                                <i class="fas fa-sun fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][6]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][6]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][7]['main']['temp']  -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][7]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][7]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][8]['main']['temp']  -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud fa-2x mb-3" style="color: #ddd;"></i>
                                                <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][8]['dt'] )}}</strong></p>
                                                <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][8]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                            <div class="flex-column">
                                                <p class="small"><strong> {{ round($weatherData['list'][9]['main']['temp']  -273.15)}}°C</strong></p>
                                                <i class="fas fa-cloud-showers-heavy fa-2x mb-3"
                                                    style="color: #ddd;"></i>
                                                    <p class="mb-0"><strong>{{date('H:m', $weatherData['list'][9]['dt'] )}}</strong></p>
                                                    <p class="mb-0 text-muted" style="font-size: .65rem;">{{date('a')}}</p>
                                                    <img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][9]['weather'][0]['icon'] }}@2x.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    @else
    <section class="vh-100" style="background-color: #C1CFEA;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100" style="color: #282828;">
            <div class="col-md-9 col-lg-7 col-xl-5">
                <h1 class="text-white mb-3 ps-2">Hourly Weather Forecast</h1>
              <form class="row g-1 ps-1" action="/hours-weather" >
                <div class="col-10">
                    <input type="search" class="form-control rounded-5" name="location" placeholder="City" aria-label="Search"
                        aria-describedby="search-addon" />
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btn-primary rounded-5">Check</button>
                </div>
            </form>
            <div class="card my-2 mb-2 gradient-custom" style="border-radius: 25px;">
              <div class="card-body p-4">
                 <p class="fs-5 text-center">Please Enter Location For Hourly Weather Forecast</p>
              </div>
            </div>
            <div class="row">
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