<?php

namespace App\Controllers; 

use CodeIgniter\RESTful\ResourceController;

class AdherentController extends ResourceController
{
    public function index()
    {
        $Adherents_Model = new \App\Models\Adherents_Model();
        $data = $Adherents_Model->findAll();

        array_walk_recursive($data, function (&$item) {
            if (is_string($item)) {
                $item = utf8_encode($item);
            }
        });

        return $this->respond($data);
    }

    public function show($id = null)
    {
        $db = \Config\Database::connect();
        $sql = "SELECT * FROM adherents WHERE idAdherents = ?";
        $query = $db->query($sql, [$id]);
        $result = $query->getRow();
        if (!$result) {
            return $this->failNotFound("Adherent non trouvée");
        }
        return $this->respond($result);
    }

    public function create()
    {
        $json = $this->request->getJSON(true);
        $db = \Config\Database::connect();
        $db->query("EXEC sp_create_Adherent ?, ?, ?, ?, ?, ?, ?, ?, ?", [
            $json['nom'],
            $json['prenom'],
            $json['mail'],
            $json['dateNaissance'],
            $json['numTel'],
            $json['adresse'],
            password_hash($json['MotDePasse'], PASSWORD_DEFAULT),
            $json['idAbonnement'],
            $json['Role']
        ]);
        return $this->respondCreated($json);
    }

    public function update($id = null)
    {
        $json = $this->request->getJSON(true);
        $db = \Config\Database::connect();
        $db->query("EXEC sp_update_Adherent ?, ?, ?, ?, ?, ?, ?, ?, ?, ?", [
            $id,
            $json['nom'],
            $json['prenom'],
            $json['mail'],
            $json['dateNaissance'],
            $json['numTel'],
            $json['adresse'],
            password_hash($json['MotDePasse'], PASSWORD_DEFAULT),
            $json['idAbonnement'],
            $json['Role']
        ]);
        return $this->respond(["message" => "Mise à jour OK"]);
    }

  public function delete($id = null) {
    try {
        $model = new \App\Models\Adherents_Model();
        if ($model->delete($id)) {
            return $this->respondDeleted(['message' => 'Supprimé']);
        }
        return $this->fail("Échec suppression");
    } catch (\Exception $e) {
        // Le utf8_encode permet d'éviter le crash "Malformed UTF-8"
        return $this->failServerError(utf8_encode($e->getMessage()));
    }
}
}

