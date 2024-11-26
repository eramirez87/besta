<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class FacturaController extends BaseController
{
    public function getAll()
    {
        $db = \Config\Database::connect();
        $query = $db->query('CALL getAllInvoices()');
        $result = $query->getResultArray();
        return $this->response->setJSON([
            'status' => 'success',
            'data' => $result
        ]);
    }
}
