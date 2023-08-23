<?php

namespace App\Models;

use CodeIgniter\Model;

class JawabanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'jawaban';
    protected $primaryKey       = 'jawaban_id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['user_id', 'jawaban'];

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

    public function cekStatusPsikotes($id)
    {
        return $this->db->query("SELECT * FROM jawaban WHERE user_id = $id")->getNumRows();
    }
    public function getDataJawabanByID($id)
    {
        return $this->db->query("SELECT * FROM jawaban WHERE user_id = $id")->getResult();
    }

    public function getUsersAnswer()
    {
        return $this->db->query("SELECT COUNT(DISTINCT user_id) AS jumlah
FROM jawaban;")->getRow();
    }

    public function reset($id)
    {
        return $this->db->query("DELETE FROM jawaban WHERE user_id = $id");
    }
}
