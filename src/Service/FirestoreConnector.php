<?php


namespace App\Service;


use Kreait\Firebase\Firestore;

abstract class FirestoreConnector implements ResponseInterface
{
    private $firestore;

    public function __construct(Firestore $firestore)
    {
        $this->firestore = $firestore;
    }

    public function getReference($key)
    {
        return $this->database->getReference($key);
    }

}