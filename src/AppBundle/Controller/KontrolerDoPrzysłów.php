<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /*
     * PRZYKŁADOWA AKCJA
     */


    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

   /*
    * <-----------------------------KOKSU-----------------------------> (ROBISZ 2 ENTERY POD SPODEM I WRZUCASZ AKCJE)
    */


    /*
    * <-----------------------------AREK-----------------------------> (ROBISZ 2 ENTERY POD SPODEM I WRZUCASZ AKCJE)
    */


    /*
    * <-----------------------------BARTUŚ----------------------------> (ROBISZ 2 ENTERY POD SPODEM I WRZUCASZ AKCJE)
    */

}
