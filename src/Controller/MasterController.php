<?php

namespace App\Controller;

use App\Entity\Capitalize;
use App\Entity\Dashes;
use App\Entity\Logger;
use App\Entity\Master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MasterController extends AbstractController
{
    /**
     * @Route("/", name="master")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $message = (string)$request->request->get('message');

        if($request->request->get('capitalize') === 'capitalize'){
            $master = new Master($message, new Capitalize(), new Logger());
        }else{
            $master = new Master($message, new Dashes(), new Logger());
        }
        return $this->render('master/index.html.twig', [
            'message' => $master->getMessage(),
        ]);
    }

}
