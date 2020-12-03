<?php


namespace App\Service;


class Quote implements ResponseInterface
{

    public function makeRequest($data)
    {
        // TODO: Implement makeRequest() method.

        $encoded = json_decode(file_get_contents('https://www.affirmations.dev/?fbclid=IwAR0u05texpiVPwfaQjTBcR4m8bRsfB8VCE9k12JeF8J1zdqMTo_GwkbvBLc'),true);
        $affirmation = $encoded["affirmation"];
        // $response["fulfillmentText"]='Today we are having:<br> -Total: '.$total.'<br/>'.'-Treated: '.$treated.' <br/>-Recovered: '.$recovered.' <br/>-Death: '.$deceased.'</br>';


        return $affirmation;
    } 
}