<?php 

namespace App\Controllers;

use App\Models\SensorModel;
use App\Models\DataModel;


class Pages extends BaseController
{

    protected $SensorModel;
    protected $DataModel;
    public function __construct()
    {
        $this->SensorModel = new SensorModel();
        $this->DataModel = new DataModel();
        
    }

    public function index()
    {

        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor(),
            'data' => $this->DataModel->getData(),
        ];
        
        return view('pages/home', $data);


    }
    public function chart_data()
    {
        $data = $this->SensorModel->getSensor();
        echo json_encode($data);
    }

    public function dataNilaiSensor() 
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/N_Sensor', $data);
    }

    public function dataKelembapan() 
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/kelembapan', $data);
    }

    public function status()
    {
        $data = [
            'title' => 'halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];
        
        return view('data/status', $data);
    }

    public function updated_at() 
    {
        $data = [
            'title' => 'Halaman | Dashboard',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('data/updated_at', $data);
    }

    public function senData()
    {
        
        $suhu = $this->request->uri->getSegment(3);
        $kelembapan = $this->request->uri->getSegment(4);
        $status = $this->request->uri->getSegment(5);
        
        $data = array(
            'suhu' => $suhu, 
            'kelembapan' => $kelembapan,
            'status' => $status,
            'time' => $this->SensorModel->getSensor()
        );

        $this->SensorModel->Update(1, $data);

    }

    public function tabel()
    {
        $data = [
            'title' => 'Halaman | Tabel Data Sensor',
            'sensor' => $this->SensorModel->getSensor()
        ];

        return view('pages/tb_data', $data);

    }


}




?>