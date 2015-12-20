<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/time")
 */
class DateController
{
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function getAction()
    {
        $date = new \DateTime();

        return new JsonResponse([
            'date' => $date->format('Y-m-d'),
            'time' => $date->format('H:i:s')
        ]);
    }
}
