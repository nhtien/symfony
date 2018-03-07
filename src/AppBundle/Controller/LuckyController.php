<?php
/**
 * Created by PhpStorm.
 * User: nhtien
 * Date: 05/03/2018
 * Time: 15:32
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
/*use Symfony\Component\HttpFoundation\Request;*/
use Psr\Log\LoggerInterface;

class LuckyController extends Controller
{
    private $_slug = "demo";

    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

    /**
     * Matches /lucky/*
     *
     * @Route("/lucky/{slug}", name="lucky_show")
     */
/*    public function showAction($slug){
        if (trim($slug) != '') {
            $this->_slug = $slug;
        }

        return $this->render('lucky/'.$this->_slug.'.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'action'   => $this->_slug
        ]);
    }*/

    /**
     * @Route("/lucky/list/{page}", requirements={"page"="\d+"})
     */
    public function listAction($page)
    {
        return new Response(
            '<html><body>Page: '.$page.'</body></html>'
        );
    }

    /**
     * @Route("/lucky/fetching/{max}")
     */
    public function fetchingAction($max, LoggerInterface $logger)
    {
        //print_r($logger);
        $logger->info('We are logging!');
        // ...
        return new Response(
            '<html><body>Page:</body></html>'
        );
    }
}