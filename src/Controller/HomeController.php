<?php

namespace App\Controller;

use App\Entity\Contact;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ContactRepository;

class HomeController extends AbstractController
{

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * HomeController constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function indexAction()
    {
        $contactRepo = $this->em->getRepository(Contact::class);
        $contactList = $contactRepo->getAllFields();

        return $this->render('home/index.html.twig', [
            'contactList' => $contactList
        ]);
    }
}
