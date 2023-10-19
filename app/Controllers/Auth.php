<?php 

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{

    protected $AuthModel;
    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Halaman Register',
        ];
        return view('auth/register', $data);
    }

    public function save()
    {

       $this->AuthModel->save([
           'username' => $this->request->getVar('username'),
           'email' => $this->request->getVar('email'),
           'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
       ]);

        return redirect()->to('auth/login');
    }

    public function login()
    {
           
        $data = [
            'title' => 'Halaman Login',
        ];

        return view('auth/login', $data);
    }

    public function input()
    {
        //ambil data dari form 
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        //lakukan pengecekan autentikasi
        $AuthModel = new \App\Models\AuthModel();
        $user = $AuthModel->where('email', $email)->first();
        //validasi password
        if ($user && password_verify($password, $user['password'])) {
            
            session()->set('user_id', $user['id']);
            session()->set('user', $user);
            return redirect()->to('pages');
        }else {
            
            return redirect()->to('auth/login')->withInput()->with('error', 'uername atau password salah');
        }

        
    }

    public function logout(){

        //jangan simpan data chace
        $response = service('response');
        $response->noCache();
        //hapus semua data sesi kita
        session()->destroy();

        return redirect()->to('auth/login');

    }
    
}

?>