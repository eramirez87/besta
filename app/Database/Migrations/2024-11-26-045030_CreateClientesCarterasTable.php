<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClientesCarterasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'cliente_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'cartera_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('cliente_id', 'clientes', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('cartera_id', 'carteras', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('clientes_carteras');
    }

    public function down()
    {
        $this->forge->dropTable('clientes_carteras');
    }
}
