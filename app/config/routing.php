<?php
/**
 * Created by PhpStorm.
 * User: nhtien
 * Date: 05/03/2018
 * Time: 17:15
 */

// app/config/routing.php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('lucky_show', new Route('/lucky/{slug}', array(
    '_controller' => 'AppBundle:lucky:show',
)));

return $collection;