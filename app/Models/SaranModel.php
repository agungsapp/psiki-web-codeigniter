<?php

namespace App\Models;

use CodeIgniter\Model;

class SaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'saran';
    protected $primaryKey       = 'saran_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['gejala_id', 'saran'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $db;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function cariSaran($gejala_id)
    {
        return $this->db->query("SELECT saran FROM saran WHERE gejala_id = $gejala_id")->getResult();
    }
    public function getAll()
    {
        return $this->db->query("SELECT * FROM saran")->getResult();
    }
}
