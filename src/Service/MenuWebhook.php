<?php


namespace App\Service;


class MenuWebhook extends FirebaseConnector implements ResponseInterface
{

    public function makeRequest($data)
    {
        // TODO: Implement makeRequest() method.
        $ref = $this->getReference('ABC')->getChild("POI");
        return $ref->getValue();
    }
}
