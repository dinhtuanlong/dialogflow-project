<?php

namespace App\Controller;

use App\Factory\ResponseFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APIController extends AbstractController
{
    private $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @Route("/", name="api_controller")
     */
    public function index(): Response
    {
        //Extract data from Dialogflow request
        $data = json_decode(file_get_contents('php://input'), true);
        $response["fulfillmentText"]='Hello from API';

        //Extract intent
        $intent =  $data['queryResult']['intent']['displayName'];
        $intentResponse = $this->responseFactory->getIntent($intent);
        $responseText = $intentResponse->makeRequest($data);
        $response["fulfillmentText"] = $responseText;


        header('Content-type:application/json;charset=utf-8');
        echo json_encode($response);

        return $this->json([

        ]);
    }
}
