<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;


class HomeControllers extends BaseController
{
    public function index()
    {
       
        return view('Pages/Home');
    }
}
