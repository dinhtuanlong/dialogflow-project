<?php


namespace App\Service;

use Kreait\Firebase\Factory;

abstract class FirebaseConnector implements ResponseInterface
{
    private $database;

    public function __construct()
    {
        $this->database = (new Factory)->withServiceAccount('secret/dialogflow-dtl-firebase-adminsdk-y3xds-4feb830f14.json')->createDatabase();
    }

    public function getReference($key)
    {
        return $this->database->getReference($key);
    }

}