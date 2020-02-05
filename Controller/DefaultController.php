<?php

namespace App\Lahmacun\APIResponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
  /**
   * @Route("/test/test", name="test_test")
   */
  public function index()
  {
    return new Response('test');
  }
}