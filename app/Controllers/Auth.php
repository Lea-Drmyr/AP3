<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use Config\Database;
use App\Models\Adherents_Model;

class Auth extends Controller
{
    public function index()
    {
        return view('/login/login');
    }
    
     public function creerAdherent()
    {
        return view('login/register');
    }

    public function ajoutAdherent()
    {
        $model = new Adherents_Model();

        $data = [ 
            'nom'           => $this->request->getPost('nom'),
            'prenom'        => $this->request->getPost('prenom'),
            'mail'          => $this->request->getPost('mail'),
            'dateNaissance' => $this->request->getPost('dateNaissance'),
            'numTel'        => $this->request->getPost('numTel'),
            'adresse'       => $this->request->getPost('adresse'),
            'MotDePasse'    => password_hash($this->request->getPost('MotDePasse'), PASSWORD_DEFAULT),
            'Role' => "User"
        ];

        $model->save($data);
        return redirect()->to('/login');
    }
    public function loginpost()
    {
        $AdherentsModel = new Adherents_Model();
        $adherent = $AdherentsModel->where('mail', $this->request->getPost('mail'))->first();

        if ($adherent && password_verify($this->request->getPost('MotDePasse'), $adherent['MotDePasse'])) {

            session()->set([
                'idAdherents' => $adherent['idAdherents'],
                'nom' => $adherent['nom'],
                'prenom' => $adherent['prenom'],
                'mail' => $adherent['mail'],
                'numTel' => $adherent['numTel'],
                'adresse' => $adherent['adresse'],
                'Role' => $adherent['Role'],
                'isLoggedIn' => true,
            ]);
            return redirect()->to('/Home');
        } else {
            return redirect()->to('/login')->with('error', 'Email ou mot de passe incorrect.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/Home');
    }
}
