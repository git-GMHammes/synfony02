<?php
// src/Controller/HomeController.php
namespace App\Controller;

use App\Controller\BaseController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $baseController;

    public function __construct(BaseController $baseController)
    {
        $this->baseController = $baseController;
    }

    #[Route('/home', name: 'home')]
    public function index()
    {
        $message = $this->baseController->testMennage('Gustavo Hammes');
        $url = $this->baseController->baseURL();

        return $this->render('home.html.twig',
            [
                'message' => $message,
                'porta' => SERVER_PORT
            ]);
    }
}

?>