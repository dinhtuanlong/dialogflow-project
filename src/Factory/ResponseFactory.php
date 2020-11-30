<?php


namespace App\Factory;


use App\Service\Covid19;
use App\Service\GoingHome;
use App\Service\Weather;

class ResponseFactory
{
    private $weather;
    private $covid19;
    private $goingHome;

    public function __construct(
        Weather $weather,
        Covid19 $covid19,
        GoingHome $goingHome
    )
    {
        $this->weather = $weather;
        $this->covid19 = $covid19;
        $this->goingHome = $goingHome;
    }

    public function getIntent(string $intent)
    {
        switch ($intent)
        {
            case "Weather":
                return $this->weather;
                break;

            case "Covid19":
                return $this->covid19;
                break;

            case "GoHome":
                return $this->goingHome;
                break;
        }
    }
}