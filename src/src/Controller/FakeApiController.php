<?php 
// src/Controller/FakeApiController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FakeApiController
{
    #[Route('/api', name: 'api')]
    public function fakeData(): JsonResponse
    {
        $data = [
            'names' => ['Alice Johnson', 'Bob Smith', 'Carol Danvers'],
            'addresses' => ['123 Maple St.', '456 Oak St.', '789 Pine St.'],
            'phones' => ['(123) 456-7890', '(321) 654-0987', '(213) 546-7890']
        ];

        return new JsonResponse($data);
    }
}
?>