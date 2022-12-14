<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\CurlHttpClient;
//https://app.symfonyenrico.test/insertcontroller/richiestapost

class InsertController extends AbstractController
{
    private $client;

     /**  
     * @Route("/insertcontroller/richiestapost", name="prova")  
     */  
    public function richiestaPost()
    {
        $TEST = $this->getParameter('app.enrico');
        $client = new CurlHttpClient();
        $authorization = "Authorization: Bearer gzxr26do5ssy19oe0mfpy6y185lilpsk";
               $data=[
                'nome'=>'provauno',
                'cognome'=>'provauno'
               ];
                
                if($TEST =="prova"){
               echo "token approvato symfony";
               echo "<br>";
               $url = 'https://enrico.reflexmania.it/rest/V1/casobase/';
               $data = array("token"=>"tokenmagento","nome" => "api2", "cognome"=>"api2", "ticketid"=>"18", "email"=>"api2@gmail.com");
               $postdata = json_encode($data);
               $curl = curl_init();
               curl_setopt($curl, CURLOPT_URL, $url);
               curl_setopt($curl, CURLOPT_POST, true);
               curl_setopt($curl, CURLOPT_HTTPHEADER, array("Accept: application/json", 'Content-Type:application/json', $authorization));
               curl_setopt($curl, CURLOPT_POSTFIELDS, $postdata );
               curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

               $resp = curl_exec($curl);
               curl_close($curl);
               } else {
                echo "token rifiutato";
               }
              echo $resp;
         
            return new Response(
                '<html><body> </body></html>'
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