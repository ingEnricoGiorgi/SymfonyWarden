<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Curl extends AbstractController
{

   
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    
    /**  
     * @Route("/curl/curl", name="order")  
     */  
   public function curl()
    {
        $userFirstName = 'enrico';
        $userNotifications = ['cani', 'gatti'];
      //   echo "prova";
      //  exit;
         $id=6;
         $response = $this->client->request(
            'GET', //bisogna aggiungere il rest
            'https://enrico.reflexmania.it/rest/V1/ticket/'.$id
        );

        $statusCode = $response->getStatusCode();
        // $statusCode = 200
        $contentType = $response->getHeaders()['content-type'][0];
        // $contentType = 'application/json'
        $content = $response->getContent();
        // $content = '{"id":521583, "name":"symfony-docs", ...}'
        $content = $response->toArray();
        // $content = ['id' => 521583, 'name' => 'symfony-docs', ...]
        //inizializzare un responseobject
       // print_r($content);
        
        return $this->render('ticket/ticket.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }                    
        
}