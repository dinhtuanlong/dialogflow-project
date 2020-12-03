<?php


namespace App\Factory;


use App\Service\Covid19;
use App\Service\GoingHome;
use App\Service\MenuWebhook;
use App\Service\Weather;
use App\Service\Quote;

class ResponseFactory
{
    private $weather;
    private $covid19;
    private $goingHome;
    private $menuWebhook;
    private $quote;

    public function __construct(
        Weather $weather,
        Covid19 $covid19,
        GoingHome $goingHome,
        MenuWebhook $menuWebhook,
        Quote $quote
    )
    {
        $this->weather = $weather;
        $this->covid19 = $covid19;
        $this->goingHome = $goingHome;
        $this->menuWebhook = $menuWebhook;
        $this->quote = $quote;
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
                return $this->menuWebhook;
                break;

            case "Quote":
                return $this->quote;
                break;

        }
    }
}