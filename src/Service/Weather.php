<?php


namespace App\Service;


class Weather implements ResponseInterface
{

    public function makeRequest($data)
    {
        // TODO: Implement makeRequest() method.
        $city = $data['queryResult']['parameters']['geo-capital'];
        $encoded = json_decode(file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID=7ce9d4563a62fc5527f03b1234e972f4'),true);
        file_put_contents('filename.txt', print_r($encoded, true));
        $descript = $encoded["weather"][0]["description"];
        $tempK = $encoded["main"]["temp"];
        $tempC = $tempK - 272.15;
        return 'The temperature in '.$city.' is '.$tempC.'<br/>'.'And the weather is '.$descript;
    }
}