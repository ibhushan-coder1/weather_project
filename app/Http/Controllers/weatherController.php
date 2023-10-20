<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class weatherController extends Controller
{
    public function currentWeather(Request $req)
    {
        // return $req->location;
       
        $city = $req->location;
        // OpenWeather API key
        $apiKey = '570be7ed45b8cbf774caba4ce59baaba';

        // new Guzzle client instance
        $client = new Client();

        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";

        try {
            // GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            return view('home', ['weatherData' => $data]);
            return $data;
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }

    public function hoursWeatherView()
    {
        return view('hours-weather');
    }

    public function hoursWeather(Request $req)
    {
        if ($req) {
            $city = $req->location;
            // OpenWeather API key
            $apiKey = '570be7ed45b8cbf774caba4ce59baaba';

            // new Guzzle client instance
            $client = new Client();

            $currentApiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";
            $apiUrl = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}";

            try {
                // GET request to the OpenWeather API
                $response = $client->get($apiUrl);
                $currentResponse = $client->get($currentApiUrl);

                // Get the response body as an array
                $data = json_decode($response->getBody(), true);
                $currentData = json_decode($currentResponse->getBody(), true);

                return view('hours-weather', ['weatherData' => $data, 'currentData' => $currentData]);
                //    return $data;
            } catch (\Exception $e) {
                // Handle any errors that occur during the API request
                return view('api_error', ['error' => $e->getMessage()]);
            }
        }
    }
    public function daysWeatherView()
    {
        return view('days-weather');
    }
    public function daysWeather(Request $req)
    {
        if ($req) {
            $city = $req->location;
            // OpenWeather API key
            $apiKey = '570be7ed45b8cbf774caba4ce59baaba';

            // new Guzzle client instance
            $client = new Client();

            $currentApiUrl = "http://api.openweathermap.org/data/2.5/weather?q={$city}&units=metric&appid={$apiKey}";
            $apiUrl = "https://api.openweathermap.org/data/2.5/forecast?q={$city}&appid={$apiKey}";

            try {
                // GET request to the OpenWeather API
                $response = $client->get($apiUrl);
                $currentResponse = $client->get($currentApiUrl);

                // Get the response body as an array
                $data = json_decode($response->getBody(), true);
                $currentData = json_decode($currentResponse->getBody(), true);

                return view('days-weather', ['weatherData' => $data, 'currentData' => $currentData]);
                return $data;
            } catch (\Exception $e) {
                // Handle any errors that occur during the API request
                return view('api_error', ['error' => $e->getMessage()]);
            }
        }
    }
}
