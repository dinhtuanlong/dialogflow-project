<?php


namespace App\Service;


class FirestoreWebhook extends FirestoreConnector implements ResponseInterface
{

    public function makeRequest($data)
    {
        // TODO: Implement makeRequest() method.
        $ref = $this->getReference('ABC');
        return $ref->getValue();
    }
}