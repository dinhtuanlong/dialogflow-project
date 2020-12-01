<?php


namespace App\Factory;


use App\Service\Covid19;
use App\Service\GoingHome;
use App\Service\MenuWebhook;
use App\Service\Weather;

class ResponseFactory
{
    private $weather;
    private $covid19;
    private $goingHome;
    private $menuWebhook;

    public function __construct(
        Weather $weather,
        Covid19 $covid19,
        GoingHome $goingHome,
        MenuWebhook $menuWebhook
    )
    {
        $this->weather = $weather;
        $this->covid19 = $covid19;
        $this->goingHome = $goingHome;
        $this->menuWebhook = $menuWebhook;
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

            case "Database":
                return$this->menuWebhook;
                break;

        }
    }
}