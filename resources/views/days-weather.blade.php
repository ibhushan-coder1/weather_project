@extends('index')
@section('content')
<body>

@if(isset($weatherData))
<section class="h-100" style="background-color: #C1CFEA;">
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" style="color: #282828;">
        <div class="col-md-9 col-lg-7 col-xl-5">
            <h2 class="text-white mb-2 ps-2">Hourly Weather Forecast</h2>
          <form class="row g-1 ps-1" action="/days-weather" >
            <div class="col-10">
                <input type="search" class="form-control rounded-5" name="location" placeholder="Enter City Location" aria-label="Search"
                    aria-describedby="search-addon" />
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary rounded-5">Check</button>
            </div>
        </form>
        @if(isset($currentData))
          <div class="card my-2 gradient-custom" style="border-radius: 25px;">
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
            <div class="card-body ps-3">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">Day</th>
                          <th scope="col">Weather</th>
                          <th scope="col">Temp.</th>
                          <th scope="col">Icon</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <th scope="row"><strong>{{date('d M', $weatherData['list'][0]['dt'] )}}</strong></th>
                            <td><strong> {{ $weatherData['list'][0]['weather'][0]['description'] }}</strong></td>
                            <td><strong> {{ round($weatherData['list'][0]['main']['temp'] -273.15)}}°C</strong></td>
                            <td><img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][0]['weather'][0]['icon'] }}@2x.png" height="70px" class="bg-secondary" alt=""></td>
                          </tr>
                          <tr>
                            <th scope="row"><strong>{{date('d M', $weatherData['list'][8]['dt'] )}}</strong></th>
                            <td><strong> {{ $weatherData['list'][8]['weather'][0]['description'] }}</strong></td>
                            <td><strong> {{ round($weatherData['list'][8]['main']['temp'] -273.15)}}°C</strong></td>
                            <td><img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][8]['weather'][0]['icon'] }}@2x.png" height="70px" class="bg-secondary" alt=""></td>
                          </tr>
                          <tr>
                            <th scope="row"><strong>{{date('d M', $weatherData['list'][16]['dt'] )}}</strong></th>
                            <td><strong> {{ $weatherData['list'][16]['weather'][0]['description'] }}</strong></td>
                            <td><strong> {{ round($weatherData['list'][16]['main']['temp'] -273.15)}}°C</strong></td>
                            <td><img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][16]['weather'][0]['icon'] }}@2x.png" height="70px" class="bg-secondary" alt=""></td>
                          </tr>
                          <tr>
                            <th scope="row"><strong>{{date('d M', $weatherData['list'][24]['dt'] )}}</strong></th>
                            <td><strong> {{ $weatherData['list'][24]['weather'][0]['description'] }}</strong></td>
                            <td><strong> {{ round($weatherData['list'][24]['main']['temp'] -273.15)}}°C</strong></td>
                            <td><img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][24]['weather'][0]['icon'] }}@2x.png" height="70px" class="bg-secondary" alt=""></td>
                          </tr>
                          <tr>
                            <th scope="row"><strong>{{date('d M', $weatherData['list'][32]['dt'] )}}</strong></th>
                            <td><strong> {{ $weatherData['list'][32]['weather'][0]['description'] }}</strong></td>
                            <td><strong> {{ round($weatherData['list'][32]['main']['temp'] -273.15)}}°C</strong></td>
                            <td><img src="https://openweathermap.org/img/wn/{{ $weatherData['list'][32]['weather'][0]['icon'] }}@2x.png" height="70px" class="bg-secondary" alt=""></td>
                          </tr>
                  </table>
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
            <h1 class="text-white mb-2 ps-2">Hourly Weather Forecast</h1>
          <form class="row g-1 ps-1" action="/days-weather" >
            <div class="col-10">
                <input type="search" class="form-control rounded-5" name="location" placeholder="Entar City Location" aria-label="Search"
                    aria-describedby="search-addon" />
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary rounded-5">Check</button>
            </div>
        </form>
          <div class="card my-2 mb-2 gradient-custom" style="border-radius: 25px;">
            <div class="card-body p-4">
               <p class="fs-5 text-center">Please Enter Location For Daily Weather Forecast</p>
            </div>
          </div>
          <div class="row ps-4">
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