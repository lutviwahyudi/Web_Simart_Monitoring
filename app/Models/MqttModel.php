<?php

namespace App\Models;

use CodeIgniter\Model;

class MqttModel extends Model
{
    protected $table = 'parameter';
    protected $primary_key = 'id';
    protected $allowedFields = ['N_Sensor', 'kelembapan', 'updated_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getSensor()
    {
        return $this->findAll();
    }
}
