<?php 
namespace App\Controllers;

class Landing extends BaseController
{
    public function page()
    {
        $data = ['title' => 'Home | Simart.ir'];
        return view('pages/landing', $data);    
    }    
}


?>