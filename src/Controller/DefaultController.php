<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class DefaultController
{
    /**
     * @Route("/", name="default.index")
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(array('message' => 'My name is Radosław! :)'));
    }
}
