<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProdukController extends BaseController
{
    public function index()
    {
        if (session()->get('role') != 'admin') {
            // User is not admin
            return redirect()->to('/')->with('failed', 'Access Denied.');
        }
        return view('v_produk');
    }
}
