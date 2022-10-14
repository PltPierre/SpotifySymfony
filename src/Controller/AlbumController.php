<?php

namespace App\Controller;

use SpotifyWebAPI\SpotifyWebAPI;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    #[Route('/album', name: 'app_album')]
    public function index(SpotifyWebAPI $spotifyWebAPI): JsonResponse
    {
        $search = $spotifyWebAPI->search("Thriller", "album");
        dd($search);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/AlbumController.php',
        ]);
    }
}
