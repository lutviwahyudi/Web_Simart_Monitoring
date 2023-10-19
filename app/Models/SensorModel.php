<?php

namespace App\Models;

use CodeIgniter\Model;

class SensorModel extends Model
{
    protected $table = 'parameter';
    protected $primary_key = 'id';
    protected $allowedFields = ['suhu', 'kelembapan', 'updated_at'];

    //memperbaharui data secara real time
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getSensor()
    {
        return $this->findAll();
    }


    public function getDataFromTable1()
    {
        return $this->db->table($this->table)
            ->select('suhu, kelembapan, updated_at')
            ->get()
            ->getResultArray();

    }
}