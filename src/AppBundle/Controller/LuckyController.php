<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManagerInterface;

class LuckyController extends Controller
{
	/**
     * @Route("/lucky/jquery")
     */
    public function registerTransactionAction()
    {
    	$em = $this->getDoctrine()->getManager();	
		
	   	$repository = $this->getDoctrine()->getRepository(User::class);
		$user = $repository->findOneBy(
		    array('name' => 'Michel De Cesaro', 'city' => 'Fulda')
		);
		if($user == NULL){
			 return new Response("Name not found!");
		} else {
			 return new Response($user->getName());
		}
       
	}
	
	
}
?>