<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersFunctionModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['first_name', 'last_name', 'username', 'email', 'umur', 'phone'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();;
    }


    public function getUsersByGroupId($groupId)
    {
        $query = $this->select('users.*')
            ->join('auth_groups_users', 'users.id = auth_groups_users.user_id')
            ->where('auth_groups_users.group_id', $groupId)
            ->get()
            ->getResultObject('User');

        return $query;
    }

    public function countUser()
    {
        $query = $this->db->query('SELECT * FROM auth_groups_users WHERE group_id = 2');

        return $query->getNumRows();
    }
}
