<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\CurlHttpClient;

class InsertController extends AbstractController
{
    private $client;

     /**  
     * @Route("/prova/prova", name="prova")  
     */  
    public function prova()
    {
        $client = new CurlHttpClient();
        
        
               echo 'prova';
               $data=[
                'nome'=>'provauno',
                'cognome'=>'provauno'
               ];
  

            

               $url = 'https://enrico.reflexmania.it/rest/V1/casobase/';
               //echo json_encode($data).'\n';
               //$dio=json_encode($data);
               $dio= json_encode( array( "customer"=> $data ) );
               $curl = curl_init();
               curl_setopt($curl, CURLOPT_URL, $url);
               curl_setopt($curl, CURLOPT_POST, true);
               curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: application/json", 'Content-Type:application/json'));
               curl_setopt($curl, CURLOPT_POSTFIELDS, $dio);
               curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

               $resp = curl_exec($curl);
               curl_close($curl);
               
               echo $resp;
         
            return new Response(
                '<html><body>Richiesta get: </body></html>'
            );
            
           
    }
}

/*
$data = array(
    'nickname' => $nickname,
    'avatarNumber' => 5,
    'tagLine' => 'a test dev!'
);
$response = $client->post('/api/programmers', [
    'body' => json_encode($data)
]);
*/