<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ClienteModel;

class ClienteController extends BaseController
{
    public function getAll()
    {
        $clienteModel = new ClienteModel();
        $clientes = $clienteModel->findAll();
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $clientes
        ]);
    }
}
