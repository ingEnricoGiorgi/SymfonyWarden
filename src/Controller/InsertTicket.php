<?php
// src/Controller/TaskController.php
namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class InsertTicket extends AbstractController
{
     /**  
     * @Route("/insertticket/new", name="insertticket")  
     */  
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
      //  $task = new Task();
      //  $task->setTask('Write a Ticket');
        

        $form = $this->createFormBuilder() //$task
            ->add('nome', TextType::class)
            ->add('cognome', DateType::class)
            ->add('ticketid', DateType::class)
            ->add('email', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'Create Task'])
            ->getForm();

            return $this->renderForm('ticket/insert.html.twig', [
                'arrayform' => $form
            ]);
    }
}