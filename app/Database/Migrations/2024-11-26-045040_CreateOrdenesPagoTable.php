<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdenesPagoTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'factura_id' => [
                'type'       => 'INT',
                'unsigned'       => true,
                'unsigned'   => true,
            ],
            'fecha_pago' => [
                'type' => 'DATE',
            ],
            'monto_pago' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'metodo_pago' => [
                'type'       => 'ENUM',
                'constraint' => ['transferencia', 'tarjeta', 'efectivo'],
            ],
            'referencia_pago' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('factura_id', 'facturas', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ordenes_pago', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('ordenes_pago');
    }
}
