<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateFacturasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'cliente_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
                'unsigned'   => true,
            ],
            'numero_factura' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'fecha_emision' => [
                'type' => 'DATE',
            ],
            'monto_total' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'estatus' => [
                'type'       => 'ENUM',
                'constraint' => ['pendiente', 'pagada', 'cancelada'],
                'default'    => 'pendiente',
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
        $this->forge->addForeignKey('cliente_id', 'clientes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('facturas', true, ['ENGINE' => 'InnoDB']);
    }

    public function down()
    {
        $this->forge->dropTable('facturas');
    }
}
