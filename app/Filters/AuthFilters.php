<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilters implements FilterInterface
{
public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        if ($arguments) {
            $userType = session()->get('Role'); 

            if (!in_array($userType, $arguments)) {

                return redirect()->to('/unauthorized'); 
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Rien à faire après la requête
    }
}
