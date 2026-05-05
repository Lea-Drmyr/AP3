<?php

namespace App\Models;

use CodeIgniter\Model;

class Adherents_Model extends Model
{
    protected $table            = 'adherents';
    protected $primaryKey       = 'idAdherents';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nom','prenom','mail','dateNaissance','numTel','adresse','MotDePasse','Role'];

  public function supprimerAdherent($id)
{
    $db = \Config\Database::connect();

    if (!$id) {
        return false;
    }

    $sql = "EXEC SupprAdherent ?";
    $result = $db->query($sql, [$id]);

    return $result; 
}
    public function GetAllAdherent()
    {
         $db = \Config\Database::connect();
        $query = $this->db->query("EXEC GetAllAdherent");
        return $query->getResultArray(); 
    }
}
