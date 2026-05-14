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
  
    public function Patterns(): string
    {
        return view('Pages/Patterns');
    }
    
    public function Realisation(): string
    {
        return view('Pages/Realisation');
    }
    
    public function Adhesion(): string
    {
        return view('Pages/Adhesion');
    }

    public function Contact(): string
    {
        return view('Pages/Contact');
    }
    
}
