<?php
namespace App\Filters;

use App\Services\JWTService;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\Config\Services;

class JWTFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $authHeader = $request->getHeaderLine('Authorization');

        if (empty($authHeader)) {
            return Services::response()
                ->setJSON([
                    'status' => 'error',
                    'message' => 'Token d\'accès manquant'
                ])
                ->setStatusCode(401);
        }

        // Vérifier le format "Bearer {token}"
        if (!preg_match('/Bearer\s+(.*)$/i', $authHeader, $matches)) {
            return Services::response()
                ->setJSON([
                    'status' => 'error',
                    'message' => 'Format de token invalide'
                ])
                ->setStatusCode(401);
        }

        $token = $matches[1];

        try {
            // Valider le token
            $decoded = JWTService::validateToken($token);

            // Stocker les données utilisateur dans la requête pour usage ultérieur
            $request->user = $decoded;
        } catch (\Exception $e) {
            return Services::response()
                ->setJSON([
                    'status' => 'error',
                    'message' => $e->getMessage()
                ])
                ->setStatusCode(401);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Pas d'action après la requête
    }
}
