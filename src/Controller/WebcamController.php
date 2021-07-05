<?php

namespace App\Controller;

use App\Application\UseCase\Webcam\WebcamList\WebcamListUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;

class WebcamController
{

    /**
     * @Route("backoffice/webcam/list", name="webcam_list", methods={"GET"})
     * @param WebcamListUseCase $useCase
     * @param Request $httpRequest
     * @param SerializerInterface $serializer
     *
     * @return JsonResponse
     */
    public function list(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
