<?php


namespace App\Service;


class Covid19 implements ResponseInterface
{

    public function makeRequest($data)
    {
        // TODO: Implement makeRequest() method.

        $encoded = json_decode(file_get_contents('https://api.apify.com/v2/key-value-stores/EaCBL1JNntjR3EakU/records/LATEST?disableRedirect=true'),true);
        $total = $encoded["infected"];
        $treated = $encoded["treated"];
        $recovered = $encoded["recovered"];
        $deceased = $encoded["deceased"];
        $response["fulfillmentText"]='Today we are having:<br> -Total: '.$total.'<br/>'.'-Treated: '.$treated.' <br/>-Recovered: '.$recovered.' <br/>-Death: '.$deceased.'</br>';


        return 'Total: ' . $total.'<br>Deaths: '.$deceased.'<br>Recovered: '. $recovered.'<br>Active: '.$treated;
    } 
}