<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ThirdController extends Controller
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
    
   /**
     * @Route("/male-zyski.html", name="male-zyski")
     */
    public function malezyskiAction()
    {
        return $this->render('default/male-zyski.html.twig');
    }

    /*
    * <-----------------------------AREK-----------------------------> (ROBISZ 2 ENTERY POD SPODEM I WRZUCASZ AKCJE)
    */
    
    
    /*
    * <-----------------------------MICHAŁ----------------------------> (ROBISZ 2 ENTERY POD SPODEM I WRZUCASZ AKCJE)
    */


    /*
    * <-----------------------------BARTUŚ----------------------------> (ROBISZ 2 ENTERY POD SPODEM I WRZUCASZ AKCJE)
    */

}
