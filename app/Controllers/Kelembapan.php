<?php
namespace App\Controllers;

use App\Models\MqttModel;

class Kelembapan extends BaseController
{
    protected $MqttModel;
    public function __construct()
    {
        $this->MqttModel = new MqttModel();
        
    }
    public function index()
    {
        
        
        $websoket = json_decode(file_get_contents('php://input'), true);
        $kelembapan = $websoket['payload'];
        
     
       
        $data = array(
            'kelembapan' => $kelembapan, 
            'time' => $this->MqttModel->getSensor()
        );

        $this->MqttModel->Update(1, $data);
        
    }
}
