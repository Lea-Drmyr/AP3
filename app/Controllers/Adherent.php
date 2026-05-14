<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Adherents_Model;

class Adherent extends BaseController
{
 public function index()
    {
        $model = new Adherents_Model();
        $data['adherents'] = $model->GetAllAdherent();

        return view('adherents/listeAdherents', $data);
    }

    
    public function creerAdherent()
    {
        return view('adherents/createAdherent');
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
            'MotDePasse'    => password_hash($this->request->getPost('MotDePasse'), PASSWORD_DEFAULT)
        ];

        $model->save($data);
        return redirect()->to('/adherents');
    }


    public function delete()
    {
        $id = $this->request->getPost('idAdherents');
        $model = new Adherents_Model();

        if ($id) {
            $model->supprimerAdherent($id);
        }

        return redirect()->to('/adherents');
    }

    public function modifierAdherent($id)
    {
        $model = new Adherents_Model();
        $adherent = $model->find($id);

        if (!$adherent) {
            return redirect()->to('/adherents');
        }

        return view('adherents/modifierAdherent', ['adherent' => $adherent]);
    }


    public function update()
{
    $model = new Adherents_Model();
    $id = $this->request->getPost('idAdherents');
    $adherent = $model->find($id);
    // Vérifie que l'ID est bien présent et existe
    if (!$adherent) {
        return redirect()->to('/adherents');
    }

    $data = [
        'nom'           => $this->request->getPost('nom'),
        'prenom'        => $this->request->getPost('prenom'),
        'mail'          => $this->request->getPost('mail'),
        'dateNaissance' => $this->request->getPost('dateNaissance'),
        'numTel'        => $this->request->getPost('numTel'),
        'adresse'       => $this->request->getPost('adresse')
    ];

    //Si mot de passe modifié
    if ($this->request->getPost('MotDePasse')) {
        $data['MotDePasse'] = password_hash($this->request->getPost('MotDePasse'), PASSWORD_DEFAULT);
    }

    $model->update($id, $data);

        $model->resetQuery();
        $adherent = $model->find($id);

        
        session()->set([
                'nom' => $adherent['nom'],
                'prenom' => $adherent['prenom'],
                'mail' => $adherent['mail'],
                'numTel' => $adherent['numTel'],
                'adresse' => $adherent['adresse']
            ]);


    return redirect()->to('/Home');
}


public function modifier($id){
        $model = new \App\Models\Adherents_Model();
        $adherent = $model->find($id);
        if(!$adherent){
            return redirect()->to('/Home');
        }
        return view('adherents/modifierAdherent', ['adherent' => $adherent]);
    }

    public function Profil()
    {
       return view('Pages/Profil');
    }

}
