<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\FacturaModel;
use App\Models\OrdenPagoModel;

class FacturaController extends BaseController
{
    public function create(){
        $data = $this->request->getPost();

        $data['created_at'] = date('Y-m-d');
        $data['updated_at'] = date('Y-m-d');

        $db = \Config\Database::connect();
        $query = $db->query(
            'CALL updateOrCreateInvoice(?, ?, ?, ?, ?, ?, ?)', [
                $data['cliente_id'],
                $data['numero_factura'],
                $data['fecha_emision'],
                $data['monto_total'],
                $data['estatus'],
                $data['created_at'],
                $data['updated_at']
            ]
        );
        if ($query) {
            return $this->response->setJSON([
                'status' => 'success',
                'message' => 'Factura procesada correctamente.'
            ]);
        } else {
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Hubo un error al procesar la factura.'
            ], ResponseInterface::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function show($factura_id) {
        $facturaModel = new FacturaModel();
        $opModel = new OrdenPagoModel();
        $factura = $facturaModel->where('numero_factura', $factura_id)->first();
        if ($factura) {
            $ordenesDePago = $opModel->where('factura_id', $factura['id'])->findAll();
            $factura['ordenesDePago'] = $ordenesDePago;
            return view('factura',compact('factura'));



        } else {
            return $this->response->setStatusCode(404)->setJSON(['error' => 'Factura no encontrada']);
        }
    }
    
    
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
