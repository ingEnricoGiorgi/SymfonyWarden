<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
//use Symfony\Component\HttpClient\CurlHttpClient;
//https://app.symfonyenrico.test/postform/requestPost

class InsertFormController extends AbstractController
{
    private $client;
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
     /**  
     * @Route("/postform/requestPost", name="requestPost")  
     */  
    public function requestPost(Request $request)
    {
        $arraycustom = json_encode( ['ticket' => ['number_id' => null,'nome' => 'enrico', 'cognome' => 'post']]);
        $response = $this->client->request('POST', 'https://enrico.reflexmania.it/rest/V1/insertform/',
         
          [ 
            'headers' =>[
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer lrn8upumdk4ot24o4molzug6ckrggsiy'],
            'body'=> 
            '{
                "ticket":{
                    "number_id": null,
                     "nome" : "enrico", 
                    "cognome" :"post"
                }
                }'
          ]
    );
        
       // $decodedPayload = $response->toArray();
        
        //echo $decodedPayload;
        return new Response(
            '<html><body> OK </body></html>'
        ); 
    }
}