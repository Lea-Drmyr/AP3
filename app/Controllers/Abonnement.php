<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Abonnement_Model;

class Abonnement extends BaseController
{
   public function index()
    {
        $model = new Abonnement_Model();
        $data['abonnement'] = $model->findAll();
        return view ('abonnement/listeabo' , $data);
    }
    
    public function creer() {
      return view('abonnement/createabo');
    }

    public function ajout() {
        $model = new Abonnement_Model();
        $model->save([
        'prix' => $this->request->getPost('prix')
        ]);
        return redirect()->to('/abonnement');
    }

    public function supprimer($id){
        $model = new Abonnement_Model();
        $abonnement = $model->find($id);
        if(!$abonnement){
            return redirect()->to('/abonnement');
        }
         return view('abonnement/supprimerabo', ['abonnement' => $abonnement]);

    }
    public function delete() {
        $id = $this->request->getPost('idAbonnement'); // récupère l'ID depuis le formulaire
        $model = new Abonnement_Model();

        if (!$model->find($id)) {
            return redirect()->to('/abonnement');
        }

        $model->delete($id); 
        return redirect()->to('/abonnement');
    }

    public function modifier($id){
    $model = new Abonnement_Model();
    $abonnement = $model->find($id);
    if(!$abonnement){
        return redirect()->to('/abonnement');
    }
    return view('abonnement/modifierabo', ['abonnement' => $abonnement]);
    }

    public function update() {
    $model = new Abonnement_Model();
    $id = $this->request->getPost('idAbonnement');
    $abonnement = $model->find($id);
    if(!$abonnement){
        return redirect()->to('/abonnement');
    }

    $data = [
        'prix' => $this->request->getPost('prix')
    ];

    $model->update($id, $data);
    return redirect()->to('/abonnement');
    }

}
